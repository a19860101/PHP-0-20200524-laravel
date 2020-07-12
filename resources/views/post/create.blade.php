<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CREATE</h1>
    <form action="" method="post">
        @csrf
        <input type="text" name="title">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="新增">
    </form>
</body>
</html>