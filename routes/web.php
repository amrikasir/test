<?php

use App\Http\Controllers\Index;
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

Route::get('/', [Index::class, 'listPermintaan'])->name('home');

Route::get('/permintaan/baru', [Index::class, 'permintaanBaru'])->name('new.request');
Route::post('/permintaan/baru', [Index::class, 'prossesPermintaan'])->name('post.permintaan');

Route::get('/list/barang', [Index::class, 'apiBarang'])->name('api.barang');

Route::get('/fetch/barang/{id?}', [Index::class, 'fetchBarang'])->name('fetch.barang');

Route::get('/fetch/peminta', [Index::class, 'fetchPeminta'])->name('fetch.peminta');
