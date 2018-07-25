<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="ru"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="ru"> <!--<![endif]-->
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
    <body>
        <!-- Login Content -->
        <div class="content overflow-hidden">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                    <!-- Login Block -->
                    <div class="block block-themed animated fadeIn">
                        <div class="block-header bg-primary">
                            <h3 class="block-title">@lang('login.auth')</h3>
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
                            <!-- Login Title -->
                            <h1 class="h2 font-w600 push-30-t push-5">INews</h1>
                            <p>@lang('login.login_title')</p>
                            <!-- END Login Title -->

                            <!-- Login Form -->
                            <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-login form-horizontal push-30-t push-50" action="{{ route('admin.login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" type="text" id="login-username" name="login">
                                            <label for="login-username">@lang('login.login')</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" type="password" id="login-password" name="password">
                                            <label for="login-password">@lang('login.password')</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label class="css-input switch switch-sm switch-primary">
                                            <input type="checkbox" id="login-remember-me" name="remember"><span></span> @lang('auth.remember')
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <button class="btn btn-block btn-primary" type="submit"><i class="si si-login pull-right"></i> @lang('login.come_in')</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Login Form -->
                        </div>
                    </div>
                    <!-- END Login Block -->
                </div>
            </div>
        </div>
        <!-- END Login Content -->

        <!-- Login Footer -->
        <div class="push-10-t text-center animated fadeInUp">
            <small class="text-muted font-w600"><span class="js-year-copy"></span> &copy; INews </small>
        </div>
        <!-- END Login Footer -->

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
        <script src="{{asset('public/js/admin/base_pages_login.js')}}"></script>
    </body>
</html>