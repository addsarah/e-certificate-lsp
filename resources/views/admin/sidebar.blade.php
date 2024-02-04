<aside class="main-sidebar sidebar-light-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ url("index3.html") }}" class="brand-link">
    <img src="{{ asset("/admin/dist/img/logo.png") }}" alt="AdminLTE Logo" class="brand-image ">
    <span class="brand-text font-weight-light">E-Sertif</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset("/admin/dist/img/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
    @if (Auth::check())
        <span class="hidden-xs">{{ Auth::user()->name }}</span>
    @endif
    <br>
    @if (Auth::check())
        <span class="hidden-xs">{{ Auth::user()->email }}</span>
    @endif
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ route('peserta.index') }}" class="nav-link">
            <i class="fas fa-user-graduate nav-icon"></i>
            <p>
              Peserta
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('sertifikat.index') }}" class="nav-link">
            <i class="fas fa-award nav-icon"></i>
            <p>
              Sertifikat
            </p>
          </a>
        </li>
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}" class="nav-link">
              @csrf
              <button type="submit" class="btn btn-link">
                  <i class="fa fa-power-off"></i>
                  {{ __('Log Out') }}
              </button>
          </form>
      </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>