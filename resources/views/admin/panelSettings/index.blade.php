@extends('layouts.admin')

@section('title')
الضبط العام
@endsection
@section('content_header')
الضبط
@endsection
@section('content')
<div class="row">
    <div class="card-body"><div class="col-md-12 text-center">
        <form method="POST" action="{{ route('admins.logout') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
    </div>
</div>
@endsection
