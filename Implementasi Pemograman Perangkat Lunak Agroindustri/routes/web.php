<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_embako;
use App\Http\Controllers\C_Mitra;
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

Route::get('/dokumentasi', [C_embako::class, 'dokumentasi']);

// Landing Page
Route::get('/', [C_embako::class, 'landing'])->name('landing');


// Customer
Route::get('/login', [C_embako::class, 'login']);
Route::post('/login', [C_embako::class, 'authenticate']);
Route::get('/registrasi', [C_embako::class, 'registrasi']);
Route::post('/registrasi', [C_embako::class, 'store']);
Route::get('/dashboard_customer/{idCustomer}', [C_embako::class, 'dashboard_Customer']);
Route::get('/pesanan/{pesanan:id}', [C_embako::class, 'pesanan']);
Route::get('/detailProduk/{product:title}', [C_embako::class, 'detailProduk']);

Route::get('/storePemesanan/{product:id}', [C_embako::class, 'storeCheckout']);
Route::get('/deletePemesanan/{pemesanan:id}', [C_embako::class, 'deleteCheckout']);
Route::get('/profileCustomer', [C_embako::class, 'profileCustomer']);
Route::post('/profileCustomer/edit', [C_embako::class, 'editCustomer']);
Route::get('/buktiPembayaran', [C_embako::class, 'buktiPembayaran']);
Route::post('/buktiPembayaran/update', [C_embako::class, 'storePembayaran']);

Route::get('/detailMitra/{user:id}', [C_embako::class, 'detailMitra']);
Route::get('/detailUlasan/{ulasan:id}', [C_embako::class, 'detailUlasan']);
Route::get('/tambahUlasan/{ulasan:id}', [C_embako::class, 'tambahUlasan']);
Route::post('/storeUlasan/{ulasan:id}', [C_embako::class, 'storeUlasan']);


// Mitra
Route::get('/registrasiMitra', [C_Mitra::class, 'registrasiMitra'])->middleware('guest');
Route::post('/registrasiMitra', [C_Mitra::class, 'store']);

Route::get('/loginMitra', [C_Mitra::class, 'loginMitra'])->middleware('guest');
Route::post('/loginMitra', [C_Mitra::class, 'authenticate']);

Route::post('/logout', [C_Mitra::class, 'logout']);

Route::get('/dashboardMitra', [C_Mitra::class, 'dashboardMitra'])->middleware('auth');


Route::get('/produk', [C_Mitra::class, 'produk']);

Route::get('/produk/tambahProduk', [C_Mitra::class, 'formTambahProduk']);
Route::post('/produk/tambahProduk', [C_Mitra::class, 'storeTambahProduk']);

Route::post('/produk/{product:id}', [C_Mitra::class, 'deleteProduk']);

Route::get('/produk/editProduk/{product:id}', [C_Mitra::class, 'editProduk']);
Route::post('/produk/editProduk/{product:id}', [C_Mitra::class, 'updateProduk']);


Route::get('/profileMitra', [C_Mitra::class, 'profileMitra']);
Route::post('/profileMitra/edit', [C_Mitra::class, 'editProfile']);


Route::get('/penjualan', [C_Mitra::class, 'penjualan']);


Route::get('/pencatatan', [C_Mitra::class, 'pencatatan']);

Route::get('/transaksi/{product:id}', [C_Mitra::class, 'transaksi']);
Route::post('/transaksi/{product:id}', [C_Mitra::class, 'editTransaksi']);


Route::get('/buktiTransaksi/{customer:id}', [C_Mitra::class, 'buktiTransaksi']);

Route::get('/ulasan/{product:id}', [C_Mitra::class, 'ulasanMitra']);
Route::post('/ulasan/{ulasan:id}', [C_Mitra::class, 'deleteUlasan']);
Route::get('/pengeluaran', [C_Mitra::class, 'pengeluaran']);
Route::get('/pengeluaran/tambahPengeluaran', [C_Mitra::class, 'tambahPengeluaran']);
Route::post('/pengeluaran/tambahPengeluaran', [C_Mitra::class, 'storeTambahPengeluaran']);
Route::post('/pengeluaran/{pengeluaran:id}', [C_Mitra::class, 'deletePengeluaran']);
Route::get('/pengeluaran/editPengeluaran/{pengeluaran:id}', [C_Mitra::class, 'editPengeluaran']);
Route::post('/pengeluaran/editPengeluaran/{pengeluaran:id}', [C_Mitra::class, 'updatePengeluaran']);
