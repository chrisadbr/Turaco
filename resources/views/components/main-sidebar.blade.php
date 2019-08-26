<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/turaco-white-bg-180-180.png')}}" alt="TURACO SERP Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/turaco-160-160.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="/" class="nav-link active">
              <i class="fas fa-home"></i>
              <p style = "font-weight:bold"> Home</p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="/users" class="nav-link active">
              <i class="far fa-arrow-alt-circle-right"></i>
              <p style = "font-weight: bold"> Manage Users</p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="/roles" class="nav-link active">
              <i class="far fa-arrow-alt-circle-right"></i>
              <p style = "font-weight: bold"> Manage Roles</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  