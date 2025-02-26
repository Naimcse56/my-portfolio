<!doctype html>
<html lang="en" class="dark-theme">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('images/favicon-32x32.png')}}" type="image/png" />
  <!--plugins-->
  <link href="{{asset('plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  <link href="{{asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap-extended.css')}}" rel="stylesheet" />
  <link href="{{asset('css/style.css')}}" rel="stylesheet" />
  <link href="{{asset('css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
<link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet">

  <!-- loader-->
	<link href="{{asset('css/pace.min.css')}}" rel="stylesheet" />


  <!--Theme Styles-->
  <link href="{{asset('css/dark-theme.css')}}" rel="stylesheet" />
  <link href="{{asset('css/header-colors.css')}}" rel="stylesheet" />

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Portolio') }}</title>
</head>

<body>
    @include('backend.partials.header')
    @include('backend.partials.sidebar')
    @yield('content')
    <!-- Bootstrap bundle JS -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}"></script>
    <script src="{{asset('plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
    <!--app-->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/index4.js')}}"></script>
  
  </body>
  
  </html>