<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-layout-mode="light" data-body-image="img-1" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Expense Tracker Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="{{ url('public/assets/images/favicon.ico') }}"> --}}
    <link rel="icon" href="{{ url('public/assets/images/logo_main.avif') }}" type="image/x-icon">


    <!-- jsvectormap css -->
    <link href="{{ url('public/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ url('public/assets/libs/swiper/swiper-bundle.min.css') }} rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ url('public/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ url('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ url('public/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <script src="{{ url('public/assets/js/jquery.min.js') }}"></script>
    <link href="{{ url('public/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ url('public/tiny7/tinymce.min.js') }}" referrerpolicy="origin"></script>


    @yield('css_bottom')
    @yield('js_top')
</head>
