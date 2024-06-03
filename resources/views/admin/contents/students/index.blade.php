@extends('admin.main')

@section('content')
    

<div class="pagetitle">
    <h1>Student</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Student</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
      <div class="card-body py-4">
        <a href="{{ route('student.create') }}" class="btn btn-primary my-4">+ Student</a>
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>NIM</th>
              <th>Major</th>
              <th>Class</th>
              <th>Course</th>
              <th>Action</th>
            </tr>
            @foreach ($students as $student)
              <tr class="my-2">
                @php
                  $created_at = $student->course->created_at ?? 0
                @endphp
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->nim }}</td>
                <td>{{ $student->major }}</td>
                <td>{{ $student->class }}</td>
                <td>{!! $student->course->name ?? '<span class="badge bg-danger">Belum Mengikuti Course</span>' !!}</td>
                <td>
                <div class="d-flex">
                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning me-2">Edit</a>
                    <form action="{{ route('student.destroy', $student->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                </td>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </section>

  @endsection