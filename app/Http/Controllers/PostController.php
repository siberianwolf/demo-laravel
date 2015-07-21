<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Post;
use Route;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Response
     */
    public function index()
    {
        $posts = Post::latest()
            ->with(['category', 'author'])
            ->paginate(20);

        return view(Route::currentRouteName(), compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Response
     */
    public function create()
    {
        $categories = Category::lists('name', 'id');

        return view(Route::currentRouteName(), compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Requests\PostRequest $request
     * @return \Response
     */
    public function store(Requests\PostRequest $request)
    {
        // $post = Post::create($request->input());

        $data = $request->input();

        // todo: Тестовая подстановка автора поста
        $data['author_id'] = rand(1, 5);

        $post = Post::create($data);

        return redirect()->route('blog.post.edit', [$post])->with('success', trans('post.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Post $post
     * @return \Response
     */
    public function show($post)
    {
        return view(Route::currentRouteName(), compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post $post
     * @return \Response
     */
    public function edit($post)
    {
        $categories = Category::lists('name', 'id');

        return view(Route::currentRouteName(), compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Requests\PostRequest $request
     * @param  Post $post
     * @return \Response
     */
    public function update(Requests\PostRequest $request, $post)
    {
        $post->update($request->input());

        return redirect()->back()->with('success', trans('post.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post $post
     * @return \Response
     */
    public function destroy($post)
    {
        Post::destroy($post);

        return redirect()->route('blog')->with('success', trans('post.deleted'));
    }
}
