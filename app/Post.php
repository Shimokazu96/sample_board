<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'content', 'title', 
    ];

    public function category(){
        //投稿は１つのカテゴリーに属する
        return $this->belongsTo(\App\Category::class,'category_id');
    }

    public function user(){
        //投稿は１つのカテゴリーに属する
        return $this->belongsTo(\App\User::class,'user_id');
    }
}