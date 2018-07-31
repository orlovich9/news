<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>INews Admin</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('public/images/icons/favicon/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('public/images/icons/favicon/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('public/images/icons/favicon/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('public/images/icons/favicon/apple-touch-icon-114x114.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/admin/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/admin/slick-theme.min.css') }}">

    @if (substr(strrchr(url()->current(), "/"), 1) == 'menu')
        <link rel="stylesheet" href="{{ asset('public/css/admin/jquery.dataTables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/admin/sweetalert2.min.css') }}">
    @endif

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="{{ asset('public/css/admin/bootstrap.min.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('public/css/admin/main.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
    <body>
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">

            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="side-header side-content bg-white-op">
                            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                            <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times"></i>
                            </button>
                            <a class="h5 text-white" href="{{route('admin.main')}}">
                                {{--<i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">ne</span>--}}
                                <img src="{{asset('public/images/logo2.png')}}" alt="" style="height: 35px;">
                            </a>
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Content -->
                        <div class="side-content side-content-full">
                            <ul class="nav-main">
                                <li>
                                    <a class="{{substr(strrchr(url()->current(), "/"), 1) == 'admin' ? 'active' : ''}}" href=" {{route('admin.main')}} "><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Рабочий стол</span></a>
                                </li>
                                <li class="nav-main-heading"><span class="sidebar-mini-hide">Настройки контента</span></li>
                                <li>
                                    <a class="nav-submenu-menu {{substr(strrchr(url()->current(), "/"), 1) == 'menu' ? 'active' : ''}}" href="{{route('admin.menu')}}">
                                        <i class="si si-puzzle"></i>
                                        <span class="sidebar-mini-hide">Меню</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Content -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <ul class="nav-header pull-right">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                                <img src="{{Auth::user()->avatar_path ? asset('public/storage/'. Auth::user()->avatar_path) : asset('public/images/avatar.jpg') }}" alt="Avatar">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header">Profile</li>
                                <li>
                                    <a tabindex="-1" href="base_pages_inbox.html">
                                        <i class="si si-envelope-open pull-right"></i>
                                        <span class="badge badge-primary pull-right">3</span>Inbox
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="base_pages_profile.html">
                                        <i class="si si-user pull-right"></i>
                                        <span class="badge badge-success pull-right">1</span>Profile
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-settings pull-right"></i>Settings
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="{{route('admin.lock')}}">
                                        <i class="si si-lock pull-right"></i>Заблокировать
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{{route('logout')}}">
                                        <i class="si si-logout pull-right"></i>Выйти
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>
                    <li class="visible-xs">
                        <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                        <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </li>
                    <li class="js-header-search header-search">
                        <form class="form-horizontal" action="base_pages_search.html" method="post">
                            <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                                <input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Search..">
                                <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-image overflow-hidden" style="background-image: url('{{ asset('public/images/photo3@2x.jpg') }}');">
                    <div class="push-50-t push-15">
                        <h1 class="h2 text-white-op animated zoomIn">Добро пожаловать {{Auth::user()->name}}</h1>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">
                    @yield('content')
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
                <div class="pull-left">
                    <a class="font-w600" href=" {{route('main')}} " target="_blank">INews</a> &copy; <span class="js-year-copy">2018</span>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="{{asset('public/js/admin/jquery.min.js')}}"></script>
        <script src="{{asset('public/js/admin/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/js/admin/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('public/js/admin/jquery.scrollLock.min.js')}}"></script>
        <script src="{{asset('public/js/admin/jquery.appear.min.js')}}"></script>
        <script src="{{asset('public/js/admin/jquery.countTo.min.js')}}"></script>
        <script src="{{asset('public/js/admin/jquery.placeholder.min.js')}}"></script>
        <script src="{{asset('public/js/admin/js.cookie.min.js')}}"></script>
        <script src="{{asset('public/js/admin/app.js')}}"></script>

        <!-- Page Plugins -->
        <script src="{{asset('public/js/admin/slick.min.js')}}"></script>
        <script src="{{asset('public/js/admin/Chart.min.js')}}"></script>

        <!-- Page JS Code -->
        @yield('scripts')

        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery(function () {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>
    </body>
</html>