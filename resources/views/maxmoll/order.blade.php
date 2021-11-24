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
    <label>
        Введите имя пользователя
        <input type="text" name="user_name">
    </label>
    <label>
        Введите имя клиента
        <input type="text" name="client_name">
    </label>
    <label>
        Телефон клиента
        <input type="text">
    </label>

    <div class="type">
        <p>Тип заказа</p>
        <label>
            Offline
            <input type="radio" value="offline" name="type">
        </label>
        <label>
            Online
            <input type="radio" value="online" name="type">
        </label>
    </div>

    <div class="status">
        <select name="status" id="">
            <option value="1">Active</option>
            <option value="2">Completed</option>
            <option value="3">Canceled</option>
        </select>
    </div>

    <div class="tovars">
        <select name="tovars" id="">
            <option value="">Выберите интересующий товар</option>
        </select>
    </div>

    <div class="amount">
        <select name="amount" id="">
            <option value="">Выберите количество</option>
        </select>
    </div>

    <div class="discount">
        <select name="discount" id="">
            <option value="">Выберите скидку</option>
        </select>
    </div>

    <button type="submit">Сделать заказ</button>
</form>
</body>
</html>
