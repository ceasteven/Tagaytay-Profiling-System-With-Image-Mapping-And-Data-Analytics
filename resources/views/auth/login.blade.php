<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}"> -->

    <title>Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <script type="text/javascript">
        window.history.forward();

        function noBack() {
            window.history.forward();
        }
    </script>
</head>

<body class="hold-transition login-page"
    style="background-image:url('dist/img/tc.jpg'); background-repeat:no-repeat; background-size:cover;">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('login') }}">
                <div>
                    <img class="img-responsive" src="{{ asset('dist/img/seal.png') }}"
                        style="max-height:130px;margin:0 auto;">
                </div>

            </a>
        </div>
        <div class="card">

            <div class="card-body login-card-body" style="background-color:#ededf1;">
                <div class="login-logo"> <b><strong>Tagaytay</strong></b><br>Profiling System</div>
                <hr>
                <p class="login-box-msg">Log in to start your session</p>
               
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <input name="username" type="username"
                            class="form-control @error('username') is-invalid @enderror" placeholder="Username or Email"
                            required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="input-group mb-3">
                        <input oncopy="return false" onpaste="return false" oncut="return false" name="password"
                            type="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                        @if (session('error'))
                            <div style="color:#f02849;text-align: center;">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>

                    <!-- /.col -->
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary btn-block">Log In</button>
                    </div>
                    @if (Route::has('password.request'))
                        <p class="mb-1 text-center">
                            <a class="btn btn-link" href="{{ route('password.request') }}">Forgot password?</a>
                        </p>
                    @endif
                    <!-- /.col -->
            </div>

            </form>

        </div>

        <!-- /.login-card-body -->
    </div>

    </div>
    <!-- /resources/views/post/create.blade.php -->
    <!-- jQuery -->
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>

</html>
