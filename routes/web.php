<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
// use App\Http\Controllers\StudentController; // Uncomment if you use this later

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homework', function (){
    return view("test");
});

// Teacher Routes
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');
Route::get('/teachers/{id}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
Route::put('/teachers/{id}', [TeacherController::class, 'update'])->name('teachers.update');
Route::delete('/teachers/{id}', [TeacherController::class, 'destroy'])->name('teachers.destroy');

