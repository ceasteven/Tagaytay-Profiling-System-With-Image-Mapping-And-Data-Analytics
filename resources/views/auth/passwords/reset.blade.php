<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>

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
    style="background-image:url('/dist/img/tc.jpg'); background-repeat:no-repeat; background-size:cover;">
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
                <p class="login-box-msg">Reset Password</p>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div>
                           

                            <div class="input-group mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                          

                            <div class="input-group mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="New Password" name="password" required autocomplete="new-password">
                                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            

                            <div class="input-group mb-3">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm New Password" required autocomplete="new-password">
                                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
                              </div>
                        </div>

                        <div>
                        <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                    </div>
                        </div>
                    </form>
                    </div>

<!-- /.login-card-body -->
</div>

</div>
<!-- /resources/views/post/create.blade.php -->
<!-- jQuery -->
<script src="{{asset('jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>

</html>
