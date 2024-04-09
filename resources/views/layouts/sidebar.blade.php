<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-envelope"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Portfolio</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('home') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('user.index') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>User</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('abouts.index') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>About</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('skills.index') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Skill</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('education.index') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Education</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('experience.index') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Experience</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('seminars.index') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Seminars</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('blogs.index') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Blogs</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('contacts.index') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Contacts</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>