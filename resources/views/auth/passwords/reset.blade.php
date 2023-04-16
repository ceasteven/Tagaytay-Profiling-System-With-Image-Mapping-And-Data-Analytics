


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>

    <!-- Google Font: Source Sans Pro -->
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
</head>

<body class="hold-transition login-page" style="background-image:url('{{ asset('dist/img/tc.jpg') }}'); background-repeat:no-repeat; background-size:cover;">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('login') }}">
                <div>
                    <img class="img-responsive" src="{{ asset('dist/img/seal.png') }}" style="max-height:130px;margin:0 auto;">
                </div>

            </a>
        </div>
        <div class="card">
            <div class="card-body login-card-body" style="background-color:#ededf1;">

                <div class="login-logo"> <b><strong>Tagaytay</strong></b><br>Profiling System</div>
                <hr>
                <p class="login-box-msg">Reset Password</p>
                @if (session('status'))
                <div class="alert alert-success alert-dismissible small" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="fa fa-times"></i>
                    </button>
                    <i class="fas fa-check faa-pulse animated"></i>

                    {{ session('status') }}
                </div>
                @elseif (session('error'))
                <div class="alert alert-danger alert-dismissible small" role="alert">
                    </button>

                    <i class="fas fa-exclamation-triangle faa-pulse animated"></i>
                    {{ session('error') }}
                </div>

                @elseif ($errors->any())
                <div class="alert alert-danger alert-dismissible small" role="alert">
                    </button>
                    </i> @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </strong>
                </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div>


                            <div class="input-group mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>
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
                                <input  oncopy="return false" onpaste="return false" oncut="return false" id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="New Password" name="password" required autocomplete="new-password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div>


                            <div class="input-group mb-3">
                                <input  oncopy="return false" onpaste="return false" oncut="return false" id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm New Password" required autocomplete="new-password">
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
        <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->

        <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>

</html>