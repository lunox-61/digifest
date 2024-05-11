<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('img/Logo PNG-01.png') }}" type="image/x-icon">

    <title>{{config('app.name', 'BIAFF')}}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->

    <!--bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <!-- Style -->
    <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/CustomStyle.css')}}" rel="stylesheet" />



</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    @include('layouts.inc.nonav')
    <!-- End Navbar -->


    <!-- Slider -->
    @yield('SLIDER')
    <!-- End Slider -->

    <!-- Content -->
    <section id="content">
        <div class="container-fluid p-5">
            @include('layouts.inc.messages')
            @yield('content')
        </div>

    </section>
    <!-- End Content -->

    <!-- Footer -->
    @include('layouts.inc.footer')
    <!-- End Footer -->

    <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
    <script src="{{ asset('assets/js/chart.js')}}"></script>
    <script src="js/scripts.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript">
        $(document).ready(function(){
          $('.carousel').carousel({
            interval: 10000
          })
        });
    </script>
    

</body>

</html>
