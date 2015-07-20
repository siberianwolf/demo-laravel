@extends('app')

@section('content')
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>

    @include('blog.post.row')
@endsection