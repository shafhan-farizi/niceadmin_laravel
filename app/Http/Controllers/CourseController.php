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
    
    public function create(Request $request) {
        return view('admin.contents.courses.create');
        
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);

        // Simpan ke database
        Course::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description
        ]);

        // Arahkan ke halaman student index
        return redirect()->route('course.index')->with('pesan', 'Berhasil menambahkan data.');
    }

    public function edit($id) {
        $course = Course::find($id);

        return view('admin.contents.courses.edit', [
            'course' => $course
        ]);
    }

    public function update($id, Request $request) {
        $course = Course::find($id);

        $course->update([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
        ]);

        return redirect()->route('course.index')->with('pesan', 'Berhasil mengubah data.');
    }
    
    public function destroy($id) {
        $course = Course::find($id);

        $course->delete();
        
        return redirect()->route('course.index')->with('pesan', 'Berhasil mengubah data.');
    }
}
