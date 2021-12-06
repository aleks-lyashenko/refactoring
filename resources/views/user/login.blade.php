@extends('layouts.layout')

@section('title')
    @parent:: LogIn
@endsection

@section('content')
    <div class="container">

        <h1 class="text-center mb-5">Вход в систему</h1>

        <form action="" method="post">

            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control mb-3" id="email" name="email" value="{{old('email')}}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control mb-3" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Send</button>

        </form>

    </div>
@endsection
