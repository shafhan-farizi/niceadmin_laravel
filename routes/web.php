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
Route::get('admin/student', [StudentController::class, 'index']);
Route::get('admin/student/create', [StudentController::class, 'create']);
Route::post('admin/student/create', [StudentController::class, 'store']);
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('admin/student/edit/{id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy'])->name('student.destroy');

// course
Route::get('admin/course', [CourseController::class, 'index']);