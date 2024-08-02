<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $company->company_name }}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{ url('public/assets/frontend/img/logo_main.png') }}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ url('public/assets/frontend/css/font-icons.css') }}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ url('public/assets/frontend/css/plugins.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ url('public/assets/frontend/css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ url('public/assets/frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
</head>

<style>
    .ltn__feature-item {
        height: 100%;
        padding: 20px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .alert {
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 20px;
        text-align: center;
        font-size: 18px;
    }

    .alert-success {
        background-color: #333;
        color: white;
    }

    .alert-danger {
        background-color: #f44336;
        color: white;
    }

    .container form {
        width: 19rem;
    }

    h2 {
        font-size: 24px;
    }

    .location-icon {
        font-size: 24px;
        margin-right: 5px;
    }

    .box h3 {
        margin: 0 0 10px 0;
        font-size: 17px;
        color: #333333;
    }

    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 6px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 10px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #333;
        color: white;
        padding: 6px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #000;
    }

    .btnShowMore {
        background-color: #000 !important;
        color: white;
        padding: 6px 18px !important;
        background-color: #333 !important;
        border: transparent;
        border-radius: 4px
    }

    .btnShowMore:hover {
        background-color: #000 !important;
    }

    .list {
        list-style: none;
        padding-left: 0px;
    }

    .list li {
        margin-top: 5px !important;
        line-height: 26px !important;
        border-bottom: 1px solid #e5e5e5;
    }


    .text-left {
        text-align: left !important;
    }

    .text-center {
        text-align: center !important;
    }

    .text-right {
        text-align: right !important;
    }

    .modal-body {
        padding: 15px !important;
    }

    h1 {
        font-size: 22px !important;
        font-family: var(--ltn__body-font) !important;
        line-height: 22px !important;
    }

    h2 {
        font-size: 20px !important;
        font-family: var(--ltn__body-font) !important;
        line-height: 20px !important;
    }

    h3 {
        font-size: 18px !important;
        font-family: var(--ltn__body-font) !important;
        line-height: 18px !important;
    }

    h4 {
        font-size: 16px !important;
        font-family: var(--ltn__body-font) !important;
        line-height: 16px !important;
    }

    h5 {
        font-size: 14px !important;
        font-family: var(--ltn__body-font) !important;
        line-height: 14px !important;
    }

    p {
        color: #2a2a2a;
        margin-bottom: 5px !important;
        font-weight: normal !important;
    }

    .modal-lg {
        max-width: 100% !important;
    }

    .modal-dialog {
        max-width: 100% !important;
        margin-right: auto !important;
        margin-left: auto !important;
        --vz-modal-margin: 1.75rem !important;

    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
        color: var(--ltn__heading-color);
        clear: both;
        font-family: var(--ltn__heading-font);
        font-weight: 700;
        margin-bottom: 5px;
    }

    .ltn__copyright-area {
        padding-top: 8px !important;
        padding-bottom: 1px !important;
    }

    a {
        color: #056899;
    }

    a:hover {
        color: #0d95d9;
    }
</style>

<body>
    <!-- Body main wrapper start -->
    <div class="body-wrapper">
        <!-- HEADER AREA START (header-5) -->
        <header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
            <!-- ltn__header-top-area start -->


            <!-- ltn__header-top-area end -->
            <!-- ltn__header-middle-area start -->
            <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="site-logo-wrap">
                                <div class="site-logo">
                                    <a href="{{ url('/') }}">
                                        @if ($company->logo != '')
                                            <img src="{{ url('public/media/logo/' . $company->logo) }}" alt="">
                                        @else
                                            Expense Tracker Portal
                                        @endif

                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col header-menu-column">
                            <div class="header-menu d-none d-xl-block">
                                <nav>
                                    <div class="ltn__main-menu">
                                        <ul>
                                            @if ($topMenu != null)
                                                @foreach ($topMenu as $item)
                                                    <li class="">
                                                        @if (!empty($item->post_link))
                                                            <a
                                                                href="{{ url($item->post_link) }}">{{ $item->post_name }}</a>
                                                        @else
                                                            <span>{{ $item->post_name }}</span>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            @endif

                                            {{-- <li class="">
                                                <a href="#">SHOP</a>
                                            <li class="">
                                                <a href="#">LYFT'D SYSTEM
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">GAP COACHING</a>
                                            </li>
                                            </li>
                                            <li><a href="#">CONTACT</a></li> --}}
                                            @guest
                                                <li><a href="{{ url('login') }}">LOGIN</a></li>
                                            @endguest

                                            {{-- @auth
                                                <li><a href="{{ url('admin/dashboard') }}">DASHBOARD</a></li>
                                            @endauth --}}
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-middle-area end -->
        </header>
        <!-- HEADER AREA END -->



        <!-- Utilize Mobile Menu Start -->
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <div class="site-logo">
                        <a href="index.html"><img src="img/logo_main.png" alt="Logo"></a>
                    </div>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="ltn__utilize-menu-search-form">
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="ltn__utilize-menu">
                    <ul>
                        <li><a href="{ url('/') }}">Home</a>
                        </li>
                        <li><a href="#">Shop</a>
                        </li>
                        <li><a href="#">LYFT'D SYSTEM
                            </a>
                        </li>
                        <li><a href="#">News</a>
                        </li>
                        <li><a href="#">GAP COACHING</a>
                        </li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="{{ url('login') }}">LOGIN</a></li>
                    </ul>
                </div>

                <div class="ltn__social-media-2">
                    <ul>
                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Utilize Mobile Menu End -->


        @yield('content')


        <!-- FOOTER AREA START -->
        <footer class="ltn__footer-area  ">
            <div class="ltn__header-top-area section-bg-6 top-area-color-white---">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li><a href="#"><i class="icon-mail"></i> mohdraiyan140@gmail.com</a></li>
                                    <li><a href="#"><i class="icon-placeholder"></i> Ghaziabad</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="top-bar-right text-end">
                                <div class="ltn__top-bar-menu">
                                    <ul>
                                        <li class="d-none">
                                            <!-- ltn__language-menu -->

                                        </li>
                                        <li>
                                            <!-- ltn__social-media -->
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li><a href="#" title="Facebook"><i
                                                                class="fab fa-facebook-f"></i></a></li>

                                                    <li><a href="#" title="Instagram"><i
                                                                class="fab fa-instagram"></i></a></li>

                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- header-top-btn -->

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ltn__copyright-area ltn__copyright-2 section-bg-7 plr--5">
                <div class="container-fluid ltn__border-top-2">
                    <div class="row">
                        <div class="col-md-12 col-12 text-center">
                            <div class="ltn__copyright-design">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </footer>
        <!-- FOOTER AREA END -->
    </div>

    <div class="modal fade modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-sm-down" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="row">
                        <div class="col-md-7 text-left">
                            <h2 class="section-subtitle  ltn__secondary-color" id="modalHeading"></h2>
                        </div>
                        <div class="col-md-5 text-right" style="text-align: right">

                            <a href="javascript:void(0);" data-bs-dismiss="modal">
                                <i class="fas fa-close" style="font-size:24px;"></i>
                            </a>

                        </div>
                    </div>
                    <div id="responseBox">


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="{{ url('public/assets/frontend/js/plugins.js') }}"></script>
    <!-- Main JS -->

    <script src="{{ url('public/assets/frontend/js/main.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('public/assets/js/pages/datatables.init.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#searchInput').on('keyup', function() {
                var searchTerms = $(this).val().toLowerCase().split(' ');

                $('#searchTable tbody tr').filter(function() {
                    var rowText = $(this).text().toLowerCase();
                    var matches = searchTerms.every(function(term) {
                        return rowText.indexOf(term) > -1;
                    });
                    $(this).toggle(matches);
                });
            });
        });

        function showNews(id) {
            $("#modalHeading").html("Latest News");
            $("#responseBox").html("");
            $("#staticBackdrop .modal-dialog").css('width', '600px');
            $("#staticBackdrop").modal("show");
            $.ajax({
                url: "{{ URL('news/show') }}",
                type: 'GET',

                data: {
                    "id": id
                },
                success: function(response) {
                    $('#responseBox').html(response);
                },
                error: function(xhr, status, error) {
                    alert(xhr.responseText);
                }
            });

        }

        function showSubject(id) {
            $("#modalHeading").html("Study Subject");
            $("#responseBox").html("");
            $("#staticBackdrop .modal-dialog").css('width', '600px');
            $("#staticBackdrop").modal("show");
            $.ajax({
                url: "{{ URL('subject/show/details') }}",
                type: 'GET',

                data: {
                    "id": id
                },
                success: function(response) {
                    $('#responseBox').html(response);
                },
                error: function(xhr, status, error) {
                    alert(xhr.responseText);
                }
            });
        }

        function showCourse(id) {
            $("#modalHeading").html("Courses");
            $("#responseBox").html("");
            $("#staticBackdrop .modal-dialog").css('width', '600px');
            $("#staticBackdrop").modal("show");
            $.ajax({
                url: "{{ URL('course/show/details') }}",
                type: 'GET',

                data: {
                    "id": id
                },
                success: function(response) {
                    $('#responseBox').html(response);
                },
                error: function(xhr, status, error) {
                    alert(xhr.responseText);
                }
            });
        }
    </script>
</body>

</html>
