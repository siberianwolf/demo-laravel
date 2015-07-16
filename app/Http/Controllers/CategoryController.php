<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Post;
use Route;

class CategoryController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);

        $posts = Post::latest()
            ->where('category_id', $category->id)
            // ->with(['category', 'author'])
            ->paginate(20);

        return view(Route::currentRouteName(), compact('category', 'posts'));
    }
}
