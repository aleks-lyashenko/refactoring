<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Rubric;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {

        $title = 'Home Page';
        $posts = Post::orderBy('created_at', 'desc')->paginate(6);

        return view('home', compact('title', 'posts'));
    }
}

//Есть пример кода в PrimerController
