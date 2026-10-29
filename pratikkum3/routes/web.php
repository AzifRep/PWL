<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PraktikumController;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/polinema', function () {
    return view('polinema');
});

Route::get('/lat', function () {
    return view('latihan');
});

Route::get('name', function () {
    return view('nama', ['sebuah_nama' => 'Azif']);
});

// Route::get('/buku', function () {
//     return view('buku');
// });

// Route::get('/kategori', function () {
//     return view('kategori');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/laporan', function () {
//     return view('laporan');
// });

Route::get('buku', [PraktikumController::class, 'buku']);
Route::get('home', [PraktikumController::class, 'home']);
Route::get('kategori', [PraktikumController::class, 'kategori']);
Route::get('laporan', [PraktikumController::class, 'laporan']);

Route::controller(BukuController::class)->group(function(){
    //menampilkan data keseluruhan
    Route::get('tampil-buku', 'index');
    //menambah data baru
    Route::get('tambah-buku', 'create')->name('buku.add');
    //menampilkan data keseluruhan setelah menyimpan data baru
    Route::post('tampil-buku', 'store')->name('buku.save');
    //menampilkan form edit
    Route::get('/buku/edit/{id}', 'edit')->name('buku.edit');
    //mengupdate data setelah di edit
    Route::put('/buku/edit/{id}', 'update')->name('buku.update');
    //menghapus data
    Route::post('/buku/delete/{id}', 'destroy')->name('buku.delete');
});