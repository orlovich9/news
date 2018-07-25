@extends('admin.index')
@section('content')
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Меню</h3>
        </div>
        <div class="block-content">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
            <table class="table table-bordered table-striped js-dataTable-full">
                <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th>Заголовок</th>
                    <th>Родитель</th>
                    <th class="hidden" style="width: 15%;">Access</th>
                    <th class="text-center" style="width: 10%;">Действия</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="font-w600">Laura Bell</td>
                        <td>client1@example.com</td>
                        <td class="hidden"></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Редактировать"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Удалить"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('public/js/admin/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/js/admin/base_tables_datatables.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            if (jQuery('#DataTables_Table_0_filter').length) {
                jQuery('#DataTables_Table_0_filter').remove();
            }
        });
    </script>
@endsection