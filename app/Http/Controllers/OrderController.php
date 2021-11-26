<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        //Валидация данных

//        $this->validate($request, [
//            'customer' => 'required|min:5|max:255|',
//            'phone' => 'required|numeric',
//            'user' => 'required|',
//            'type' => 'required',
//            'status' => 'required',
//        ]);

        $rules = [
            'customer' => 'required',
            'phone' => 'required|numeric',
            'user' => 'required|',
            'type' => 'required',
            'status' => 'required',
        ];
        //кастомизация сообщений об ошибке
        $messages = [
            'customer.required' => 'Выберите менеджера',
            'phone.numeric' => 'В номере телефона разрешены только цифры',
        ];

        $validator = Validator::make($request->all(), $rules,$messages)->validate();

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
