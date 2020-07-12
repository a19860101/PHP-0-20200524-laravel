<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SHOW</h1>
    @foreach($posts as $post)
    <h2>{{$post->title}}</h2>
    <div>
        {{$post->content}}
    </div>
    <div>
        最後更新時間:{{$post->updated_at}}
    </div>
    @endforeach
</body>
</html>