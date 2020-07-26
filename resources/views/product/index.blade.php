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
            <h2>{{$prod->title}}</h2>
            <form action="{{route('product.destroy',['id'=>$prod->id])}}" method="post">
            @csrf
            @method('delete')
                <input type="submit" class="btn btn-danger" value="刪除">
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection