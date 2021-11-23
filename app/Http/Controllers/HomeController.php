<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Rubric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {

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
        $posts = Post::with('rubric')->where('id', '>', 1)->get();
        foreach ($posts as $post) {
            dump($post->title, $post->rubric->title);
        }

        return view('home');
    }
}

