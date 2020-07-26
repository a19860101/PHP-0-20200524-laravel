@extends('template.master')
@section('page-title')
新增產品
@endsection
@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
        <h1>CREATE PRODUCT</h1>
        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">產品標題</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <input type="file" name="img">
            </div>
            <input type="submit" value="新增" class="btn btn-primary btn-sm">
        </form>
        </div>
    </div>
</div>
@endsection