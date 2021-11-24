<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function rubric() {
        return $this->belongsTo(Rubric::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    //метод для форматирования времени в "человеческий формат"
    public function getPostDate() {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    //Laravel будет автоматически заполнять эти поля в таблице
    protected $attributes = [
//        'content' => 'Content post ...',
    ];

    protected $fillable = ['title', 'content'];
}
