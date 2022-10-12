<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_produk = KategoriProduk::all();
        return view('admin.datamaster.kategori.main', [
            'title' => 'Table Kategori Produk',
            'active' => 'datamaster',
            'kategori_produks' => $kategori_produk,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.datamaster.kategori.add', [
            'title' => 'Table Kategori Produk',
            'active' => 'datamaster',
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
                'nama_kategori_produk' => 'required|unique:kategori_produks',
            ]);
            $validatedData['slug_kategori_produk'] = Str::slug($request->nama_kategori_produk);
            KategoriProduk::create($validatedData);
            return redirect('/datamaster/kategori-produk')->withInput()->with('status', 'success')->with('message', 'Berhasil tambah kategori');
        } catch (\Throwable $th) {
            return redirect('/datamaster/kategori-produk')->withInput()->with('status', 'success')->with('message', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriProduk  $kategoriProduk
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriProduk $kategoriProduk)
    {
        return view('admin.datamaster.kategori.show', [
            'title' => 'Detail Kategori Produk',
            'active' => 'datamaster',
            'kategori' => $kategoriProduk,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriProduk  $kategoriProduk
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriProduk $kategoriProduk)
    {
        return view('admin.datamaster.kategori.edit', [
            'title' => 'Detail Kategori Produk',
            'active' => 'datamaster',
            'kategori' => $kategoriProduk,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriProduk  $kategoriProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriProduk $kategoriProduk)
    {
        try {
            $validatedData = $request->validate([
                'nama_kategori_produk' => 'required|unique:kategori_produks',
            ]);
            if ($request->nama_kategori_produk == $kategoriProduk->nama_kategori_produk) {
                return redirect('/datamaster/kategori-produk')->withInput()->with('status', 'success')->with('message', 'Anda tidak melakukan update apapun');
            }
            $validatedData['slug_kategori_produk'] = Str::slug($request->nama_kategori_produk);
            $kategoriProduk->update($validatedData);
            return redirect('/datamaster/kategori-produk')->withInput()->with('status', 'success')->with('message', 'Berhasil update kategori');
        } catch (\Throwable $th) {
            return back()->withInput()->with('status', 'error')->with('message', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriProduk  $kategoriProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriProduk $kategoriProduk)
    {
        $kategoriProduk->delete();
        return redirect('/datamaster/kategori-produk')->withInput()->with('status', 'success')->with('message', 'Berhasil delete kategori');
    }
}
