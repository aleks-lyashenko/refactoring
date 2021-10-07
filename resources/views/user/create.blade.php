@extends('layouts.layout')

@section('title')
    @parent:: Register
@endsection

@section('content')
    <div class="container position-absolute top-50 start-50 translate-middle">

        <h1 class="text-center mb-5">Регистрация</h1>

        <form action="" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control mb-3" id="name" name="name" value="{{old('name')}}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control mb-3" id="email" name="email" value="{{old('email')}}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control mb-3" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control mb-3" id="password_confirmation" name="password_confirmation">
            </div>

            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" class="form-control-file mb-3" id="avatar" name="avatar">
            </div>

            <button type="submit" class="btn btn-primary">Send</button>

        </form>

    </div>
@endsection
