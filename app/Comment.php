<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * 属性に対するモデルのデフォルト値
     *
     * @var array
     */
    protected $fillable = [
        'user_id','post_id','comment'
    ];

    public function user(){
        return $this->belongsTo(\App\User::class,'user_id');
    }
}
