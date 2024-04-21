
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href= {{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  @yield('css_calls')

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href= {{ asset('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}>
  <!-- Theme style -->
  <link rel="stylesheet" href= {{ asset('assets/admin/dist/css/adminlte.min.css') }}>
  <link rel="stylesheet" href= {{ asset('assets/admin/css/bootstrap_rtl-v4.2.1/bootstrap.min.css') }}>
  <link rel="stylesheet" href= {{ asset('assets/admin/css/bootstrap_rtl-v4.2.1/custom_rtl.css') }}>

  <link rel="stylesheet" href= {{ asset('assets/admin/css/mycustomstyle.css') }}>


  <!-- Google Font: Source Sans Pro -->
  <link href={{ asset('assets/admin/fonts/SansPro/SansPro.min.css') }}  rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
    {{-- content  --}}

  <!-- Navbar -->
  @include('admin.includes.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @include('admin.includes.content')

  <!-- /.content-wrapper -->

  @include('admin.includes.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src= {{ asset('assets/admin/plugins/jquery/jquery.min.js') }}></script>
<!-- Bootstrap 4 -->
<script src= {{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
<!-- overlayScrollbars -->
<script src= {{ asset('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>
<!-- AdminLTE App -->
<script src= {{ asset('assets/admin/dist/js/adminlte.min.js') }}></script>
<!-- AdminLTE for demo purposes -->
<script src={{ asset('assets/admin/dist/js/demo.js') }}></script>
<!-- scripts -->
@yield('scripts')
</body>
</html>
