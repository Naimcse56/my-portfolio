<!doctype html>
<html lang="en" class="dark-theme">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title> @yield('title', 'Home') | {{ $user->name }}</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Naimul Islam, Experienced Laravel developer specializing in custom web applications. Expert in building Accounting Management Systems (Cash & Accrual), Multivendor E-commerce, HR & Payroll, Inventory, ERP, and SaaS solutions. Hire me for top-quality services like bug fixing, app installation, and building tailored applications to meet your business needs." />
  <meta name="keywords" content="Laravel developer, Accounting Management System, Cash and Accrual Accounting, Multivendor Ecommerce, HR and Payroll, Inventory Management, ERP solutions, SaaS applications, web development, bug fixing, application installation, custom application development, Laravel expert, hire Laravel developer, business web solutions, software development, Laravel portfolio." />
  <meta name="developer" content="Md. Naimul Islam">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- FAV AND ICONS   -->
  <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.ico')}}">
  <link rel="shortcut icon" href="{{asset('frontend/assets/images/apple-icon.png')}}">
  <link rel="shortcut icon" sizes="72x72" href="{{asset('frontend/assets/images/apple-icon-72x72.png')}}">
  <link rel="shortcut icon" sizes="114x114" href="{{asset('frontend/assets/images/apple-icon-114x114.png')}}">
  
  <!-- Google Font-->
  <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('frontend/assets/icons/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('frontend/assets/plugins/css/bootstrap.min.css')}}">
  <!-- Animate CSS-->
  <link rel="stylesheet" href="{{asset('frontend/assets/plugins/css/animate.css')}}">
  <!-- Owl Carousel CSS-->
  <link rel="stylesheet" href="{{asset('frontend/assets/plugins/css/owl.css')}}">
  <!-- Fancybox-->
  <link rel="stylesheet" href="{{asset('frontend/assets/plugins/css/jquery.fancybox.min.css')}}">
  <!-- Custom CSS-->
  <link rel="stylesheet" href="{{asset('frontend/assets/css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
  
  <link rel="alternate stylesheet" href="{{asset('frontend/assets/css/colors/yellow.css')}}" title="yellow">
  <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet" type="text/css" />
  @stack('styles')
</head>

<body class="dark-vertion black-bg">
    @include('partials.header')
    <main class="page-content">
      @yield('content')
    </main>
    
    <!-- jQuery -->
    <script src="{{asset('frontend/assets/plugins/js/jquery.min.js')}}"></script>
    <!-- popper -->
    <script src="{{asset('frontend/assets/plugins/js/popper.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('frontend/assets/plugins/js/bootstrap.min.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{asset('frontend/assets/plugins/js/owl.carousel.js')}}"></script>
    <!-- validator -->
    <script src="{{asset('frontend/assets/plugins/js/validator.min.js')}}"></script>
    <!-- wow -->
    <script src="{{asset('frontend/assets/plugins/js/wow.min.js')}}"></script>
    <!-- mixin js-->
    <script src="{{asset('frontend/assets/plugins/js/jquery.mixitup.min.js')}}"></script>
    <!-- circle progress-->
    <script src="{{asset('frontend/assets/plugins/js/circle-progress.js')}}"></script>
    <!-- jquery nav -->
    <script src="{{asset('frontend/assets/plugins/js/jquery.nav.js')}}"></script>
    <!-- Fancybox js-->
    <script src="{{asset('frontend/assets/plugins/js/jquery.fancybox.min.js')}}"></script>
    <!-- isotope js-->
    <script src="{{asset('frontend/assets/plugins/js/isotope.pkgd.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/js/packery-mode.pkgd.js')}}"></script>
    <script src="{{asset('frontend/assets/js/custom-scripts.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    @stack('scripts')
    @include('backend.partials.session_message')
  
  </body>
  
  </html>