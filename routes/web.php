<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students', [StudentController::class, 'index'])->name('students');


Route::get('students/create', function () {
    return view('students.create');
});


Route::get('/students/{id}', function ($id) {
    return view('students.show', ['id'=> $id]);
});

