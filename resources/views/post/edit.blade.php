<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EDIT</h1>
    <form action="{{route('post.update',['id' => $post->id])}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="title" value="{{$post->title}}">
        <textarea name="content" id="" cols="30" rows="10">{{$post->content}}</textarea>
        <input type="submit" value="儲存">
    </form>
</body>
</html>