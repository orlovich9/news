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

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="{{ asset('public/css/admin/bootstrap.min.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('public/css/admin/main.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
    <body class="bg-image" style="background-image: url('{{ asset('public/images/photo17@2x.jpg') }}');">
        <!-- Lock Screen Content -->
        <div class="content overflow-hidden">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                    <!-- Lock Screen Block -->
                    <div class="block block-themed animated bounceIn">
                        <div class="block-header bg-primary">
                            <h3 class="block-title">Разблокировать аккаунт</h3>
                        </div>
                        <div class="block-content block-content-full block-content-narrow">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <!-- Lock Screen Avatar -->
                            <div class="text-center push-15-t push-15">
                                <img class="img-avatar img-avatar96" src="{{ session('avatar_path') ? asset('public/storage/'.session('avatar_path')) : asset('public/images/avatar.jpg')}}" alt="">
                            </div>
                            <!-- END Lock Screen Avatar -->

                            <!-- Lock Screen Form -->
                            <!-- jQuery Validation (.js-validation-lock class is initialized in js/pages/base_pages_lock.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-lock form-horizontal push-30-t push-30" action="{{ route('admin.login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
                                        <div class="form-material form-material-primary">
                                            <input class="form-control" type="password" id="lock-password" name="password" placeholder="Пожалуйста, введите пароль">
                                            <input type="hidden" name="login" value="{{session('login')}}">
                                            <label for="lock-password">Пароль</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
                                        <button class="btn btn-block btn-default" type="submit"><i class="si si-lock-open pull-right"></i> Разблокировать</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Lock Screen Form -->
                        </div>
                    </div>
                    <!-- END Lock Screen Block -->
                </div>
            </div>
        </div>
        <!-- END Lock Screen Content -->

        <!-- Lock Screen Footer -->
        <div class="push-10-t text-center animated fadeInUp">
            <small class="text-black-op font-w600"><span class="js-year-copy"></span> &copy; OneUI 3.4</small>
        </div>
        <!-- END Lock Screen Footer -->

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

        <!-- Page JS Plugins -->
        <script src="{{asset('public/js/admin/jquery.validate.min.js')}}"></script>

        <!-- Page JS Code -->
        <script src="{{asset('public/js/admin/base_pages_lock.js')}}"></script>
    </body>
</html>