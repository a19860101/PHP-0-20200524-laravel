<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    @endforeach
</body>
</html>