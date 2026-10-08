<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PraktikumController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/polinema', function () {
    return view('polinema');
});

Route::get('/lat', function () {
    return view('latihan');
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