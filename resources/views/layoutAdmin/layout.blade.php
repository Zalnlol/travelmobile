<!DOCTYPE html>
<html lang="en">
<head>
    <!-- -->
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta name="viewport" content="width=1024">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="icon" type="image/png" sizes="114x114" href="{{ asset('images/fav-icon.png') }}">
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layoutAdmin.nav-bar')
        <!-- Main sidebar container -->
        @include('layoutAdmin.main-sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('layoutAdmin.footer')
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control Sidebar content goes here-->
        </aside>
        <!-- /Control Sidebar -->
    </div>
    <!-- /wrapper -->
    
  
     <!-- jQuery -->
     <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
     <!-- Bootstrap 4 -->
     <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
     <!-- AdminLTE App -->
     <script src="{{asset('js/adminlte.min.js')}}"></script>
     <!-- AdminLTE for demo purposes -->
     <script src="{{asset('js/demo.js')}}"></script>
  
    <!-- page script -->
    @yield('script-section')
    <style>
        .help.is-danger{
            color: red;
        }
    </style>
</body>
</html>