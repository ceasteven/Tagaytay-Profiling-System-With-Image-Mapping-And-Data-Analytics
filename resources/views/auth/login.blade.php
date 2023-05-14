<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}"> -->

    <title>Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
 <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <script src="{{asset('plugins/alpine/alpine.min.js')}}"></script>
    <script type="text/javascript">
        window.history.forward();

        function noBack() {
            window.history.forward();
        }
    </script>
      <!-- <script src="{{asset('plugins/alpine/alpine.min.js')}}"></script> -->
</head>

<body class="hold-transition login-page" style="background-image:url('{{ asset('dist/img/tc.jpg') }}');;background-repeat:no-repeat; background-size:cover;">

    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('login') }}">
                <div>
                    <img class="img-responsive" src="{{ asset('dist/img/seal.png') }}" style="max-height:160px;margin:0 auto;" alt="seal">
                </div>

            </a>
        </div>
        <div class="card">

            <div class="card-body login-card-body" style="background-color:#ededf1;">
                <div class="login-logo"> <b><strong>Tagaytay</strong></b><br>Profiling System</div>
                <hr>
                <p class="login-box-msg">Log in to start your session</p>
<div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)">
                                    @if (session('status'))
                                    <div class="alert alert-success" >
                                    <button type="button" class="close" data-dismiss="alert">
            <!-- <i class="fa fa-times"></i> -->
        </button>
                                        <!-- <i class="fas fa-check faa-pulse animated"></i> -->
                                        {{ session('status') }}
                                    </div>
                                    @elseif (session('message'))
                <div class="alert alert-danger alert-dismissible small" role="alert">
                <button type="button" class="close" data-dismiss="alert">
            <!-- <i class="fa fa-times"></i> -->
        </button>
                    <!-- <i class="fas  fa-xmark fa-lg"></i> -->
                    {{ session('message') }}
                </div>
                @elseif (session('error'))
                <div class="alert alert-danger alert-dismissible small" role="alert">
                <button type="button" class="close" data-dismiss="alert">
            <!-- <i class="fa fa-times"></i> -->
        </button>
                    <!-- <i class="fas  fa-xmark fa-lg"></i> -->
                    {{ session('error') }}
                </div>
                                    @endif
                                </div>
                <form method="POST" action="{{ route('login.post') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <input name="username" type="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username or Email" required autofocus>
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
                        <input oncopy="return false" onpaste="return false" oncut="return false" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                        
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
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>

</html>