@php
  $currentRoute = Route::current()->uri;
@endphp

<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link @if ($currentRoute!= 'admin/dashboard') collapsed @endif" href="/admin/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link @if ($currentRoute!= 'admin/student') collapsed @endif" href="/admin/student">
          <i class="bi bi-person-circle"></i><span>Student</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if ($currentRoute!= 'admin/course') collapsed @endif" href="/admin/course">
          <i class="bi bi-journal-text"></i><span>Course</span>
        </a>
      </li>
    

   
  </aside><!-- End Sidebar-->