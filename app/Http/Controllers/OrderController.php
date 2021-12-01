<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    public function index(Request $request) {
        //Запись в сессию
//        $request->session()->put('name', 'Aleks');
//        session(
//            ['cart' => [
//                ['id' => 1, 'title' => 'Product1'],
//                ['id' => 2, 'title' => 'Product2'],
//        ]]
//        );
        //Добавить в элемент
//        $request->session()->push('cart', ['id' => 3, 'title' => 'Product 3']);

        //Удаление из сессионного массива
//        dump($request->session()->pull('name'));

        //Очистить сессию
//        session()->flush();

//        dump(session()->all());
//        dump(session('cart')[1]['title']);


        //Работа с куками
//        Cookie::queue('cookie', 'Кука на 1 минуту', 5);
//        dump(Cookie::get('cookie'));
//Удалить куку
//        Cookie::queue(Cookie::forget('cookie'));

        //Работа с кэшем
//        Cache::put('key', 'Value', 60);
//        dump(Cache::get('key'));

        $title = 'Список заказов';


        //Кеширование данных
        if (Cache::has('products')) {
            $products = Cache::get('products');
        } else {
            $products = Product::all();
            Cache::put('products', $products, 240);
        }

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

        $request->session()->flash('success', 'Данные успешно сохранены в базу данных');

        return redirect()->route('maxmoll.home');
    }
}
