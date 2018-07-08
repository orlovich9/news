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
                    <div class="col-lg-6 col-lg-offset-3">
                        <h2>Спасибо вам за регисрацию на сайте!</h2>
                    </div>
                    <div class="col-lg-6 col-lg-offset-3">
                        <a href="{{route('main')}}" class="btn">Перейти на главную</a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection
