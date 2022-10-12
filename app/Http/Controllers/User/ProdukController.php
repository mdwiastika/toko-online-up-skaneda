<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function main(Request $request)
    {
        $produk = Produk::with('kategori')->where('slug_produk', $request->slug)->first();
        return view('user.produk.main', [
            'title' => 'Detail Produk',
            'produk' => $produk,
        ]);
    }
}
