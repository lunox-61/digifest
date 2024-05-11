<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/Logo PNG-01.png') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans" rel="stylesheet">

    <!-- Summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">


    <!-- DataTable css -->
    <link href="https:////cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- My Style -->
    <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet" />
    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button{
            padding: 0px !important;
            margin : 0px !important;
        }
        div.dataTables_wrapper div.dataTables_length select {
            width: 50% !important;
        }
    </style>

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('layouts.inc.admin-nav')

    <div id="layoutSidenav">
        @include('layouts.inc.admin-sidebar')
        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>
            @include('layouts.inc.admin-footer')
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
    <script src="js/scripts.js"></script>

    <!-- Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#your_summernote").summernote({
                height: 350,
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>

    <!-- DataTable JS -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready( function () {
    $('#myDataTable').DataTable();
} );
    </script>
</body>

</html>
