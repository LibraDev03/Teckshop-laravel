<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin teckshop-laravel</title>

  <!-- Google Font: Source Sans Pro CSS -->
  @include('layouts.admin.css')
  <!-- End Google Font: Source Sans Pro CSS -->

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <!-- Preloader ( tải giao diện ) -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('adminDB/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('layouts.admin.navbar')
  <!-- End navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.admin.sidebar')
  <!-- End main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('main')
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  @include('layouts.admin.footer')
  <!-- End footer -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<!-- jQuery -->
@include('layouts.admin.js')
<!-- end jQuery -->
</body>
</html>
