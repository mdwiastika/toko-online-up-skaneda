<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\KategoriProduk;
use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function main()
    {
        $produk = Produk::all();
        $kategori = KategoriProduk::all();
        return view('user.dashboard.main', [
            'title' => 'Dashboard Produk',
            'produks' => $produk,
            'kategoris' => $kategori,
        ]);
    }
    public function addToCart(Request $request)
    {
        if (Auth::check()) {
            $check_keranjang = Keranjang::where('produk_id', $request->id)
                ->where('user_id', auth()->user()->id)
                ->first();
            if ($check_keranjang) {
                $check_keranjang->qty = $check_keranjang->qty + 1;
            } else {
                $check_keranjang = new Keranjang();
                $check_keranjang->produk_id = $request->id;
                $check_keranjang->qty = 1;
                $check_keranjang->user_id = auth()->user()->id;
            }
            $check_keranjang->save();
            if ($check_keranjang) {
                return back()->withInput()->with('status', 'success')->with('message', 'Berhasil menambahkan ke keranjang');
            } else {
                return back()->withInput()->with('status', 'error')->with('message', 'Gagal menambahkan ke keranjang');
            }
        } else {
            return redirect('/login')->withInput()->with('status', 'error')->with('message', 'Harap login terlebih dahulu');
        }
    }
    public function removeToCart(Request $request)
    {
        if (Auth::check()) {
            $check_keranjang = Keranjang::where('produk_id', $request->id)
                ->where('user_id', auth()->user()->id)
                ->first();
            $check_keranjang->delete();
            if ($check_keranjang) {
                return back()->withInput()->with('status', 'success')->with('message', 'Berhasil menghapus produk');
            } else {
                return back()->withInput()->with('status', 'error')->with('message', 'Gagal menghapus produk');
            }
        } else {
            return redirect('/login')->withInput()->with('status', 'error')->with('message', 'Harap login terlebih dahulu');
        }
    }
}
