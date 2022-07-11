<ul class="nav nav-pills flex-column mt-3 gap-3">
  <li class="nav-item my-2 px-3">
    <span class="text-muted small">
      Patients Portal
    </span>
  </li>

  <li class="nav-item">
    <a class="nav-link @if(Route::currentRouteName() == 'dashboard')
    active
    @endif" href="/overview/">
      <i class="fa fa-dashboard"></i> Dashboard
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if(Route::currentRouteName() == 'profile')
    active
    @endif" href="/user/profile">
      <i class="fa fa-user"></i> Profile
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link sys-config-link" href="/user/services">
      <i class="fa fa-list"></i> Services
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link text-danger sys-report-link" href="/system/report/">
      <i class="fa fa-bug"></i> Report Issue
    </a>
  </li>
</ul>