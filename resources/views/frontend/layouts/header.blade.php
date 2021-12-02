<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                        <img src="{{ asset('frontend_assets/img/logo.jpg') }}" alt="Logo" width="200px">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 d-none d-lg-block">
                    <div class="row">
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Opening Hour</h3>
                                    <p>Mon - Fri, 8:00 - 9:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Call Us</h3>
                                    <p>+012 345 6789</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Email Us</h3>
                                    <p>info@example.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->
    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between " id="navbarCollapse">
                    <div class="navbar-nav mr-auto nav-edit">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Trang chủ</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">Giới thiệu</a>
                        <a href="{{ route('single') }}" class="nav-item nav-link">Tin tức</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Homestay</a>
                            <div class="dropdown-menu">
                                @foreach ($category as $items)
                                <a href="{{ route('room_type', [ 'id' => $items->id ]) }}" class="dropdown-item">{{ $items->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Liên hệ</a>
                    </div>

                    @if(!Auth::check())
                    <a href="{{ route('auth.getLoginForm') }}" class="nav-item nav-link"> Đăng nhập <i class="fas fa-sign-in-alt"></i></a>       
                    @else
                    <a style="text-transform: uppercase;color: #212121; text-decoration: none;" href="{{ route('admin') }}"> &nbsp;{{ Auth::user()->full_name }}</a>&nbsp;&nbsp;&nbsp;
                    @endif
                </div>
            </nav>

        </div>
    </div>
    <!-- Nav Bar End -->


</body>

</html>