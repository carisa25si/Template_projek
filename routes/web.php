<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('/', function () {
    return view('home');
});