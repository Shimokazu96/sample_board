<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * 属性に対するモデルのデフォルト値
     *
     * @var array
     */
    protected $fillable = [
        'category_name' 
    ];
}
