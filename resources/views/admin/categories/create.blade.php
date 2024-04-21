@extends('layouts.admin')
@section('content_header')
إضافة صنف جديد

@stop
@section('content')
<div class="card">

        <div class="card-body">
            <form class="form"
                    action="{{route('admins.categories.store')}}"
                    method="POST"
                    enctype="multipart/form-data">
                @csrf

                <div class="form-body">

                    <div class="row">
                        <div class="col-md-6">
                            {{-- start category name --}}

                            <div class="form-group" style="margin-top: 20px;margin-bottom: 50px">
                                <label for="projectinput1"> اسم الصنف
                                </label>
                                <input type="text" id="name"
                                        class="form-control"
                                        placeholder="  "
                                        value="{{old('name')}}"
                                        name="name">
                                @error("name")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            {{-- start order number --}}

                            <div class="form-group" style="margin-top: 20px;margin-bottom: 50px">
                                <label for="projectinput1"> رقم الطلب
                                </label>
                                <input type="text" id="order_number"
                                        class="form-control"
                                        placeholder="0 "
                                        value="{{old('order_number')}}"
                                        name="order_number">
                                @error("order_number")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            {{-- start adding date --}}

                            <div class="form-group" style="margin-top: 20px;margin-bottom: 50px">
                                <label for="projectinput1"> تاريخ الاضافة
                                </label>
                                <input type="date" id="added_on"
                                        class="form-control"
                                        placeholder="0 "
                                        value="{{old('added_on')}}"
                                        name="added_on">
                                @error("added_on")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            {{-- start status --}}
                            <div class="radio" style="margin-top: 20px;margin-bottom: 50px">
                                <label for="status">  الحالة
                                </label>
                                <hr>
                                <input type="radio" id="status1"
                                        value="1"
                                        name="status">نشط
                                        <input type="radio" id="status0"
                                        value="0"
                                        name="status">غير نشط
                            </div>

                            <div class="form-group" style="margin-top: 20px;margin-bottom: 50px">
                                <label for="projectinput1">  الصور
                                </label>
                                <input type="file" id="images"
                                multiple
                                        class="form-control"
                                        value="{{old('images')}}"
                                        name="images[]">
                                @error("images")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>



                <div class="form-actions" style="margin-top: 50px;margin-right: 120px">
                    <button type="button" class="btn btn-warning mr-1"
                            onclick="history.back();">
                        <i class="ft-x"></i> تراجع
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="la la-check-square-o"></i> إضافة صنف
                    </button>
                </div>
                        </div>
                    </div>
                </div>

            </form>
    </div>
</div>
@stop


<!-- // Basic form layout section end -->


