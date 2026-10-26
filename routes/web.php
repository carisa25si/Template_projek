<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/question', function () {
    return view('home');
});

Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');

// route admin
Route::get('/admin',[AdminController::class,'index'])->name('dashboard');

// route resource admin (CRUD): URL /admin/pelanggan, /admin/produk, /admin/diskon, /admin/user
// nama route tetap: pelanggan.index, produk.create, diskon.edit, dst.
Route::prefix('admin')->group(function () {
    Route::resource('pelanggan', PelangganController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('diskon', DiskonController::class);
    Route::resource('user', UserController::class);
});

//route guest
Route::get('/guest',[GuestController::class,'index'])->name('guest');

Route::prefix('guest')->group(function () {
    Route::resource('login', LoginController::class);
});


