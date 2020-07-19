@extends('template.master')
@section('page-title')
新增文章
@endsection
@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
        <h1>CREATE</h1>
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">文章標題</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">文章內容</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <input type="submit" value="新增" class="btn btn-primary btn-sm">
        </form>
        </div>
    </div>
</div>
    
@endsection