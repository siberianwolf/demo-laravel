<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Post;
use Illuminate\Http\Request;
use Route;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Response
     */
    public function index()
    {
        //
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
     * @param  \App\Category $category
     * @return \Response
     */
    public function show($category)
    {
        $posts = Post::latest()
            ->where('category_id', $category->id)
            // ->with(['category', 'author'])
            ->paginate(20);

        return view(Route::currentRouteName(), compact('category', 'posts'));
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
