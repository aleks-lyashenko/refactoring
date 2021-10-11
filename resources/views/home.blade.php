@extends('layouts.layout')

@section('title')
    @parent:: Home
@endsection

@section('content')
    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle">
            <h1 class="mb-5 text-center">Добро пожаловать</h1>

            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" aria-label="Twelfth navbar example">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('register.create')}}">Регистрация</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('login.create')}}">Вход</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Просмотр контента</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>

@endsection

