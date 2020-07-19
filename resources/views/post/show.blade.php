@extends('template.master')

@section('page-title')
文章標題{{$post->title}}
@endsection
@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{$post->title}}</h1>
            <div>
                {{$post->content}}
            </div>
            <div>
                最後更新時間:{{$post->updated_at}}
            </div> 
            <a href="#" class="btn btn-primary btn-sm" onclick="history.back()">回上頁</a>
        </div>
    </div>
</div>
@endsection
