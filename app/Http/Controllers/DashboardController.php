<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //methode untuk menampilkaan dashboard
    public function index(){
        return view('admin.contents.dashboard.index');
    }
}
