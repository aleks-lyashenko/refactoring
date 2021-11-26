<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index() {
        $title = 'Список заказов';
        $products = Product::all();

        return view('maxmoll.order', compact('title', 'products'));
    }
    //Показывает форму для записи в БД
    public function create() {
        $products = Product::all();
        $users = User::all();
        $title = 'Сделать заказ';
//        dd($products);
        return view('maxmoll/create', compact('products', 'users', 'title'));
    }
    //Сохраняет данные из формы в БД
    public function store(Request $request) {
//        dd($request->input('user'));  Получить 1 поле
//        Получить все поля
//        dd($request->all());
//        Order::create($request->all()); Сохранить все поля в БД
        $order = new Order();
//        dd($request->input('user'));
        $order->customer = $request->input('customer');
        $order->phone = $request->input('phone');
        $order->user = $request->input('user');
        $order->type = $request->input('type');
        $order->status = $request->input('status');
        $order->save();
        return redirect()->route('maxmoll.home');
    }
}
