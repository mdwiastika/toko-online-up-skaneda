<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class LaporanPenjualanController extends Controller
{
    //
    public function index(Request $request)
    {
        if (isset($request->tanggal_awal) && isset($request->tanggal_akhir) && !empty($request->tanggal_awal) && !empty($request->tanggal_akhir)) {
            $laporan_penjualan = Transaksi::with([
                'users',
                'provinsi',
                'kabupaten',
                'transaksi_detail' => function ($td) {
                    $td->with(['produk']);
                }
            ])->whereBetween('tanggal_transaksi', [$request->tanggal_awal, $request->tanggal_akhir])->get();
        } else {
            $laporan_penjualan = Transaksi::with([
                'users',
                'provinsi',
                'kabupaten',
                'transaksi_detail' => function ($td) {
                    $td->with(['produk']);
                }
            ])->orderBy('created_at', 'DESC')->get();
        }
        return view('admin.laporan.laporan_penjualan.main', [
            'title' => 'Laporan',
            'active' => 'Laporan Penjualan',
            'laporan_penjualan' => $laporan_penjualan,
        ]);
    }
    public function print(Request $request)
    {
        if (isset($request->tanggal_awal) && isset($request->tanggal_akhir) && !empty($request->tanggal_awal) && !empty($request->tanggal_akhir)) {
            $laporan_penjualan = Transaksi::with([
                'users',
                'provinsi',
                'kabupaten',
                'transaksi_detail' => function ($td) {
                    $td->with(['produk']);
                }
            ])->whereBetween('tanggal_transaksi', [$request->tanggal_awal, $request->tanggal_akhir])->get();
        } else {
            $laporan_penjualan = Transaksi::with([
                'users',
                'provinsi',
                'kabupaten',
                'transaksi_detail' => function ($td) {
                    $td->with(['produk']);
                }
            ])->orderBy('created_at', 'DESC')->get();
        }
        return view('admin.laporan.laporan_penjualan.print', [
            'title' => 'Laporan',
            'active' => 'Laporan Penjualan',
            'laporan_penjualan' => $laporan_penjualan,
        ]);
    }
}
