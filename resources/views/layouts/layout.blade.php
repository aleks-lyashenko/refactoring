<!doctype html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow"><link rel="canonical" href="https://bootstrap5.ru/examples/album" />
    <meta name="description" content="Простой одностраничный шаблон на bootstrap 5 для фотогалерей, портфолио и многого другого.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors, Alexey Golyagin">
    <meta name="docsearch:language" content="ru">
    <meta name="docsearch:version" content="5.0">
    <title>@section('title')My Site::@show</title>
    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">

</head>
<body>
<header>
    @section('header')
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">О нас</h4>
                    <p class="text-muted">Здесь будут все созданные сервисы.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">App Maxmoll</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{route('maxmoll.home')}}" class="text-white">Домашняя Maxmoll</a></li>
                        <li><a href="{{route('maxmoll.create')}}" class="text-white">Сделать заказ</a></li>
                        <li><a href="{{route('maxmoll.send')}}" class="text-white">Отправка email</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" Посмотретьbox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>Home</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    @show
</header>

<main>

    <div class="container">
        @include('layouts.alert')
    </div>

    @yield('content')

</main>

@include('layouts.footer')

<script src="{{asset('public/js/scripts.js')}}"></script>

</body>
</html>
