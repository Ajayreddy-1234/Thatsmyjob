<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Freelancer<span>UI</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Candidate</li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/freelancer/candidate/') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">All candidates</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/freelancer/candidate/add') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Add candidate</span>
        </a>
      </li>
      <li class="nav-item nav-category">Application</li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/freelancer/application/new') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">New Jobs</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/freelancer/application/') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Old Jobs</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/freelancer/application/selected') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Selected Application</span>
        </a>
      </li>
      <li class="nav-item nav-category">Tickets</li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/freelancer/ticket') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">All tickets</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/freelancer/ticket/settled') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Settled Tickets</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
<nav class="settings-sidebar">
  <div class="sidebar-body">
    <a href="#" class="settings-sidebar-toggler">
      <i data-feather="settings"></i>
    </a>
    <h6 class="text-muted">Sidebar:</h6>
    <div class="form-group border-bottom">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
          Light
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
          Dark
        </label>
      </div>
    </div>
    <div class="theme-wrapper">
      <h6 class="text-muted mb-2">Light Version:</h6>
      <a class="theme-item active" href="https://www.nobleui.com/laravel/template/light/">
        <img src="{{ url('assets/images/screenshots/light.jpg') }}" alt="light version">
      </a>
      <h6 class="text-muted mb-2">Dark Version:</h6>
      <a class="theme-item" href="https://www.nobleui.com/laravel/template/dark">
        <img src="{{ url('assets/images/screenshots/dark.jpg') }}" alt="light version">
      </a>
    </div>
  </div>
</nav>
