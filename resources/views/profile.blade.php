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
                                <h2>Профиль</h2>
                            </div>
                        </div>
                        <div class="row login-form">
                            <form method="POST" action="{{ route('profile',['id' => Auth::id()]) }}" aria-label="Профиль" enctype="multipart/form-data">
                                @csrf
                                <div class="col-lg-6 js">
                                    <input type="file" name="avatar" id="file" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                                    <label for="file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>@lang('auth.select_avatar')</span></label>
                                </div>
                                <div class="col-lg-6">
                                    @if ($user_info['avatar'])
                                        <img id="avatar" src="{{ $user_info['avatar'] }}" alt="avatar" />
                                    @else
                                        <img id="avatar" src="{{ asset('public/images/avatar.png') }}" alt="avatar" />
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <input name="name" type="text" placeholder="Имя" value="{{ $user_info['name'] }}">
                                </div>
                                <div class="col-lg-6">
                                    <input name="surname" type="text" placeholder="Фамилия" value="{{ $user_info['surname'] }}">
                                </div>
                                <div class="col-lg-6">
                                    <input name="login" type="text" placeholder="Логин" value="{{ $user_info['login'] }}">
                                </div>
                                <div class="col-lg-6">
                                    <input name="email" type="text" placeholder="Email" value="{{ $user_info['email'] }}">
                                </div>
                                <div class="col-lg-6">
                                    <input name="password" type="password" placeholder="Пароль">
                                </div>
                                <div class="col-lg-6">
                                    <input name="password_confirmation" type="password" placeholder="Повторите пароль">
                                </div>
                                <div class="col-lg-6 col-lg-offset-3">
                                    <input type="submit" value="Изменить данные">
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection