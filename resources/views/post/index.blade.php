@extends('template.master')

@section('page-title')
    我是首頁
@endsection
@section('main')

    <h1>INDEX</h1>
    <nav>
        <!-- <a href="/post/create">新增</a> -->
        <a href="{{route('post.create')}}">新增</a>
    </nav>
    @foreach($posts as $post)
        <h2>{{$post->title}}</h2>
        <div>
            {{$post->content}}
        </div>
        <div>
            最後更新時間:{{$post->updated_at}}
        </div>
        <form action="{{route('post.destroy',['id' => $post->id])}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="刪除">
        </form>
        <a href="{{route('post.show',['id' => $post->id])}}">檢視</a>
        <a href="{{route('post.edit',['id' => $post->id])}}">編輯</a>
    @endforeach
@endsection