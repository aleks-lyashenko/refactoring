<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create() {
        return view('user.create');
    }

    public function store(Request $request) {

        //валидация
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'avatar' => 'nullable|image'
        ]);

        //Проверка, была ли загружена картинка
        if ($request->hasFile('avatar')) {
            $folder = date('Y-m-d');
            //Загрузка картинки
            $avatar = $request->file('avatar')->store("images/{$folder}");
        }


        //сохранение данных в БД

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            //Если аватар есть, берем его, либо null
            'avatar' => $avatar ?? null,
        ]);

        //записываем в сессию сообщение об успешной регистрации
        session()->flash('success', 'Successful registration');

        //сразу авторизовываем пользователя на сайте
        Auth::login($user);

        //перенаправляем на главную
        return redirect()->home();

    }

    public function loginForm() {

        return view('user.login');
    }

    public function login(Request $request) {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //Авторизация
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->home();
        }
        return redirect()->back()->with('error', 'Неправильный логин или пароль');
    }

    public function logout() {
        //Выход пользователя
        Auth::logout();
        //Перебросить на форму авторизации
        return redirect()->route('login');
    }
}
