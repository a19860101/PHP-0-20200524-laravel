@extends('template.master')
@section('page-title')
編輯文章
@endsection
@section('main')
    <h1>EDIT</h1>
    <form action="{{route('post.update',['id' => $post->id])}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="title" value="{{$post->title}}">
        <textarea name="content" id="" cols="30" rows="10">{{$post->content}}</textarea>
        <input type="submit" value="儲存">
    </form>
@endsection