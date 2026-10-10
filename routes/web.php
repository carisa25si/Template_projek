
<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/question', function () {
    return view('home');
});

Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');

// route admin
Route::get('/admin',[AdminController::class,'index']);

//route guest
Route::get('/guest',[GuestController::class,'index']);