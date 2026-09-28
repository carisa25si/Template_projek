<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Controller.php;

Route::get('/', function () {
    return view('welcome');
});

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('/', function () {
    return view('home');
});


<h5 class="card-title">Form Pertanyaan</h5>
<form action="{{ route('question.store') }}" method="POST">
	@csrf
