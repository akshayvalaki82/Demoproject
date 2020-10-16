<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="{{ asset('admin/css/all.min.css')}}"> 
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->


  <link rel="stylesheet" href="{{ asset('admin/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('admin/css/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
  <!-- <link rel="stylesheet" href="{{asset('admin/css/jqvmap.min.css')}}"> -->
   <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('/admin/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin/css/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('admin/css/summernote-bs4.min.css')}}">
  <!-- jqueryfile -->
  <script src="{{ asset('admin/js/jquery.min.js')}}"></script> 
  <!-- for select multipal css file -->
  <link rel="stylesheet" href="{{asset('admin/css/select2.min.css')}}">
  <!-- for select multipal js file -->
  <script src="{{asset('admin/js/select2.min.js')}}"></script>

</head>
   
<body class="hold-transition sidebar-mini layout-fixed"> 
@include("layout/header")

@include("layout/sidebar")

<div class="content-wrapper">

@yield('mainc')
</div>


@include("layout/footer")
      
</body>

</html>