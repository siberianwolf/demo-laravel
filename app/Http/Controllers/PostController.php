<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Post;
use Illuminate\Http\Request;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return \Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int $id
     * @return \Response
     */
    public function update(Request $request, $id)
    {
        //
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
