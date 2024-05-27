@extends('admin.main')

@section('content')
    

<div class="pagetitle">
    <h1>+ Course</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('course.index') }}">Courses</a></li>
        <li class="breadcrumb-item active">+ Course</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
      <div class="card-body py-4">
        <form action="{{ route('course.update', $course->id) }}" method="post" class="mt-3">
          @csrf
          @method('put')
            <div class="mb-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" value="{{ $course->name }}" class="form-control">
            </div>

            <div class="mb-2">
                <label for="category" class="form-label">Category</label>
                <input type="text" name="category" id="category" value="{{ $course->category }}" class="form-control">
            </div>

            <div class="mb-2">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $course->description }}</textarea>
            </div>

            <div class="mb-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </section>

  @endsection