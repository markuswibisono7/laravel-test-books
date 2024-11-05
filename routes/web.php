<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;

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


Route::get('/', [ProdukController::class, 'tampilbuku'])->name('tampilbuku');
Route::get('/tambahbuku', [ProdukController::class, 'tambahbuku'])->name('tambahbuku');
Route::get('/getindexbuku', [ProdukController::class, 'getindexbuku'])->name('getindexbuku');
Route::get('/formeditbuku/{id}', [ProdukController::class, 'formeditbuku'])->name('formeditbuku');
Route::post('/simpanbuku', [ProdukController::class, 'simpanbuku'])->name('simpanbuku');
Route::post('/ubahbuku', [ProdukController::class, 'ubahbuku'])->name('ubahbuku');
Route::get('/deletebuku/{id}', [ProdukController::class, 'deletebuku'])->name('deletebuku');