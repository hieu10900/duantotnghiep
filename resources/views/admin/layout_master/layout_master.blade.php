<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản trị Website</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&admin_assets/disadmin_assets/play=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/fontawesome-free/css/all.min.css') }} ">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
          href="{{ asset('admin_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
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
    <script src="{{ asset('ckeditor/ckeditor.js') }} "></script>
    <script src="{{ asset('ckeditor/ckfinder/ckfinder.js') }} "></script>
</head>
<style>
    [class*=sidebar-dark-] {
    background-color: #544032f2 !important;
}
[class*=sidebar-dark-] .nav-header {
    background-color: inherit;
    color: white !important;
}
.col-md-10 {
    padding-right: 2rem;
    background: beige;
}
</style>
<body class="hold-transition sidebar-mini layout-fixed">
@auth
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('admin_assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                 height="60" width="60">
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
            </ul>

            <!-- Right navbar links -->
         
        </nav>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <div class="row">

            <div class="col-md-2">
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <!-- Brand Logo -->
                    <a href="{{ route('admin') }}" class="brand-link">
                        <img src="{{ asset('frontend_assets/img/logo.jpg') }}"
                             class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light">{{ auth()->user()->full_name }}</span>
                    </a>

                    <!-- Sidebar -->
                    <div class="sidebar">

                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <!-- Add icons to the links using the .nav-icon class
                               with font-awesome or any other icon font library -->
                                @can('View_Admin')
                                    <li class="nav-header">BẢNG ĐIỀU KHIỂN QUẢN TRỊ</li>
                                    <li class="slide"
                                        style="padding-left: 18px; border-bottom: 1px solid #4b545c; padding-bottom: 7px;">
                                        <a class="side-menu__item" href="{{ route('admin.dashboard.index') }}">
                                            <span class="side-menu__icon fa fa-th-large"></span>
                                            <span class="side-menu__label">BẢNG ĐIỀU KHIỂN</span>
                                        </a>
                                    </li>
                                    <li class="nav-header" w>BẢNG QUẢN TRỊ</li>
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
                                        @can('CRUD_Room')
                                            <li class="nav-item">
                                                <a href="{{ route('admin.categories.index')}}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Loại phòng</p>
                                                </a>
                                            </li>
                                            @endcan
                                            @can('CRUD_Room')
                                            <li class="nav-item">
                                                <a href="{{ route('admin.rooms.index')}}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Phòng</p>
                                                </a>
                                            </li>
                                            @endcan
                                            {{--                    <li class="nav-item">--}}
                                            {{--                      <a href="{{ route('admin.user.index')}}" class="nav-link">--}}
                                            {{--                        <i class="far fa-circle nav-icon"></i>--}}
                                            {{--                        <p>Khách hàng</p>--}}
                                            {{--                      </a>--}}
                                            {{--                    </li>--}}
                                            @can('CRUD_Slide')
                                            <li class="nav-item">
                                                <a href="{{ route('admin.sliders.index')}}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Sliders</small></p>
                                                </a>
                                            </li>
                                            @endcan
                                            @can('CRUD_Post')
                                            <li class="nav-item">
                                                <a href="{{ route('admin.post.index')}}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Bài viết</p>
                                                </a>
                                            </li>
                                            @endcan
                                            {{--                    <li class="nav-item">--}}
                                            {{--                      <a href="{{ route('admin.booking.index')}}" class="nav-link">--}}
                                            {{--                        <i class="far fa-circle nav-icon"></i>--}}
                                            {{--                        <p>Booking</p>--}}
                                            {{--                      </a>--}}
                                            {{--                    </li>--}}
                                            @can('CRUD_Discount')
                                            <li class="nav-item">
                                                <a href="{{ route('admin.discount.index')}}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>
                                                        Mã khuyến Mại
                                                    </p>
                                                </a>
                                            </li>
                                            @endcan
                                            @can('CRUD_Service')
                                            <li class="nav-item">
                                                <a href="{{ route('admin.service.index')}}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>
                                                        Dịch Vụ
                                                    </p>
                                                </a>
                                            </li>
                                            @endcan
                                            @can('CRUD_Comment')
                                            <li class="nav-item">
                                                <a href="{{ route('admin.comments.index')}}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Bình luận</p>
                                                </a>
                                            </li>
                                            @endcan
                                            <li class="nav-item">
                                                <a href="{{ route('admin.supports.index')}}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Hỗ trợ</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    @can('CRUD_User')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.user.index')}}" class="nav-link">
                                            <i class="fas fa-user nav-icon"></i>
                                            <p>
                                                Khách hàng
                                            </p>
                                        </a>
                                    </li>
                                    @endcan
                                    @can('CRUD_Booking')
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fas fa-chart-pie"></i>
                                            <p>
                                                Đặt Phòng
                                                <i class="fas fa-angle-left right"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('admin.booking.index',['status'=> "chua_duyet"])}}"
                                                   class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p> Chưa được duyệt</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin.booking.index',['status'=> "da_duyet"])}}"
                                                   class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Đã duyệt</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin.booking.index',['status'=> "hoan_thanh"])}}"
                                                   class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Đã hoàn thành</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin.booking.index',['status'=> "huy"])}}"
                                                   class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Đã hủy</p>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    @endcan

                                @endcan

                                <li class="nav-header">BẢNG ĐIỀU KHIỂN THÀNH VIÊN</li>
                                <li class="nav-item">
                                    <a href="{{ route('user.booking') }}" class="nav-link">
                                        <i class="nav-icon far fa-calendar-alt"></i>
                                        <p>
                                            Booking
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
                                <!-- <li class="nav-item">
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
                                </li> -->
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
<script
    src="{{ asset('admin_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }} "></script>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
@stack('js')
@yield('js')
</body>
</html>
