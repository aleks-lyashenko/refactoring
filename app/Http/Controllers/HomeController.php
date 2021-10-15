<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {



        return view('home');
    }
}


//Работа с БД. Сырые (RAW) sql-запросы
/*{
//привязки для безопасности
//        DB::insert('INSERT INTO posts (title, content) VALUES (?,?)', ["Статья 4", "Контент статьи 4"]);

//обновление, возвращает количество изм записей
//        DB::update('UPDATE posts SET created_at = ?, updated_at = ? WHERE created_at is NULL OR updated_at is NULL', [NOW(), NOW()]);

//удаление, возвращает количество удаленных записей
//        dump(DB::delete('DELETE FROM posts WHERE id > ?', [3]));

//транзакции
    DB::beginTransaction();
    try {
        //запросы
        DB::update('UPDATE posts SET created_at = ? WHERE created_at is NULL', [NOW()]);
        DB::update('UPDATE posts SET updated_at = ? WHERE updated_at is NULL', [NOW()]);

        DB::commit();
    } catch (\Exception $e) {
        DB::rollBack();
        echo $e->getMessage();
    }

//Выборка с условием
    $posts = DB::select('SELECT * FROM posts WHERE id > :id', ['id' => 4]);
}*/


//Работа с БД. Конструктор запросов
{
//Работа с БД. Конструктор запросов
    //Создаем экземпляр конструктора запросов
//    $data = DB::table('pass')->get();
//    $data = DB::table('pass')->select('login')->limit(12)->get();
//    $data = DB::table('pass')->select('login', 'password')->orderBy('password', 'asc')->get();
//    $data = DB::table('pass')->select('login', 'password')->where('id', '<', 4)->get();
//    $data = DB::table('pass')->select('login', 'password')->where([
//        ['id', '>', 12],
//        ['id', '<', 15],
//    ])->get();
//        $data = DB::table('pass')->limit(17)->pluck('login');

    //Агрегатные функции - произвести подсчеты
//        dump(DB::table('pass')->count());
//        dump(DB::table('pass')->max('password'));
//    dump(DB::table('pass')->select('password')->distinct()->get());

//        dump($data);
}

//ORM
//Post::create(['title' => 'Post 3', 'content'=> 'Content Post 3']);
//
//$post = Post::limit(12)->get();
//
//dump($post);
