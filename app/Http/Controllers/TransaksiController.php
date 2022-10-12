<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;
use App\Models\User;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('admin.transaksi.main', [
            'title' => 'Table Transaksi',
            'active' => 'datamaster',
            'transaksis' => $transaksis,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::where('level_user', 'Pengguna')->get();
        $produk = Produk::with(['kategori'])->get();
        return view('admin.transaksi.add', [
            'title' => 'Form Transaksi',
            'active' => 'datamaster',
            'users' => $user,
            'produks' => $produk,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'user_id' => 'required',
                'produk_id' => 'required',
                'tanggal_transaksi' => 'required',
                'ekspedisi' => 'required',
                'catatan_pembeli' => 'required'
            ]);
            $user = User::where('id', $request->user_id)->first();
            $transaksi = Transaksi::orderBy('id', 'DESC')->first();
            if (empty($transaksi)) {
                $kode_transaksi = 'TR-0001';
            } else {
                $kode_transaksi = 'TR-000' . ((int)substr($transaksi->kode_transaksi, 6) + 1);
            }
            $transaksi = new Transaksi();
            $transaksi->user_id = $request->user_id;
            $transaksi->kode_transaksi = $kode_transaksi;
            $transaksi->kode_invoice = '-';
            $transaksi->ekspedisi = $request->ekspedisi;
            $transaksi->catatan_pembeli = $request->catatan_pembeli;



            $transaksi->tanggal_transaksi = date('Y-m-d', strtotime($request->tanggal_transaksi));
            $transaksi->status_transaksi = 'Selesai';
            $transaksi->provinsi_id = $user->provinsi_id;
            $transaksi->kabupaten_id = $user->kabupaten_id;
            $transaksi->kode_pos = $user->kode_pos;
            $transaksi->alamat_lengkap = $user->alamat_lengkap;
            $transaksi->save();
            if ($transaksi) {
                $transaksi = Transaksi::where('id', $transaksi->id)->first();
                $transaksi->kode_invoice = date('dmY') . '' . $transaksi->id;
                $transaksi->save();
                $transaksi_detail = new TransaksiDetail();
                $transaksi_detail->transaksi_id = $transaksi->id;
                $transaksi_detail->produk_id = $request->produk_id;
                $transaksi_detail->qty = 1;
                $transaksi_detail->save();
            }
            if ($transaksi_detail) {
                $produk = Produk::where('id', $request->produk_id)->first();
                $produk->stok_produk = ($produk->stok_produk - 1);
                $produk->save();
            }
            return redirect('/transaksi')->withInput()->with('status', 'success')->with('message', 'Berhasil tambah transaksi');
        } catch (\Throwable $th) {
            return $th->getMessage();
            return back()->withInput()->with('status', 'error')->with('message', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        $total_jumlah_transaksi = Transaksi::selectRaw("SUM(p.harga_produk * td.qty) as jumlah")
            ->join('transaksi_details as td', 'td.transaksi_id', 'transaksis.id')
            ->join('produks as p', 'p.id', 'td.produk_id')
            ->where('transaksis.id', $transaksi->id)->first()->jumlah;
        return view('admin.transaksi.show', [
            'title' => 'Detail Transaksi',
            'active' => 'datamaster',
            'transaksi' => $transaksi,
            'users' => $transaksi->users,
            'provinsi' => $transaksi->provinsi->nama_provinsi,
            'kabupaten' => $transaksi->kabupaten->nama_kabupaten,
            'transaksi_detail' => $transaksi->transaksi_detail,
            'total_jumlah_transaksi' => $total_jumlah_transaksi,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        return view('admin.transaksi.edit', [
            'title' => 'Form Edit Transaksi',
            'active' => 'datamaster',
            'transaksi' => $transaksi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
    public function tolak($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        if (!empty($transaksi)) {
            if ($transaksi->status_transaksi == 'Pending' || $transaksi->status_transaksi == 'Selesai') {
                $transaksi->status_transaksi = 'Tolak';
                $transaksi->save();
            }
            if ($transaksi) {
                $transaksi_detail = TransaksiDetail::where('transaksi_id', $transaksi->id)->get();
                foreach ($transaksi_detail as $key => $td) {
                    $produk = Produk::where('id', $td->produk->id)->first();
                    $produk->stok_produk = ($produk->stok_produk + $td->qty);
                    $produk->save();
                }
                return redirect('/transaksi')->withInput()->with('status', 'success')->with('message', 'Berhasil menolak transaksi');
            } else {
                return back()->withInput()->with('status', 'error')->with('message', 'gagal menolak transaksi');
            }
        } else {
            return redirect('/transaksi')->withInput()->with('status', 'error')->with('message', 'Gagal menolak transaksi');
        }
    }
    public function proses($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        if (!empty($transaksi)) {
            if ($transaksi->status_transaksi == 'Pending') {
                $transaksi->status_transaksi = 'Proses Admin';
                $transaksi->kode_invoice = date('dmY') . '' . $transaksi->id;
                $transaksi->save();
            }
            if ($transaksi) {
                return redirect('/transaksi')->withInput()->with('status', 'success')->with('message', 'Berhasil menolak transaksi');
            } else {
                return back()->withInput()->with('status', 'error')->with('message', 'Gagal memproses transaksi');
            }
        } else {
            return redirect('/transaksi')->withInput()->with('status', 'error')->with('message', 'Gagal memproses transaksi');
        }
    }
    public function kirim($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        if (!empty($transaksi)) {
            if ($transaksi->status_transaksi == 'Proses Admin') {
                $transaksi->status_transaksi = 'Pengiriman';
                $transaksi->save();
            }
            if ($transaksi) {
                return redirect('/transaksi')->withInput()->with('status', 'success')->with('message', 'Berhasil mengirim barang');
            } else {
                return back()->withInput()->with('status', 'error')->with('message', 'Gagal mengirim barang');
            }
        } else {
            return redirect('/transaksi')->withInput()->with('status', 'error')->with('message', 'Gagal mengirim barang');
        }
    }
    public function selesai($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        dd($transaksi);
        if (!empty($transaksi)) {
            if ($transaksi->status_transaksi == 'Pengiriman') {
                $transaksi->status_transaksi = 'Selesai';
                $transaksi->save();
            }
            if ($transaksi) {
                return redirect('/transaksi')->withInput()->with('status', 'success')->with('message', 'Berhasil menyelesaikan transaksi');
            } else {
                return back()->withInput()->with('status', 'error')->with('message', 'Gagal menyelesaikan transaksi');
            }
        } else {
            return redirect('/transaksi')->withInput()->with('status', 'error')->with('message', 'Gagal menyelesaikan transaksi');
        }
    }
}
