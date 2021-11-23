<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    use HasFactory;

    //one to one | В моделе Rubric создается виртуальное свойство post (связь с рубрикой Post)
//    public function post() {
//        return $this->hasOne(Post::class);
//    }

    //one to Many
    public function posts() {
        return $this->hasMany(Post::class);
    }

}
