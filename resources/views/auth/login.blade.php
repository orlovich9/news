@extends('layouts.app')

@section('content')
    <section class="inner-page-contents">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <section class="login">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                         @endif
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf
                            <div class="row category-caption login">
                                <div class="col-lg-12">
                                    <h2>@lang('auth.login')</h2>
                                </div>
                            </div>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <div class="row login-form">
                                <div class="col-lg-6 col-lg-offset-3">
                                    <input name="login" type="text" placeholder="Логин" value="{{ old('login') }}">
                                </div>
                                <div class="col-lg-6 col-lg-offset-3">
                                    <input name="password" type="password" placeholder="Пароль">
                                </div>
                                <div class="col-lg-6 col-lg-offset-3">
                                    <input name="remember" type="checkbox" value=""> @lang('auth.remember')
                                </div>
                                <div class="col-lg-6 col-lg-offset-3">
                                    <input type="submit" value="Войти">
                                </div>
                                <div class="col-lg-6 col-lg-offset-3">
                                    <a href="{{ route('password.request') }}">@lang('auth.forgot_your_password')</a>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection