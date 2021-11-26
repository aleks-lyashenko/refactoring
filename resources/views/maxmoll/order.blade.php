@extends('layouts.layout')

@section('title')
    @parent{{$title}}
@endsection

@section('content')
    <div class="container">
        <h1>Ваши заказы</h1>

        <p>Список заказов пуст</p>

        <div class="show">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Amount</th>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->stock}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
