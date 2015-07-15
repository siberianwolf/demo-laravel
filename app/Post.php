<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table = 'posts';
    protected $table = 'post';

    protected $fillable = ['category_id', 'author_id', 'name', 'description', 'content'];

    public function category()
    {
        return static::belongsTo('App\Category');
    }

    public function author()
    {
        return static::belongsTo('App\User', 'author_id');
    }
}
