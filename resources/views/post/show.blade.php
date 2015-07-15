@extends('app')

@section('content')
    <h1 class="h3">{{ $post->name }}</h1>
    <ul class="list-inline">
        <li>@lang('post.author'): {{ $post->author->name }}</li>
        <li>@lang('post.date'): <time datetime=">{{ $post->created_at->toDateTimeString() }}">{{ $post->created_at->toDateTimeString() }}</time></li>
    </ul>
    <hr>
    <p>{{ $post->content }}</p>
@endsection