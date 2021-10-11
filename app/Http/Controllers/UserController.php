<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create() {
        return view('user.create');
    }

    public function store(Request $request) {
        //валидация

        //проверка был ли загружен аватар

        //сохранение данных в БД
//        Post::
    }

    public function loginForm() {
        return view('user.login');
    }
}
