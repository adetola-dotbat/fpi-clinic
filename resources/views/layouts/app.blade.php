<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="icon" href="{{ asset('clinic-admin/assets/images/favicon-32x32.png') }}" type="image/png" /> --}}
    <!-- Bootstrap CSS -->
    <link href="{{ asset('clinic-admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('clinic-admin/assets/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('clinic-admin/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('clinic-admin/assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{ asset('clinic-admin/assets/css/pace.min.css') }}" rel="stylesheet" />

    <title>FPI-CLINIC</title>
</head>

<body>


    {{-- @include('layouts.navigation') --}}

    @yield('content')

    <!--plugins-->
    <script src="{{ asset('clinic-admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('clinic-admin/assets/js/pace.min.js') }}"></script>


</body>

</html>
