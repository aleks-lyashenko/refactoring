@extends('layouts.layout')

@section('title')
    @parent{{$title}}
@endsection

@section('content')
    <div class="container">


        <form class="my-3" action="{{route('maxmoll.store')}}" method="post">
            @csrf
            <div class="user my-3">
                <label for="user">Выберите имя менеджера</label>
                <select class="form-select" name="user" id="user">
                    <option value="" selected disabled>--- Выберите имя пользователя ---</option>
                    @foreach($users as $user)
                        <option
                            @if(old('user') == $user->name) selected
                                @endif

                            name="user">{{$user->name}}
                        </option>

                    @endforeach
                </select>
            </div>

            <div class="">
                <label>
                    Введите имя клиента
                    <input class="form-control @error('customer') is-invalid @enderror" type="text" name="customer" value="{{old('customer')}}">
                </label>

                @error('customer')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <label>
                Телефон клиента
                <input class="form-control" type="tel" name="phone" value="{{old('phone')}}">
            </label>

            <div class="type my-3">
                <p>Тип заказа</p>
                <label>
                    Offline
                    <input class="form-check-input" type="radio" value="offline" name="type"
                           @if(old('type') == 'offline') checked
                        @endif>
                </label>
                <label>
                    Online
                    <input class="form-check-input" type="radio" value="online" name="type"
                           @if(old('type') == 'online') checked
                        @endif>
                </label>
            </div>

            <div class="status my-3">
                <p>Уточните статус заказа</p>
                <select class="form-select" name="status" id="">
                    <option
                        @if(old('status') == 'Active') selected
                        @endif
                    >Active</option>
                    <option
                        @if(old('status') == 'Completed') selected
                        @endif
                    >Completed</option>
                    <option
                        @if(old('status') == 'Canceled') selected
                        @endif
                    >Canceled</option>
                </select>
            </div>

            <div class="tovars">
                <p>Выберите товар</p>
                <select class="form-select" name="product" id="">
                    <option value="" selected disabled>--- Выберите интересующий товар ---</option>
                    @foreach($products as $product)
                        <option name="product"
                            @if(old('product') == $product->name) selected
                            @endif
                        >{{$product->name}}</option>
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
