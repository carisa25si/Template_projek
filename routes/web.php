
<?php

use App\Http\Controllers\QuestionController;
use app\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/question', function () {
    return view('home');
});

Route::post('/question/store', [QuestionController::class, 'store'])
    ->name('question.store');

Route: :get('dashboard', [DashboardController::class, 'index'])->name ('dashboard');