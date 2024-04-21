@extends('layouts.admin')
@section('css_calls')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('assets/admin/css/yajra Index/datatable.min.css') }}"/>
<link href="{{ asset('assets/admin/css/yajra Index/datatable.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/admin/css/yajra Index/datatable2.min.css') }}" rel="stylesheet">

@stop
@section('content_header')
الأصناف
@stop

@section('content')
<div class="container mt-5">
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>الترقيم</th>

                <th>الاسم</th>
                <th> رقم الأوردر</th>
                <th>الحالة</th>
                <th>وقت الاضافة </th>
                <th>الاجراءات</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

@stop

@section('scripts')
<script src="{{ asset('assets/admin/js/yajra/jquery.js') }}"></script>
<script src="{{ asset('assets/admin/js/yajra/validate.js') }}"></script>
<script src="{{ asset('assets/admin/js/yajra/datatables.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/yajra/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/yajra/datatable.bootstrap.min.js') }}"></script>
<script type="text/javascript">
  $(function () {

    var table = $('.yajra-datatable').DataTable({
        processing: false,
        serverSide: true,
        ajax: "{{ route('admins.categories.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'order_number', name: 'order_number'},
            {data: 'status', name: 'status'},
            {data: 'added_on', name: 'added_on'},
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true,
                "order":[[1,"asc"]]
            },
        ]
    });

  });
</script>
@stop

