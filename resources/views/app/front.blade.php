<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестирование верстки</title>

    <link rel="stylesheet" href="/public/css/style.css">

</head>

<body>
<header class="header">
    <div class="header__wrapper container">
        <div class="header__title">
            <h1><a href="">ABC</a></h1>
        </div>
        <div class="header__burger">
            <span></span>
        </div>
        <nav class="nav">
            <ul class="nav__list">
                <li><a href="assets/menu_burger/burger.html" class="nav__link">Бургер-меню</a></li>
                <li><a href="assets/UI/index.html" class="nav__link">UI</a></li>
                <li><a href="assets/Jscript/script.html" class="nav__link">Практика JavaScript</a></li>
                <li><a href="assets/links/index.html" class="nav__link">Полезные ссылки</a></li>
                <li><a href="" class="nav__link">Пункт 5</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="main">

    <div class="main__wrapper container">
        <h2>Тестирование верстки</h2>

        <div class="app">
            <h3>Идеи для сайта</h3>
            <ol>
                <li>Стартовый экран - регистрация/авторизация</li>
                <li>Чат</li>
                <li>Поиск на сайте</li>
                <li>Добавление новых английских слов с переводом</li>
                <li>Портфолио</li>
                <li>Вывод данных из БД</li>
                <li>Корзина товара</li>
                <li>БД Личное дело</li>
                <li>БД Справочник телефонов</li>
                <li>БД Общая Информация</li>
            </ol>
        </div>

    </div>

</main>

<footer class="footer">
    <div class="footer__wrapper container">
        {{$name}}
        {{$surname}}
        @ All right reserved
    </div>
</footer>

<script src="js/main.js"></script>
<script>

</script>

</body>

</html>
