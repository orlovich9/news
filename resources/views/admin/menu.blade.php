@extends('admin.index')
@section('content')
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Меню</h3>
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h3 class="font-w300 push-15">{{ $error }}</h3>
                </div>
            @endforeach
        @elseif (session('status'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h3 class="font-w300 push-15">{{ session('status') }}</h3>
            </div>
        @endif
        <div class="block-content">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
            <form action="{{route('admin.menu')}}" method="post" class="js-form-menu">
                @csrf
                <table class="table table-bordered table-striped js-dataTable-full" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th>Заголовок</th>
                            <th>Родитель</th>
                            <th>Сортировка</th>
                            <th class="hidden" style="width: 15%;">Access</th>
                            <th class="text-center" style="width: 10%;">Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td class="text-center item-id">{{$item->id}}<input type="hidden" name="id[]" value="{{$item->id}}"></td>
                                <td class="font-w600">
                                    <input class="js-input hidden" type="text" name="title[]" value="{{$item->title}}">
                                    <span>{{$item->title}}</span>
                                </td>
                                <td>
                                    @foreach ($parents as $id => $parent)
                                        @if ($id == $item->id)
                                            <select class="js-input hidden" name="parent[]">
                                                @if (array_key_exists($item->id, $parent_title))
                                                    @foreach ($parent_title as $id => $arValue)
                                                        @if ($id == $item->id)
                                                            @php
                                                                $parent_id = key($arValue);
                                                            @endphp
                                                            <option value="{{key($arValue)}}">{{$arValue[key($arValue)]}}</option>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <option value="">Нет родителя</option>
                                                @endif
                                                @foreach ($parent as $id => $title)
                                                    @if (!isset($parent_id) || $parent_id != $id)
                                                        <option value="{{$id}}">{{$title}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        @endif
                                    @endforeach
                                    @foreach ($parent_title as $id => $arValue)
                                        @if ($id == $item->id)
                                            <span>{{$arValue[key($arValue)]}}</span>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <input class="js-input hidden" type="text" name="sort[]" value="{{$item->sort}}">
                                    <span>{{$item->sort}}</span>
                                </td>
                                <td class="hidden"></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-xs btn-default js-edit" type="button" data-toggle="tooltip" title="Редактировать">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-xs btn-default js-remove" type="button" data-toggle="tooltip" title="Удалить">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @if (isset($parent_id))
                                @php
                                    unset($parent_id);
                                @endphp
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('public/js/admin/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/js/admin/base_tables_datatables.js')}}"></script>
    <script>
        $(document).ready(function() {
            if ($('#DataTables_Table_0_filter').length) {
                $('#DataTables_Table_0_filter').remove();
            }
            $('#DataTables_Table_0_wrapper').find('.col-sm-6').each(function(idx,el) {
                if (idx == 1) {
                    $(el).append('<div class="menu-buttons"><button class="btn btn-info push-5-r push-10 js-add-item-menu" type="button"><i class="fa fa-plus" style="margin-right: 6px;position: relative;top: 1px;"></i>Добавить пункт меню</button></div>')
                }
            });

            $(document).on('click', '.js-add-item-menu', function() {
                if ($('#DataTables_Table_0_wrapper').find('.col-sm-6 .menu-buttons .btn-success').length == '') {
                    $('#DataTables_Table_0_wrapper').find('.col-sm-6 .menu-buttons').prepend('<button class="btn btn-success push-5-r push-10 js-save-button" type="button"><i class="fa fa-check" style="margin-right: 5px;"></i>Сохранить</button>')
                }
                if ($('.js-dataTable-full tbody').find('.dataTables_empty').length) {
                    $('.js-dataTable-full tbody').append('<tr><td class="text-center item-id">1<input type="hidden" name="id[]" value="1"></td><td class="font-w600"><input class="js-input" type="text" name="title[]"></td><td><!--<select class="js-input" name="parent[]"><option></option></select>--></td><td><input class="js-input" type="text" name="sort[]"></td><td class="hidden"></td><td class="text-center"><div class="btn-group"><button class="btn btn-xs btn-default js-edit" type="button" data-toggle="tooltip" title="Редактировать"><i class="fa fa-pencil"></i></button><button class="btn btn-xs btn-default js-remove" type="button" data-toggle="tooltip" title="Удалить"><i class="fa fa-times"></i></button></div></td></tr>');
                    $('.js-dataTable-full tbody').find('.dataTables_empty').closest('tr').remove();
                } else if ($('.js-dataTable-full tbody').find('tr').length) {
                    var id = parseInt($('.js-dataTable-full tbody tr').last().find('.item-id').text()) + 1;
                    $('.js-dataTable-full tbody').append('<tr><td class="text-center item-id">' + id + '<input type="hidden" name="id[]" value="' + id + '"></td><td class="font-w600"><input class="js-input" type="text" name="title[]"></td><td><!--<select class="js-input" name="parent[]"><option></option></select>--></td><td><input class="js-input" type="text" name="sort[]"></td><td class="hidden"></td><td class="text-center"><div class="btn-group"><button class="btn btn-xs btn-default js-edit" type="button" data-toggle="tooltip" title="Редактировать"><i class="fa fa-pencil"></i></button><button class="btn btn-xs btn-default js-remove" type="button" data-toggle="tooltip" title="Удалить"><i class="fa fa-times"></i></button></div></td></tr>');
                }
            });

            $(document).on('click', '.js-edit', function() {
                if ($('#DataTables_Table_0_wrapper').find('.col-sm-6 .menu-buttons .btn-success').length == '') {
                    $('#DataTables_Table_0_wrapper').find('.col-sm-6 .menu-buttons').prepend('<button class="btn btn-success push-5-r push-10 js-save-button" type="button"><i class="fa fa-check" style="margin-right: 5px;"></i>Сохранить</button>')
                }
                $(this).closest('tr').find('.js-input').each(function(idx,el) {
                   $(el).removeClass('hidden-input');
                });
            });

            $(document).on('click', '.js-save-button', function() {
                $('.js-form-menu').trigger('submit');
            });

            $(document).on('click', '.js-edit', function() {
               $(this).closest('tr').find('.js-input').removeClass('hidden');
               $(this).closest('tr').find('span').addClass('hidden');
            });
        });
    </script>
@endsection