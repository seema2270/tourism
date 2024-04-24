<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Tourism</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('dashboard/assets/img/brand/favicon.png')}}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/argon.css?v=1.1.0')}}" type="text/css">
</head>

<body class="bg-default">

    <!-- Main content -->
    <div class="main-content">

        <!-- Page content -->
        <div class="container mt--8 pb-5">
          @yield('content')
        </div>
    </div>

    <!-- Core -->
    <script src="{{asset('dashboard/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/js-cookie/js.cookie.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
    <!-- Argon JS -->
    <script src="{{asset('dashboard/assets/js/argon.js?v=1.1.0')}}"></script>
    <!-- Demo JS - remove this in your project -->
    <script src="{{asset('dashboard/assets/js/demo.min.js')}}"></script>
</body>

</html>