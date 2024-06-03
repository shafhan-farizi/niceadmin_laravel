@extends('admin.main')

@section('content')
    

<div class="pagetitle">
    <h1>+ Student</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">+ Student</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
      <div class="card-body py-4">
        <form action="{{ route('student.update', $student->id) }}" method="post" class="mt-3">
          @csrf
          @method('put')
            <div class="mb-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" value="{{ $student->name }}" class="form-control">
            </div>

            <div class="mb-2">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" name="nim" id="nim" value="{{ $student->nim }}" class="form-control">
            </div>

            <div class="mb-2">
                <label for="major" class="form-label">Major</label>
                <select name="major" id="major" class="form-select">
                    <option value="">Pilih Jurusan</option>
                    <option value="Teknik Informatika" {{ $student->major == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                    <option value="Sistem Informasi" {{ $student->major == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                    <option value="Bisnis Digital" {{ $student->major == 'Bisnis Digital' ? 'selected' : '' }}>Bisnis Digital</option>
                </select>
            </div>

            <div class="mb-2">
                <label for="class" class="form-label">Class</label>
                <select name="class" id="class" class="form-select">
                    <option disabled selected>Pilih Kelas</option>
                    <optgroup label="Teknik Informatika">
                      @for ($i = 0; $i < 9; $i++)
                      <option value="TI-0{{ $i + 1 }}" {{ $student->class == 'TI-0'.$i+1 ? 'selected' : '' }}>TI-0{{ $i + 1 }}</option>
                      @endfor
                    </optgroup>
                    <optgroup label="Sistem Informatika">
                      @for ($i = 0; $i < 10; $i++)
                      <option value="SI-{{ $i + 1 != 10 ? 0 : '' }}{{ $i + 1 }}" {{ $student->class == 'SI-'.($i+1 != 10 ? 0 : '').$i+1 ? 'selected' : '' }}>SI-{{ $i + 1 != 10 ? 0 : '' }}{{ $i + 1 }}</option>
                      @endfor 
                    </optgroup>
                    <optgroup label="Basis Data">
                      <option value="BD-01" {{ $student->class == 'BD-01' ? 'selected' : '' }}>BD-01</option>
                    </optgroup>
                </select>
            </div>

            <div class="mb-2">
                <label for="course_id" class="form-label">Course</label>
                <select name="course_id" id="course_id" class="form-select">
                    <option disabled selected>Pilih Kursus</option>
                    @foreach ($courses as $course)
                    <option value="{{ $course->id }}" {{ $student->course_id == $course->id ? 'selected' : '' }}>{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </section>

  @endsection