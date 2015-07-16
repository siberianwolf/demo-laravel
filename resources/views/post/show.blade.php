@extends('app')

@section('content')
    <div class="row">
        <div class="col-xs-10">
            <h1 class="post-name h3">{{ $post->name }}</h1>
        </div>
        <div class="col-xs-2">
            {!! link_to_route('post.edit', trans('post.edit'), $post, ['class' => 'btn btn-danger']) !!}
        </div>
    </div>
    <ul class="list-inline">
        <li>@lang('post.author'): {{ $post->author->name }}</li>
        <li>@lang('post.date'):
            <time datetime=">{{ $post->created_at->toDateTimeString() }}">{{ $post->created_at->toDateTimeString() }}</time>
        </li>
    </ul>
    <hr>
    <p>{{ $post->content }}</p>
@endsection