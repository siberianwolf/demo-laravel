<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    // use SoftDeletes;

    protected $table = 'post'; // posts
    protected $guarded = ['id'];
    protected $hidden = ['deleted_at'];
    protected $fillable = ['category_id', 'author_id', 'name', 'description', 'content', 'thumbnail', 'large'];

    /**
     * Связь поста с категорией
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return static::belongsTo('App\Category');
    }

    /**
     * Связь поста с его автором
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return static::belongsTo('App\User', 'author_id');
    }
}
