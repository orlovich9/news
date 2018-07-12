@extends('layouts.app')

@section('content')
    <section class="inner-page-contents">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <section class="js-profile">
                        <div class="alert alert-danger hidden">
                            <ul>
                            </ul>
                        </div>
                        <div class="alert alert-success hidden"></div>
                        <div class="row category-caption register">
                            <div class="col-lg-12">
                                <h2>Профиль</h2>
                            </div>
                        </div>
                        <div class="row login-form">
                            <form method="POST" action="{{ route('profile',['id' => Auth::id()]) }}" aria-label="Профиль" id="profile_form" enctype="multipart/form-data">
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
                                    <label for="profile_name">Имя:</label>
                                    <input name="name" id="profile_name" type="text" placeholder="Имя" value="{{ $user_info['name'] }}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="profile_surname">Фамилия:</label>
                                    <input name="surname" id="profile_surname" type="text" placeholder="Фамилия" value="{{ $user_info['surname'] }}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="profile_login">Логин:</label>
                                    <input name="login" type="text" id="profile_login" placeholder="Логин" value="{{ $user_info['login'] }}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="profile_email">Email:</label>
                                    <input name="email" type="text" id="profile_email" placeholder="Email" value="{{ $user_info['email'] }}">
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
@section('page-script')
    <script>
        $('#profile_form').on('submit', function(e) {

           e.preventDefault();

           var update_data = new FormData(this);

           $.ajax({
               type: "post",
               url: $(this).attr('action'),
               data: update_data,
               dataType: 'json',
               contentType: false,
               processData: false,
               success : function (success) {
                   console.log(success);
                   $('.js-profile .alert-danger').addClass('hidden');
                   $('.js-profile .alert-success').text('Данные успешно изменены');
                   $('.js-profile .alert-success').removeClass('hidden');
               },
               error: function(error) {
                   if(error.status === 422) {
                       if ($('.js-profile .alert-danger ul li').length) {
                           $('.js-profile .alert-danger ul li').each(function(idx,el) {
                              $(el).remove();
                           });
                       }
                       $.each(error.responseJSON, function (key, value) {
                           for (key in value) {
                               if ($.isArray(value[key])) {
                                   $('.js-profile .alert-danger ul').append("<li>" + value[key][0] + "</li>");
                               }
                           }
                       });
                       $('.js-profile .alert-success').addClass('hidden');
                       $('.js-profile .alert-danger').removeClass('hidden');
                   } else if (error.status === 429){
                       $('.js-profile .alert-success').addClass('hidden');
                       $('.js-profile .alert-danger ul').html("<li>Слишком много запросов к серверу. Повторите запрос через 60 секунд.</li>")
                       $('.js-profile .alert-danger').removeClass('hidden');
                   } else {
                       $('.js-profile .alert-success').addClass('hidden');
                       $('.js-profile .alert-danger ul').html("<li>Неккоректные данные.Пожалуйста, попробуйте еще раз.</li>")
                       $('.js-profile .alert-danger').removeClass('hidden');
                   }
               }
           });
        });
    </script>
@endsection
