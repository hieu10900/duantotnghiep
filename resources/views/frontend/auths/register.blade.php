<!doctype html>
<html lang="en">

<head>
    <title>Sign Up 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('form/css/style.css') }}">

</head>

<body class="img" style="background-image: url(form/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section"> An Vui Sign Up</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap">
                        <h3 class="text-center mb-4">Create Your Account</h3>
                        <form action="{{ route('register.form') }}" method="POST" class="signup-form">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="label" for="name">Full Name</label>
                                <input type="text" class="form-control" name="full_name" placeholder="John Doe">
                                <span class="icon fa fa-user-o"></span>
                                @error('full_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="email">Email Address</label>
                                <input type="email" class="form-control" name="email" placeholder="johndoe@gmail.com">
                                <span class="icon fa fa-paper-plane-o"></span>
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Password</label>
                                <input id="password" type="password" name="password" class="form-control" placeholder="Password">
                                <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <span class="icon fa fa-lock"></span>
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Password</label>
                                <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="Password">
                                <span toggle="#password-confirm" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <span class="icon fa fa-lock"></span>
                                @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
                            </div>
                        </form>
                        <p>I'm already a member! <a data-toggle="tab" href="{{ route('auth.getLoginForm') }}">Sign In</a></p>
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