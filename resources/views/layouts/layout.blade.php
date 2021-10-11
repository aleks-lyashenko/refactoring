<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

<title>@section('title')My Site @show</title>
</head>
<style>
    body {
        background-color: #ededed;
    }
</style>
<body>

<header>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <form class="container-fluid">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Панель информации</span>
                    <input type="text" class="form-control" placeholder="Здесь будут появляться сообщения" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </form>
        </nav>
    </div>
</header>

<main>
    @yield('content')
</main>

{{--@extends('layouts.footer')--}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>
