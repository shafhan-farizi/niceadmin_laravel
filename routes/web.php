<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

//route route
Route::get('/', function () {
    return view('welcome');
});


//**
//methode HTTP:
// 1.Get di ggunakan unutk menampilkan data atau halamn 
//2. Post digunakan untuk mengirim data 
//Put digunkan untuk meng update data 
//4 Delete di gunakan untk menghapus data 


// dashboard
Route::get('admin/dashboard',[DashboardController::class,'index']);

// student
Route::get('admin/student', [StudentController::class, 'index'])->name('student.index');
Route::get('admin/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('admin/student/create', [StudentController::class, 'store'])->name('student.store');
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('admin/student/edit/{id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy'])->name('student.destroy');

// course
Route::get('admin/course', [CourseController::class, 'index'])->name('course.index');
Route::get('admin/course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('admin/course/create', [CourseController::class, 'store'])->name('course.store');
Route::get('admin/course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
Route::put('admin/course/edit/{id}', [CourseController::class, 'update'])->name('course.update');
Route::delete('admin/course/delete/{id}', [CourseController::class, 'destroy'])->name('course.destroy');