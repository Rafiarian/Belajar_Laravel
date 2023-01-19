<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\EasControllers;
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
    return view('welcome');
});

Route::controller(BlogController::class)->group(function(){
    Route::get('/blog','home');
    Route::get('/tentang','tentang');
    Route::get('/kontak','kontak');
    //route CRUD
});
//Route.get(*Saya*,link) ;

Route::controller(PegawaiDBController::class)->group(function(){
    Route::get('/pegawai','index');
    Route::get('/pegawai/tambah','tambah');
    Route::post('/pegawai/store','store');
    Route::get('/pegawai/edit/{id}','edit');
    Route::get('/pegawai/hapus/{id}','hapus');
    Route::get('/pegawai/update','update');
    Route::get('/pegawai/cari','cari');
    Route::get('/pegawai/view/{id}','view');


});
//Route.get(*Saya*,link) ;

Route::controller(PegawaiDBController::class)->group(function(){
    Route::get('/pegawai','index');
    Route::get('/pegawai/tambah','tambah');
    Route::post('/pegawai/store','store');
    Route::get('/pegawai/edit/{id}','edit');
    Route::get('/pegawai/hapus/{id}','hapus');
    Route::get('/pegawai/update','update');
    Route::get('/pegawai/cari','cari');
    Route::get('/pegawai/view/{id}','view');


});
Route::controller(EasControllers::class)->group(function(){
    Route::get('/hasilstudi','indexeas');
    Route::get('/hasilstudi/tambaheas','tambaheas');
    Route::post('/hasilstudi/store','store');
    Route::get('/pegawai/edit/{id}','edit');
    Route::get('/pegawai/hapus/{id}','hapus');
    Route::get('/pegawai/update','update');
    Route::get('/pegawai/cari','cari');
    Route::get('/pegawai/view/{id}','view');


});


