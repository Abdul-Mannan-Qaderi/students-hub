<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students', function () {
    $students = [
        ['name'=>'fahad', 'id'=>1, 'rank'=>90],
        ['name'=>'taha', 'id'=>2, 'rank'=>30],
    ];
    return view('students.index', ['students' => $students]);
});


Route::get('students/create', function () {
    return view('students.create');
});


Route::get('/students/{id}', function ($id) {
    return view('students.show', ['id'=> $id]);
});

