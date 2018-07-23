@extends('layouts.app')

@section('content')
<section class="inner-page-contents">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <section>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                     @endif
                    <div class="row category-caption register">
                        <div class="col-lg-12">
                            <h2>@lang('auth.register')</h2>
                        </div>
                    </div>
                    <div class="row login-form">
                        <form method="POST" action="{{ route('register') }}" aria-label="Регистрация" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-6">
                                <input name="name" type="text" placeholder="Имя" value="{{ old('name') }}">
                            </div>
                            <div class="col-lg-6">
                                <input name="surname" type="text" placeholder="Фамилия" value="{{ old('surname') }}">
                            </div>
                            <div class="col-lg-6">
                                <input name="login" type="text" placeholder="Логин" value="{{ old('login') }}">
                            </div>
                            <div class="col-lg-6">
                                <input name="email" type="text" placeholder="Email" value="{{ old('email') }}">
                            </div>
                            <div class="col-lg-6">
                                <input name="password" type="password" placeholder="Пароль">
                            </div>
                            <div class="col-lg-6">
                                <input name="password_confirmation" type="password" placeholder="Повторите пароль">
                            </div>
                            <div class="col-lg-6 col-lg-offset-3">
                                <input type="submit" value="Зарегистрироваться">
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection