<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // protected $table = 'categories';
    protected $table = 'category';

    protected $fillable = ['name'];

    public function posts()
    {
        return static::hasMany('App\Post');
    }
}
