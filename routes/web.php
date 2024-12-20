<?php

use App\Http\Controllers\BookControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book',  [BookControler::class, 'index']) -> name('book');