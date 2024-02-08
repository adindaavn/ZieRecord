<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | ZieRecord</title>

  <link rel="stylesheet" href="{{ asset('assets') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
  <!-- .login-box -->
  <div class="login-box">
    <!--.login-logo -->
    <div class="login-logo w-100 d-flex justify-content-center mb-4">
      <img src="{{ asset('assets')}}/dist/img/zie/smkn1cianjur.png" alt="" style="max-height: 100px;">
    </div>
    <!-- /.login-logo -->
      <form action=""{{ route('cek-login')}} method="post">
        <!-- input-group -->
        @csrf
        <div class="mb-3">
            <label for="email" class="w-100 text-center">Email</label>
            @error('email')
              <small style="color: red">{{ $message }}</small>
              @enderror
            <input type="email" class="form-control @error('email') is-invalid @endError" name="email" placeholder="email">
          </div>

          <div class="mb-3">
            <label for="password" class="w-100 text-center">Password</label>
            @error('password')
            <small style="color: red">{{ $message }}</small>
            @enderror
            <input type="password" class="form-control @error('password') is-invalid @endError" name="password" placeholder="password">
          </div>
        <!-- /input-group -->

        <div class="row mt-5">
          <div class="col-6">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                  Remember Me
              </label>
            </div>
          </div>
          <div class="col-6">
            <p class="m-0 text-right">
              <a href="forgot-password.html">Forgot Password?</a>
            </p>
          </div> 
        </div>

        <div class="login my-2">
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div> 

        <p class="mb-0 mt-2 text-center">
          <a href="{{ route('register') }}">Register account</a>
        </p>
      </form>
  </div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('assets') }}plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets') }}dist/js/adminlte.min.js"></script>
<script src="{{ asset('assets') }}/plugins/sweetalert2/sweetalert2.min.js"></script>

@if ($message = Session::get('success'))
    <script>
        Swal.fire({
            title: "Success!",
            text: '{{ $message }}',
            icon: "success"
        });
    </script>
@endif

@if ($message = Session::get('failed'))
    <script>
        Swal.fire({
            icon: "error",
            title: "Oops something wrong!",
            text: '{{ $message }}'
        });
    </script>
@endif
</body>
</html>
