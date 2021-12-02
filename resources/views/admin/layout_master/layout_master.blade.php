<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&admin_assets/disadmin_assets/play=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/fontawesome-free/css/all.min.css') }} ">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }} ">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/jqvmap/jqvmap.min.css') }} ">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/adminlte.min.css') }} ">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }} ">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/daterangepicker/daterangepicker.css') }} ">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/summernote/summernote-bs4.min.css') }} ">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
@auth
  <div class="wrapper">
    
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ asset('admin_assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ route('home') }}" class="nav-link">Trang chủ</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Liên hệ</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset('admin_assets/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset('admin_assets/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset('admin_assets/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
   
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <div class="row">
     
      <div class="col-md-2">
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="{{ route('admin') }}" class="brand-link">
            <img src="{{ asset('frontend_assets/img/logo.jpg') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">{{ auth()->user()->full_name }}</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @can('View_Admin')
                <li class="nav-header">BẢNG ĐIỀU KHIỂN QUẢN TRỊ</li>
                <li class="slide" style="padding-left: 18px; border-bottom: 1px solid #4b545c; padding-bottom: 7px;">
                  <a class="side-menu__item" href="{{ route('admin.dashboard.index') }}">
                    <span class="side-menu__icon fa fa-th-large"></span>
                    <span class="side-menu__label">BẢNG ĐIỀU KHIỂN</span>
                  </a>
                </li>
                <li class="nav-header"w>BẢNG QUẢN TRỊ</li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      Website
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right">6</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">

                    <li class="nav-item">
                      <a href="{{ route('admin.categories.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Loại phòng</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('admin.rooms.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Phòng</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('admin.user.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Khách hàng</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('admin.sliders.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sliders</small></p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Post</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('admin.booking.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Booking</p>
                      </a>
                    </li>
                    <li class="nav-item">
                  <a href="{{ route('admin.discount.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                     Mã khuyến Mại
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.service.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                    Dịch Vụ
                    </p>
                  </a>
                </li>
                    <li class="nav-item">
                      <a href="{{ route('admin.comments.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Bình luận</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Hỗ trợ</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.user.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                      Khách hàng
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>
                      Booking
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/UI/general.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>General</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/UI/icons.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Icons</p>
                      </a>
                    </li>
                  </ul>
                </li>
               
               @endcan
              
                <li class="nav-header">BẢNG ĐIỀU KHIỂN THÀNH VIÊN</li>
                <li class="nav-item">
                  <a href="pages/calendar.html" class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                      Booking
                      <span class="badge badge-info right">2</span>
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('user.roomtype.index') }}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                      Tất cả loại phòng
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('user.support.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>
                      Yêu cầu hỗ trợ
                    </p>
                  </a>
                </li>
                
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                    Hồ sơ cá nhân
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('user.profile.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Thông tin tài khoản</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('user.password') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Đổi mật khẩu</p>
                      </a>
                    </li>

                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-search"></i>
                    <p>
                      Search
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/search/simple.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Simple Search</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/search/enhanced.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Enhanced</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="{{ route('auth.logout') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Đăng Xuất</p>
                  </a>
                </li>


              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>
      </div>
     
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-12" style="padding-left: 35px; padding-top: 15px;">
            <aside>
              @yield('contents')
            </aside>
          </div>
        </div>
      </div>
    </div>

    <!-- Content Wrapper. Contains page content -->

    <footer class="main-footer mt-3">
      <strong>Copyright &copy; 2014-2021 <a href="{{ route('admin') }}">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>
  </div>
  @endauth

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('admin_assets/plugins/jquery/jquery.min.js') }} "></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('admin_assets/plugins/jquery-ui/jquery-ui.min.js') }} "></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
  <!-- ChartJS -->
  <script src="{{ asset('admin_assets/plugins/chart.js/Chart.min.js') }} "></script>
  <!-- Sparkline -->
  <script src="{{ asset('admin_assets/plugins/sparklines/sparkline.js') }} "></script>
  <!-- JQVMap -->
  <script src="{{ asset('admin_assets/plugins/jqvmap/jquery.vmap.min.js') }} "></script>
  <script src="{{ asset('admin_assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}} "></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ asset('admin_assets/plugins/jquery-knob/jquery.knob.min.js') }} "></script>
  <!-- daterangepicker -->
  <script src="{{ asset('admin_assets/plugins/moment/moment.min.js') }} "></script>
  <script src="{{ asset('admin_assets/plugins/daterangepicker/daterangepicker.js') }} "></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('admin_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }} "></script>
  <!-- Summernote -->
  <script src="{{ asset('admin_assets/plugins/summernote/summernote-bs4.min.js') }} "></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('admin_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }} "></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('admin_assets/dist/js/adminlte.js') }} "></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('admin_assets/dist/js/demo.js') }} "></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset('admin_assets/dist/js/pages/dashboard.js') }} "></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
@stack('js')
@yield('js')
</body>
</html>
