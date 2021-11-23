<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function rubric() {
        return $this->belongsTo(Rubric::class);
    }

    //Laravel будет автоматически заполнять эти поля в таблице
    protected $attributes = [
//        'content' => 'Content post ...',
    ];

    protected $fillable = ['title', 'content'];
}
