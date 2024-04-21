@extends('layouts.admin')
@section('content')

        <!-- /.card-header -->
        <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
            <th>اسم المنتج</th>
            <th>الوصف</th>
            <th>الكمية</th>
            <th>تاريخ الاضافة</th>
            <th></th>
            </tr>
            </thead>
            <tbody>
            @isset($products )
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->slug }}</td>
                        <td>{{ $product->description }}</td>
                        <td>-</td>
                        <td>U</td>
                        <td>
                            <div class="btn-group" role="group"
                                 aria-label="Basic example">
                                 <a href="{{ route('admins.products.show',$product->name ) }}"
                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">عرض </a>
                                 <a href="{{ route('admins.products.edit',$product->name) }}"
                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1" style="margin: 0px 20px">تعديل </a>
                                 <a href="{{ route('admins.products.destroy',$product->name) }}"
                                    class="btn btn-danger btn-min-width box-shadow-3 mr-1 mb-1 to_deletes"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteModal"
                                   data-id="{{$product->name}}">حذف </a>

                            </div>
                        </td>

                    </tr>
                @endforeach
            @endisset
            </tbody>
            <tfoot>
            <tr>

            </tr>
            </tfoot>
        </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection
