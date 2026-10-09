
<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/question', function () {
    return view('home');
});

Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');