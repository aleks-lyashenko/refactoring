@extends('layouts.layout')

@section('title')
    @parent{{$title}}
@endsection

@section('content')
    <div class="container">
        <form class="my-5" action="{{route('maxmoll.store')}}" method="post">
            @csrf
            <div class="user my-3">
                <label for="user">Выберите имя менеджера</label>
                <select class="form-select" name="user" id="user">
                    <option value="" selected disabled>--- Выберите имя пользователя ---</option>
                    @foreach($users as $user)
                        <option name="user">{{$user->name}}</option>

                    @endforeach
                </select>
            </div>

            <label>
                Введите имя клиента
                <input class="form-control" type="text" name="customer">
            </label>

            <label>
                Телефон клиента
                <input class="form-control" type="tel" name="phone">
            </label>

            <div class="type my-3">
                <p>Тип заказа</p>
                <label>
                    Offline
                    <input class="form-check-input" type="radio" value="offline" name="type">
                </label>
                <label>
                    Online
                    <input class="form-check-input" type="radio" value="online" name="type">
                </label>
            </div>

            <div class="status my-3">
                <p>Уточните статус заказа</p>
                <select class="form-select" name="status" id="">
                    <option>Active</option>
                    <option>Completed</option>
                    <option>Canceled</option>
                </select>
            </div>

            <div class="tovars">
                <p>Выберите товар</p>
                <select class="form-select" name="product" id="">
                    <option value="" selected disabled>--- Выберите интересующий товар ---</option>
                    @foreach($products as $product)
                        <option name="product">{{$product->name}} | Осталось {{$product->stock}} штук</option>
                    @endforeach
                </select>
            </div>

            <div class="amount my-3">
                <p>Выберите количество товара <small>(не больше остатка на складе)</small></p>
                <input class="form-control" type="number" min="1" max="120">
            </div>

            <div class="discount my-3">
                <select class="form-select" name="discount" id="">
                    <option value="">Выберите скидку</option>
                </select>
            </div>

            <button class="btn btn-primary my-3" type="submit">Сделать заказ</button>
        </form>
    </div>

@endsection
