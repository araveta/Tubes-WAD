<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-warning elevation-4">
    <!-- Brand Logo -->
    <a href="/grapher/front" class="brand-link">
      <img src="https://previews.123rf.com/images/twindesigner/twindesigner1704/twindesigner170402822/76694309-rg-r-g-black-letter-logo-design-with-purple-magenta-swoosh-and-stars-.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rent Grapher</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL ('image/'.Auth::user()->foto)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if($class=='home'){echo "menu-open";} ?>">
            <a href="{{route('grapher.home')}}" class="nav-link <?php if($subclass=='home'){echo "active";} ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class = "nav-item">
          <a href="{{route('grapher.job')}}" class="nav-link <?php if($subclass=='job'){echo "active";} ?>">
              <i class="nav-icon fas fa-camera-retro"></i>
              <p>
                Job Orders
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/grapher/grapherprofile" class="nav-link <?php if($subclass=='grapher'){echo "active";} ?>">
              <i class="nav-icon far fa-user-circle"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('grapher.gallery')}}" class="nav-link">
            <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>

          <li class="nav-header">Rent Grapher v.1.0</li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>