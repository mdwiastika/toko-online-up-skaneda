<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Kabupaten;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Provinsi;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function main()
    {
        $all_keranjang = Keranjang::where('user_id', Auth::id())->get();
        $user = Auth::user();
        $provinsi = Provinsi::where('id_provinsi', $user->provinsi_id)->first();
        $kabupaten = Kabupaten::where('id_kabupaten', $user->kabupaten_id)->first();
        return view('user.checkout.main', [
            'title' => 'Checkout Produk',
            'user' => $user,
            'kabupaten' => $kabupaten,
            'provinsi' => $provinsi,
            'keranjangs' => $all_keranjang,
        ]);
    }
    public function proses(Request $request)
    {
        try {
            $all_keranjang = Keranjang::where('user_id', Auth::id())->get();
            $user = Auth::user();
            $transaksi = Transaksi::orderBy('id', 'DESC')->first();
            if (empty($transaksi)) {
                $kode_transaksi = 'TR-0001';
            } else {
                $kode_transaksi = 'TR-000' . ((int)substr($transaksi->kode_transaksi, 6) + 1);
            }
            $transaksi = new Transaksi();
            $transaksi->user_id = Auth::id();
            $transaksi->kode_transaksi = $kode_transaksi;
            $transaksi->kode_invoice = '-';
            $transaksi->ekspedisi = $request->ekspedisi;
            $transaksi->catatan_pembeli = $request->catatan_pembeli;



            $transaksi->tanggal_transaksi = date('Y-m-d', strtotime($request->tanggal_transaksi));
            $transaksi->status_transaksi = 'Pending';
            $transaksi->provinsi_id = $user->provinsi_id;
            $transaksi->kabupaten_id = $user->kabupaten_id;
            $transaksi->kode_pos = $user->kode_pos;
            $transaksi->alamat_lengkap = $user->alamat_lengkap;
            $transaksi->catatan_pembeli = $request->catatan_pembeli;
            $transaksi->save();
            if ($transaksi) {
                $transaksi = Transaksi::where('id', $transaksi->id)->first();
                $transaksi->kode_invoice = date('dmY') . '' . $transaksi->id;
                $transaksi->save();
                foreach ($all_keranjang as $key => $value) {
                    TransaksiDetail::create([
                        'transaksi_id' => $transaksi->id,
                        'produk_id' => $value->produk_id,
                        'qty' => $value->qty
                    ]);
                    $produk = Produk::where('id', $value->produk_id)->first();
                    $produk->stok_produk = ($produk->stok_produk - $value->qty);
                    $produk->save();
                }
                foreach ($all_keranjang as $key => $value) {
                    $keranjang = Keranjang::where('id', $value->id)->first();
                    $keranjang->delete();
                }
            }
            return redirect('/user/dashboard')->withInput()->with('status', 'success')->with('message', 'Berhasil checkout karanjang');
        } catch (\Throwable $th) {
            return back()->withInput()->with('status', 'error')->with('message', $th->getMessage());
        }
    }
    public function history()
    {
        $transaksi = Transaksi::with(['users', 'transaksi_detail', 'kabupaten', 'provinsi'])->where('user_id', Auth::id())->get();
        return view('user.checkout.history', [
            'title' => 'Histori Transaksi',
            'all_transaksi' => $transaksi,

        ]);
    }
    public function complete(Request $request)
    {
        $id = $request->id;
        $get_checkout = Transaksi::where('id', $id)->first();
        if ($get_checkout) {
            $get_checkout->status_transaksi = 'Selesai';
            $get_checkout->save();
            if ($get_checkout) {
                return back()->withInput()->with('status', 'success')->with('message', 'Berhasil menyelesaikan transaksi');
            } else {
                return back()->withInput()->with('status', 'error')->with('message', 'Gagal menyelesaikan transaksi');
            }
        } else {
            return back()->withInput()->with('status', 'error')->with('message', 'Gagal menyelesaikan transaksi');
        }
    }
}
