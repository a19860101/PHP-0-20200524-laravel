@extends('template.master')

@section('page-title')
    我是首頁
@endsection
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>文章首頁</h1>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>文章標題</th>
                        <th>建立時間</th>
                        <th>最後更新時間</th>
                        <th>動作</th>
                    </tr>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->updated_at}}</td>
                        <td>
                            <form action="{{route('post.destroy',['id' => $post->id])}}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <input type="submit" value="刪除" class="btn btn-danger btn-sm">
                            </form>
                            <a href="{{route('post.show',['id' => $post->id])}}" class="btn btn-success btn-sm">檢視</a>
                            <a href="{{route('post.edit',['id' => $post->id])}}" class="btn btn-primary btn-sm">編輯</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection