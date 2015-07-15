<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    // use SoftDeletes

    protected $table = 'category'; // categories
    protected $guarded = ['id'];
    protected $hidden = ['deleted_at'];
    protected $fillable = ['name'];

    /**
     * Получить список постов
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return static::hasMany('App\Post');
    }
}
