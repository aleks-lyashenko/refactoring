<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrimerController extends Controller
{
    public function primer($slug = null) {
        //
        return view("test.$slug");

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

//Работа с моделью Post
//        $data = Post::all();
//        $data = Post::limit(5)->get();
//        $data = Post::find(7);
//        Post::query()->create(['title' => 'Post10', 'content' => 'Content post10']);
//        $post = new Post();
//        $post->fill(['title' => 'Post11', 'content' => 'Content post11']);
//        $post->save();
//        $post = Post::find(3);
//        $post->title = 'Post3';
//        $post->content = 'Content post3';
//        $post->save();

//        $post = Post::find(12);
//        $post->delete();

//        dd($data);

//one to one
//Получение рубрики для поста
//        $post = Post::find(5);
//        return $post->rubric->title;
//Получение поста для рубрики
//        $rubric = Rubric::query()->find(4);
//        echo $rubric->post->title;

//one to many

//        $rubric = Rubric::find(4);
//        return $rubric->posts;

//Конструктор запросов - здесь мы обращаемся уже к методу, а не св-ву
//        $post = Post::find(5)->rubric()->select('title')->get();
//        dd($post);

//Ленивая и Жадная загрузка. Жадная - для уменьшения кол-ва sql-запросов
//        $posts = Post::with('rubric')->where('id', '>', 1)->get();
//        foreach ($posts as $post) {
//            dump($post->title, $post->rubric->title);
//        }

//Many to many

//        $post = Post::find(5);
//        dump($post->title);
//        foreach ($post->tags as $tag) {
//            dump($tag->title);
//        }

