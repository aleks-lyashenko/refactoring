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

<h1>Список постов</h1>
    <ul>
        <li>
            <a href="{{route('tasks.show', ['id' => 1])}}">Таск1</a>
            <a href="{{route('tasks.edit', ['id' => 1])}}">Edit</a>
            <form action="{{route('tasks.destroy', ['id' => 1])}}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Удалить</button>
            </form>
        </li>
        <li>
            <a href="{{route('tasks.show', ['id' => 2])}}">Таск2</a>
            <a href="{{route('tasks.edit', ['id' => 2])}}">Edit</a>
            <form action="{{route('tasks.destroy', ['id' => 2])}}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Удалить</button>
            </form>
        </li>
        <li>
            <a href="{{route('tasks.show', ['id' => 3])}}">Таск3</a>
            <a href="{{route('tasks.edit', ['id' => 3])}}">Edit</a>
            <form action="{{route('tasks.destroy', ['id' => 3])}}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Удалить</button>
            </form>
        </li>
    </ul>

</body>
</html>
