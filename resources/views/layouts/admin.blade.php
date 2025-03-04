<!doctype html>
<html lang="en" class="dark-theme">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title> @yield('title', 'Dashboard') | {{ config('app.name', 'Portolio') }}</title>

  <link rel="icon" href="{{asset('images/favicon-32x32.png')}}" type="image/png" />
  <!--plugins-->
  <link href="{{asset('plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  <link href="{{asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
  <link href="{{asset('/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap-extended.css')}}" rel="stylesheet" />
  <link href="{{asset('vendor/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/style.css')}}" rel="stylesheet" />
  <link href="{{asset('css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
  <link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet">

  <!-- loader-->
	<link href="{{asset('css/pace.min.css')}}" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="{{asset('css/dark-theme.css')}}" rel="stylesheet" />
  <link href="{{asset('css/header-colors.css')}}" rel="stylesheet" />
  <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet" type="text/css" />
  {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> --}}
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
  @stack('styles')
</head>

<body>
  <div class="wrapper">
    @include('backend.partials.header')
    @include('backend.partials.sidebar')
    <main class="page-content">
      @yield('content')
    </main>
  </div>
    <!-- Bootstrap bundle JS -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}"></script>
    <script src="{{asset('plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
    <script src="{{asset('/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('/js/form-select2.js')}}"></script>
    <script src="{{asset('/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('/js/table-datatable.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script> --}}
    <!--app-->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script src="{{asset('vendor/sweetalert2/sweetalert2.min.js')}}"></script>
    @stack('scripts')
    @include('backend.partials.session_message')
    <script>
      var csrfToken = $('meta[name="csrf-token"]').attr('content');
      const deleteData = function(title, route, id) {
      Swal.fire({
        title: "Are you sure?",
        text: "You want to delete "+title,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Delete it!"
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            type: 'POST',
            url: route,
            data: {
              _token: csrfToken,
              id: id,
            },
            success: function(response) {
              Swal.fire({
                title: "Success",
                text: title+" Deleted",
                icon: "success"
              }).then((result) => {
                // Check if the user clicked "OK"
                if (result.isConfirmed) {
                  // Reload the page
                  location.reload();
                }
              });
            },
            error: function(error) {
              console.error(error);
            }
          });
        }
      });
    };
    </script>
  </body>
  
  </html>