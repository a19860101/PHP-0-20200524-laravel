@extends('template.master')
@section('page-title')
產品列表
@endsection
@section('main')
<div class="container">
    <div class="row">
        @foreach($products as $prod)
        <div class="col-3">
            <img src="/storage/images/{{$prod->img}}" class="w-100">
            <h2>{{$prod->title}}
        </div>
        @endforeach
    </div>
</div>
@endsection