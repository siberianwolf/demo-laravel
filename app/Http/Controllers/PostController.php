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
            // ->with(['category', 'author'])
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

        $data['author_id'] = rand(1, 5);

        $post = Post::create($data);

        return redirect()->route('post.edit', [$post])->with('success', 'Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id); // firstOrFail

        return view(Route::currentRouteName(), compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::lists('name', 'id');

        return view(Route::currentRouteName(), compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Requests\PostRequest $request
     * @param  int $id
     * @return \Response
     */
    public function update(Requests\PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $data = $request->input();

        $post->update($data);

        return redirect()->back()->with('success', 'Post saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Response
     */
    public function destroy($id)
    {
        //
    }
}
