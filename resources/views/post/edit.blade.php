@extends('template.master')
@section('page-title')
編輯文章
@endsection
@section('main')
    <div class="container">
    <div class="row">
        <div class="col-12">
        <h1>EDIT</h1>
        <form action="{{route('post.update',['id' => $post->id])}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="">文章標題</label>
                <input type="text" name="title" class="form-control" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="">文章內容</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
            </div>
            <input type="submit" value="儲存" class="btn btn-primary btn-sm">
            <input type="button" value="取消" class="btn btn-danger btn-sm" onclick="history.back()">
        </form>
        </div>
    </div>
</div>
@endsection