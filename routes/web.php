<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentsController::class);
Route::get('/students/find', [StudentsController::class, 'find'])->name('students.find');
Route::get('/students/{student}', [StudentsController::class, 'show'])->name('students.show');
