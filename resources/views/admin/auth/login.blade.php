<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> talabat | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href= "{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}"">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('assets/admin/fonts/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href= {{ asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>
  <!-- Theme style -->
  <link rel="stylesheet" href= {{ asset('assets/admin/dist/css/adminlte.min.css')}}>
  <link rel="stylesheet" href= {{ asset('assets/admin/css/bootstrap_rtl-v4.2.1/bootstrap.min.css') }}>

  <link rel="stylesheet" href= {{ asset('assets/admin/css/bootstrap_rtl-v4.2.1/custom_rtl.css') }}>


  <!-- Google Font: Source Sans Pro -->
  <link href={{ asset('assets/admin/fonts/SansPro/SansPro.min.css') }}  rel="stylesheet">
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href=""><b> منصة</b>  طلبات</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">سجل الدخول إلي موقعنا   </p>

      <form action="{{ route('admins.login') }}" method="post" >
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Email">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

        </div>
        @error('email')
                <span class=" text-danger">{{ $message }}</span>
            @enderror

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        <div class="row">

          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat"> تسجيل الدخول</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> تسجيل الدخول باستخدام الفيس بوك
        </a>

      </div>
    <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="#">هل نسيت كلمة المرور ؟   </a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">تسجيل عضو جديد </a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src={{ asset('assets/admin/plugins/jquery/jquery.min.js') }}></script>
<!-- Bootstrap 4 -->
<script src={{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>

</body>
</html>
