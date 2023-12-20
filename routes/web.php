<?php

use App\Http\Controllers\ExpedisiController;
use App\Http\Controllers\KatProdukController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/testing', function () {
    return view('testing');
});

Route::get('/kategori', [KatProdukController::class, 'GetAllKategori']);
Route::post('/addkategori', [KatProdukController::class, 'AddKategori']);
Route::post('/updtkategori', [KatProdukController::class, 'UpdateKategori']);
Route::get('/deletekategori/{id}', [KatProdukController::class, 'DeleteKategori']);


Route::get('/expedisi', [ExpedisiController::class, 'GetAllExpedisi']);
Route::post('/addekspedisi', [ExpedisiController::class, 'AddExpedisi']);
Route::post('/updateekspedisi', [ExpedisiController::class, 'UpdateExpedisi']);
Route::get('/deleteekspedisi/{id}', [ExpedisiController::class, 'DeleteExpedisi']);

Route::get('/payment', [PaymentController::class, 'GetAllPayment']);
Route::post('/addpayment', [PaymentController::class, 'AddPayment']);
Route::post('/updatepayment', [PaymentController::class, 'UpdatePayment']);
Route::get('/deletepayment/{id}', [PaymentController::class, 'DeletePayment']);

Route::get('/produk', [ProdukController::class, 'GetAllProduk']);
Route::post('/addproduk', [ProdukController::class, 'AddProduk']);
Route::post('/updateproduk', [ProdukController::class, 'UpdateProduk']);
Route::get('/deleteproduk/{id}', [ProdukController::class, 'DeleteProduk']);

Route::get('/pesanan', [PesananController::class, 'GetAllPesanan']);
Route::post('/addpesanan', [PesananController::class, 'AddPesanan']);
Route::post('/updatepesanan', [PesananController::class, 'UpdatePesanan']);
Route::get('/deletepesanan/{id}', [PesananController::class, 'DeletePesanan']);

Route::get('/user', [UserController::class, 'GetAllUser']);
Route::post('/adduser', [UserController::class, 'AddUser']);
Route::post('/updateuser', [UserController::class, 'UpdateUser']);
Route::get('/deleteuser/{id}', [UserController::class, 'DeleteUser']);
