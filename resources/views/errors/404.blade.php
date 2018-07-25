<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>INews - 404</title>
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

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="{{ asset('public/css/admin/bootstrap.min.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('public/css/admin/main.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
    <body>
        <!-- Error Content -->
        <div class="content bg-white text-center pulldown overflow-hidden">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <!-- Error Titles -->
                    <h1 class="font-s128 font-w300 text-city animated flipInX">404</h1>
                    <h2 class="h3 font-w300 push-50 animated fadeInUp">Страница, которую вы искали не существует..</h2>
                    <!-- END Error Titles -->
                </div>
            </div>
        </div>
        <!-- END Error Content -->

        <!-- Error Footer -->
        <div class="content pulldown text-muted text-center">
            Что вы хотите сделать?<br>
            <a class="link-effect" href="javascript:void(0)">Сообщить об этом администратору</a> или <a class="link-effect" href="{{route('main')}}">Перейти на главную</a>
        </div>
        <!-- END Error Footer -->

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
    </body>
</html>