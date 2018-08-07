@extends('admin.index')
@section('content')
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Пользователи</h3>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                @foreach ($errors->all() as $error)
                    <h3 class="font-w300 push-15">{{ $error }}</h3>
                @endforeach
            </div>
        @elseif (session('status'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h3 class="font-w300 push-15">{{ session('status') }}</h3>
            </div>
        @endif
        <div class="block-content">
            <form action="{{ route('admin.users') }}" method="post" class="js-form">
                @csrf
                <table class="table table-bordered table-striped js-dataTable-full" style="width: 100%;">
                    <thead>
                    <tr>
                        <th class="text-center">Id</th>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Логин</th>
                        <th>Email</th>
                        <th>Пароль</th>
                        <th>Тип пользователя</th>
                        <th class="hidden" style="width: 15%;">Access</th>
                        <th class="text-center" style="width: 10%;">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if (!empty($arUsers) && !empty($arUserTypes))
                            @foreach ($arUsers as $id => $arUser)
                                <tr data-id="{{ $id }}">
                                    <td class="text-center item-id">{{ $id }}</td>
                                    <td class="font-w600">
                                        <span>{{ $arUser['name'] }}</span>
                                    </td>
                                    <td class="font-w600">
                                        <span>{{ $arUser['surname'] }}</span>
                                    </td>
                                    <td class="font-w600">
                                        <span>{{ $arUser['login'] }}</span>
                                    </td>
                                    <td class="font-w600">
                                        <span>{{ $arUser['email'] }}</span>
                                    </td>
                                    <td class="font-w600"></td>
                                    <td class="js-user-types">
                                        @foreach ($arUser['get_user_types'] as $arType)
                                            <span style="display: block;">{{ !empty($arType['user_type']) ?  $arType['user_type'] : 'Зарегистрированный пользователь'}}</span>
                                        @endforeach
                                    </td>
                                    <td class="hidden"></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-default js-edit" type="button" data-toggle="tooltip" title="Редактировать">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                            <button class="btn btn-xs btn-default js-swal-confirm" type="button" data-toggle="tooltip" title="Удалить">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('public/js/admin/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/js/admin/es6-promise.auto.min.js') }}"></script>
    <script src="{{ asset('public/js/admin/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('public/js/admin/base_tables_datatables.js') }}"></script>
    <script src="{{ asset('public/js/admin/base_ui_activity.js') }}"></script>
    <script>
        $(document).ready(function() {

            $('#DataTables_Table_0_filter').append('<button class="btn btn-info push-5-r push-10 js-add-user" type="button" style="margin-left: 15px; margin-bottom: 0!important;"><i class="fa fa-plus" style="margin-right: 6px;position: relative;top: 1px;"></i>Добавить пользователя</button>')

            $(document).on('click', '.js-add-user', function() {
                if ($('#DataTables_Table_0_filter').find('.btn-success').length == '') {
                    $('#DataTables_Table_0_filter').append('<button class="btn btn-success push-5-r push-10 js-save-button" type="button" style="margin-left: 15px; margin-bottom: 0!important;"><i class="fa fa-check"></i>Сохранить</button><button class="btn btn-danger push-5-r push-10 js-delete-button" type="button" style="margin: 0 0 0 10px!important;"><i class="fa fa-times"></i> Отменить</button>')
                }
                if ($('.js-dataTable-full tbody').find('.dataTables_empty').length) {
                    $('.js-dataTable-full tbody').append('<tr class="js-user-item"><td class="text-center item-id">1<input type="hidden" name="id[]" value="1"></td><td class="font-w600"><input class="js-input" type="text" name="name[]"></td><td class="font-w600"><input class="js-input" type="text" name="surname[]"></td><td class="font-w600"><input class="js-input" type="text" name="login[]"></td><td class="font-w600"><input class="js-input" type="text" name="email[]"></td><td class="font-w600"><input class="js-input" type="password" name="password[]"></td><td><select class="js-input" name="type[1][]" multiple><option value="1">Контент-менеджер</option><option value="2">Оператор</option><option value="3">Администратор</option></select></td><td class="hidden"></td><td class="text-center"><div class="btn-group"><button class="btn btn-xs btn-default js-edit" type="button" data-toggle="tooltip" title="Редактировать"><i class="fa fa-pencil"></i></button><button class="btn btn-xs btn-default js-swal-confirm" type="button" data-toggle="tooltip" title="Удалить"><i class="fa fa-times"></i></button></div></td></tr>');
                    $('.js-dataTable-full tbody').find('.dataTables_empty').closest('tr').remove();
                } else if ($('.js-dataTable-full tbody').find('tr').length) {
                    var id = parseInt($('.js-dataTable-full tbody tr').last().find('.item-id').text()) + 1;
                    $('.js-dataTable-full tbody').append('<tr class="js-user-item"><td class="text-center item-id">' + id + '<input type="hidden" name="id[]" value="' + id + '"></td><td class="font-w600"><input class="js-input" type="text" name="name[]"></td><td class="font-w600"><input class="js-input" type="text" name="surname[]"></td><td class="font-w600"><input class="js-input" type="text" name="login[]"></td><td class="font-w600"><input class="js-input" type="text" name="email[]"></td><td class="font-w600"><input class="js-input" type="password" name="password[]"></td><td><select class="js-input" name="type['+ id +'][]" multiple><option value="1">Контент-менеджер</option><option value="2">Оператор</option><option value="3">Администратор</option></select></td><td class="hidden"></td><td class="text-center"><div class="btn-group"><button class="btn btn-xs btn-default js-edit" type="button" data-toggle="tooltip" title="Редактировать"><i class="fa fa-pencil"></i></button><button class="btn btn-xs btn-default js-swal-confirm" type="button" data-toggle="tooltip" title="Удалить"><i class="fa fa-times"></i></button></div></td></tr>');
                }
            });

            $(document).on('click', '.js-edit', function() {
                if ($('#DataTables_Table_0_filter').find('.btn-success').length == '' && $('#DataTables_Table_0_filter').find('.btn-danger').length == '') {
                    $('#DataTables_Table_0_filter').append('<button class="btn btn-success push-5-r push-10 js-save-button" type="button" style="margin-left: 15px; margin-bottom: 0!important;"><i class="fa fa-check"></i>Сохранить</button><button class="btn btn-danger push-5-r push-10 js-delete-button" type="button" style="margin: 0 0 0 10px!important;"><i class="fa fa-times"></i> Отменить</button>');
                }
                var id = $(this).closest('tr').data('id');
                $(this).closest('tr').find('.js-user-types span').addClass('hidden');
                if ($(this).closest('tr').find('.js-user-types .js-input').length == '') {
                    $(this).closest('tr').find('.js-user-types').append('<input type="hidden" name="id[]" value="'+ id +'"><select class="js-input" name="type['+ id +'][]" multiple><option value="1">Контент-менеджер</option><option value="2">Оператор</option><option value="3">Администратор</option></select>');
                }
            });

            $(document).on('click', '.js-save-button', function() {
                $('.js-form').trigger('submit');
            });

            $(document).on('click', '.js-delete-button', function() {
                $('.js-dataTable-full').find('.js-user-item').remove();
                $('.js-dataTable-full').find('.js-input').addClass('hidden');
                $('.js-dataTable-full').find('span').removeClass('hidden');
                $('.js-dataTable-full').find('.js-user-types .js-input').remove();
                $('.js-save-button').remove();
                $('.js-delete-button').remove();
            });

            $(document).on('click', '.js-swal-confirm', function() {
                $(this).closest('tr').addClass('js-delete-item');
            });
        });
    </script>
@endsection