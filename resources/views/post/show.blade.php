@extends('template.master')

@section('page-title')
文章標題{{$post->title}}
@endsection
@section('main')

<h1>SHOW</h1>
    <h2>{{$post->title}}</h2>
    <div>
        {{$post->content}}
    </div>
    <div>
        最後更新時間:{{$post->updated_at}}
    </div>
    @endsection
