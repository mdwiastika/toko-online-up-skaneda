<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\LaporanPenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\ProdukController as UserProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserDashboardController::class, 'main']);
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'is_admin'], function () {
        Route::resource('/datamaster/users', UserController::class);
        Route::resource('/datamaster/kategori-produk', KategoriProdukController::class);
        Route::resource('/datamaster/produk', ProdukController::class);
        Route::resource('/transaksi', TransaksiController::class);
        Route::get('/transaksi/tolak/{id}', [TransaksiController::class, 'tolak']);
        Route::get('/transaksi/selesai/{id}', [TransaksiController::class, 'selesai']);
        Route::get('/transaksi/kirim/{id}', [TransaksiController::class, 'kirim']);
        Route::get('/transaksi/proses/{id}', [TransaksiController::class, 'proses']);
        Route::get('/laporan/laporan-penjualan', [LaporanPenjualanController::class, 'index']);
        Route::get('/laporan/laporan-penjualan/print', [LaporanPenjualanController::class, 'print'])->name('printLaporan');
    });
    Route::get('/dashboard', [DashboardController::class, 'main']);
    Route::post('/add-to-cart', [UserDashboardController::class, 'addToCart']);
    Route::post('/checkout-proses', [CheckoutController::class, 'proses'])->name('prosesCheckout');
    Route::post('/remove-to-cart', [UserDashboardController::class, 'removeToCart']);
    Route::get('/checkout', [CheckoutController::class, 'main']);
    Route::get('/produk/{slug}', [UserProdukController::class, 'main']);
    Route::get('/history', [CheckoutController::class, 'history']);
    Route::post('/history-complete', [CheckoutController::class, 'complete']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('/get-kabupaten/{id}', [UserController::class, 'getKabupaten']);
Route::get('/user/dashboard', [UserDashboardController::class, 'main']);
Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store']);
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('/login');
    Route::post('/login', [AuthController::class, 'loginPost']);
});
