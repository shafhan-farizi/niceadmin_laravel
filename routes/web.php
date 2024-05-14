<?php

use App\Http\Controllers\DashboardController;
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

