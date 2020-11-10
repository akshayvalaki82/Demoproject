
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
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
        <li class="nav-item menu-open">
          
          <li >  
            <a href="{{ url('admin/user') }}" class="nav-link {{ request()->is('admin/user/*') || request()->is('admin/user') ? 'active' : ''}}">
              <p>
                User 
              </p>
            </a>
          </li>

          <li >
          <a href="{{ url('admin/configuration') }}" class="nav-link {{ request()->is('admin/configuration/*') || request()->is('admin/configuration') ? 'active' : ''}} ">
              <p>
                Configuration 
              </p>
            </a>
          </li>
          </li>
           
          <li>
          <a href="{{ url('admin/banner') }}" class="nav-link {{ request()->is('admin/banner/*') || request()->is('admin/banner') ? 'active' : ''}} ">
              <p>
              Banner Management 
              </p>
            </a>
          </li>

          <li>
          <a href="{{ url('admin/category') }}" class="nav-link {{ request()->is('admin/category/*') || request()->is('admin/category') ? 'active' : ''}} ">
              <p>
              Category Management 
              </p>
            </a>
          </li>

          <li>
          <a href="{{ url('admin/product-attributes') }}" class="nav-link {{ request()->is('admin/product-attributes/*') || request()->is('admin/product-attributes') ? 'active' : ''}} ">
              <p>
              Product Attributes 
              </p>
            </a>
          </li>

          <li>
          <a href="{{ url('admin/product') }}" class="nav-link {{ request()->is('admin/product/*') || request()->is('admin/product') ? 'active' : ''}} ">
              <p>
              Product 
              </p>
            </a>
          </li>

          <li>
          <a href="{{ url('admin/coupon') }}" class="nav-link {{ request()->is('admin/coupon/*') || request()->is('admin/coupon') ? 'active' : ''}} ">
              <p>
              coupon 
              </p>
            </a>
          </li>
          </li>

          <li>
          <button> <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></button></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
          </li>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
