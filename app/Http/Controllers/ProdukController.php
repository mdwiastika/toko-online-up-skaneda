<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('admin.datamaster.produk.main', [
            'title' => 'Table Produk',
            'active' => 'datamaster',
            'produks' => $produk,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = KategoriProduk::all();
        return view('admin.datamaster.produk.add', [
            'title' => 'Form Produk',
            'active' => 'datamaster',
            'kategoris' => $kategoris,
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
        // return dd($request->all());
        try {
            $validatedData = $request->validate([
                'nama_produk' => 'required',
                'kategori_produk_id' => 'required',
                'stok_produk' => 'required',
                'berat_produk' => 'required',
                'harga_produk' => 'required',
                'deskripsi_produk' => 'required',
            ]);
            if ($request->file('foto_produk')) {
                $validatedData['foto_produk'] = $request->file('foto_produk')->store('foto-produk');
            }
            $validatedData['slug_produk'] = Str::slug($request->nama_produk);
            Produk::create($validatedData);
            return redirect('/datamaster/produk')->withInput()->with('status', 'success')->with('message', 'Sukses tambah produk');
        } catch (\Throwable $th) {
            return redirect('/datamaster/produk')->withInput()->with('status', 'success')->with('message', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        $kategoris = KategoriProduk::all();
        return view('admin.datamaster.produk.show', [
            'title' => 'Detail Produk',
            'active' => 'datamaster',
            'produk' => $produk,
            'kategoris' => $kategoris,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        $kategoris = KategoriProduk::all();
        return view('admin.datamaster.produk.edit', [
            'title' => 'Edit Produk',
            'active' => 'datamaster',
            'produk' => $produk,
            'kategoris' => $kategoris,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'kategori_produk_id' => 'required',
            'stok_produk' => 'required',
            'berat_produk' => 'required',
            'harga_produk' => 'required',
            'deskripsi_produk' => 'required',
        ]);
        $validatedData['slug_produk'] = Str::slug($request->nama_produk);
        if ($request->file('foto_produk')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['foto_produk'] = $request->file('foto_produk')->store('foto-produk');
        }
        $produk->update($validatedData);
        return redirect('/datamaster/produk')->withInput()->with('status', 'success')->with('message', 'Sukses update produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        Storage::delete($produk->foto_produk);
        $produk->delete();
        return redirect('/datamaster/produk')->withInput()->with('status', 'success')->with('message', 'Sukses hapus produk');
    }
}
