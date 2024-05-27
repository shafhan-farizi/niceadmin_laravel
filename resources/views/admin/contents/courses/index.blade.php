@extends('admin.main')

@section('content')
    

<div class="pagetitle">
    <h1>Student</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Course</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
      <div class="card-body py-4">
        <a href="{{ route('course.create') }}" class="btn btn-primary my-4">+ Course</a>
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Category</th>
              <th>Description</th>
            </tr>
            @foreach ($courses as $course)
              <tr class="my-2">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->category }}</td>
                <td>{{ $course->description }}</td>
                <td>
                  <div class="d-flex">
                    <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('course.destroy', $course->id) }}" method="post">
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