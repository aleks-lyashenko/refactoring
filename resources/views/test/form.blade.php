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
    <form action="" method="post">
        @csrf
        @method('put')
        <label for="">
            Login
            <input type="text" name="login">
        </label>
        <label for="">
            Password
            <input type="password" name="password">
        </label>
        <button type="submit">Submit</button>
    </form>
</body>
</html>