<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
@include('layouts.admin_head')
@php
    if (!isset($active_sub_menu)) {
        $active_sub_menu = '';
    }
@endphp

<body>

    <style>
        .app-menu.navbar-menu {
            background-color: #f4f4f4 !important;
        }

        .app-menu.navbar-menu .navbar-nav .nav-link {
            color: rgb(2, 2, 2) !important;
            border-bottom: 1px solid #ccc;
            padding: 10px 15px;
        }

        .app-menu.navbar-menu .navbar-nav .nav-link i {
            color: rgb(2, 2, 2) !important;
        }

        .app-menu.navbar-menu .navbar-nav .nav-link:hover {
            background-color: #535151;
            color: #56cfe1 !important;
        }

        .app-menu.navbar-menu .navbar-nav .nav-link:hover i {
            color: #56cfe1 !important;
        }

        .app-menu.navbar-menu .navbar-nav .nav-link.active {
            background-color: #444444;
            color: white !important;
        }

        .app-menu.navbar-menu .navbar-nav .nav-link.active i {
            color: white !important;
        }

        .app-menu.navbar-menu .menu-dropdown .nav-link {
            color: rgb(2, 2, 2) !important;
            border-bottom: 1px solid #ccc;
        }

        .app-menu.navbar-menu .menu-dropdown .nav-link:hover {
            background-color: #333333;
            color: white !important;
        }

        .app-menu.navbar-menu .menu-dropdown .nav-link:hover i {
            color: white !important;
        }

        #vertical-hover {
            color: white !important;
        }

        .app-menu.navbar-menu .navbar-nav .nav-item:last-child .nav-link {
            border-bottom: none;
        }
    </style>



    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="{{ url('/') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ url('public/img/logo.png') }}" style="height:85px">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ url('public/img/logo.png') }}" style="height:85px">
                                </span>
                            </a>

                            <a href="{{ url('/') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ url('public/img/logo.png') }}" style="height:85px">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ url('public/img/logo.png') }}" style="height:85px">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <!-- App Search-->

                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="{{ url('public/assets/images/users/avatar-3.jpg') }}" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span
                                            class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Admin</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->

                                <h6 class="dropdown-header">Welcome Admin !</h6>
                                @role('admin')
                                    <a class="dropdown-item" href="{{ route('logout') }}"><i
                                            class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle" data-key="t-logout">Logout</span></a>
                                @endrole
                                {{-- @role('vendor')
                                    <a class="dropdown-item" href="{{ route('vendor-logout') }}"><i
                                            class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle" data-key="t-logout">Logout</span></a>
                                @endrole --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu border-end">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="{{ route('admin-dashboard') }}" class="logo logo-light">
                    <span class="logo-sm" style="color: #080808">

                        Expense Tracker Portal
                    </span>
                    <span class="logo-lg" style="color: #0c0b0b;font-size:19px;">

                        Expense Tracker Portal
                    </span>
                </a>
                <!-- Light Logo-->

                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar" style="border-top:1px solid #e5e5e5;">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        @role('admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/dashboard') }}">
                                    <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboard</span>
                                </a>

                            </li> <!-- end Dashboard Menu -->


                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ route('admin-record') }}" role="button"
                                    aria-expanded="false" aria-controls="sidebarDashboards">
                                    <i class="las la-newspaper"></i> <span data-key="t-dashboards">Record</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ route('admin-budget_limit-create') }}"
                                    role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                    <i class="las la-newspaper"></i> <span data-key="t-dashboards">Budget Limit</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ route('admin-category') }}" role="button"
                                    aria-expanded="false" aria-controls="sidebarDashboards">
                                    <i class="las la-newspaper"></i> <span data-key="t-dashboards">Category</span>
                                </a>
                            </li>
                        @endrole

                        <!-- end Dashboard Menu -->

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            @yield('page')
        </div>
        <div class="modal fade modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-sm-down" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="row">
                            <div class="col-xl-10">
                                <h4 class="mb-3" id="modalHeading">You've made it!</h4>
                            </div>
                            <div class="col-xl-2">
                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium"
                                    data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                            </div>
                        </div>
                        <div class="mt-4" id="responseBox">


                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.admin_footer')
