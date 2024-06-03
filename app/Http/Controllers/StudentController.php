<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        // Mendapatkan data student dari database
        $students = Student::all();

        // Panggil view dan kirim data ke view
        return view('admin.contents.students.index', [
            'students' => $students
        ]);
    }

    public function create() {
        $courses = Course::all();
        return view('admin.contents.students.create', [
            'courses' => $courses
        ]);
    }

    public function store(Request $request) {
        // Validasi data yang diterima
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
            'course_id' => 'nullable|numeric'
        ]);

        // Simpan ke database
        Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
            'course_id' => $request->course_id
        ]);

        // Arahkan ke halaman student index
        return redirect('/admin/student')->with('pesan', 'Berhasil menambahkan data.');
    }

    public function edit($id) {
        // cari student berdasarkan id
        $student = Student::find($id); // Select * FROM students WHERE id = $id;

        // kirim student ke view edit
        return view('admin.contents.students.edit', [
            'student' => $student
        ]);
    }

    public function update($id, Request $request) {
        $student = Student::find($id);

        $student->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class
        ]);

        return redirect('/admin/student')->with('pesan', 'Berhasil mengubah data.');
    }
    
    public function destroy($id) {
        $student = Student::find($id);

        $student->delete();
        
        return redirect('/admin/student')->with('pesan', 'Berhasil mengubah data.');
    }
}
