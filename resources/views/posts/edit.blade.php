<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Form</h1>
<form action="{{route('posts.update', ['post' => $id])}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title">
    <button type="submit">Submit</button>
</form>
</body>
</html>
