@extends('layouts.app')

@section('content')
<section class="inner-page-contents">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <section>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
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
                            <h2>Восстановление пароля</h2>
                        </div>
                    </div>
                    <div class="row login-form">
                        <form method="POST" action="{{ route('password.email') }}" aria-label="Восстановление пароля">
                            @csrf
                            <div class="col-lg-6 col-lg-offset-3">
                                <input name="email" id="email" type="text" placeholder="Email" value="{{ old('email') }}">
                            </div>
                            <div class="col-lg-6 col-lg-offset-3">
                                <input type="submit" value="Восстановить пароль">
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection