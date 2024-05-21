<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::all();

        return view('admin.contents.courses.index', [
            'courses' => $courses
        ]);
    }
}
