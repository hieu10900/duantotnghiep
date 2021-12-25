<!doctype html>
<html lang="en">

<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('form/css/style.css') }}">

</head>

<body class="img js-fullheight" style="background-image: url(form/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">HOMESTAY BA VÌ</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="{{ route('user.forget_password') }}" class="signin-form" method="POST">
                            @csrf
                            @if (Session::has('error'))
                            <div class="alert alert-danger" role="alert" style="border-radius:50px;margin-bottom: 40px;">
                                {{ Session::get('error') }}
                            </div>
                            @else
                            <p>Tìm tài khoản của bạn</p>
                            @endif
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="email">
                                @if ($errors->has('email'))
                                <p style="color:red;font-size: 13px">{{ $errors->first('email') }}</p>
                                @endif
                                @if (session('success'))
                                <p style="color:red;font-size: 13px"> {{ session('success') }}</p>

                                @endif
                            </div>
                            <div class="form-group">

                                <button type="submit" class="form-control btn btn-primary submit px-3">Tìm kiếm</button>
                            </div>
                            <p><a href="{{ route('auth.getLoginForm') }}">Quay lại</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('form/js/jquery.min.js') }}"></script>
    <script src="{{ asset('form/js/popper.js') }}"></script>
    <script src="{{ asset('form/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('form/js/main.js') }}"></script>

</body>

</html>