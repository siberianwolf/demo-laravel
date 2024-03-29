@extends('app')

@section('content')
    <div class="row">
        <div class="col-xs-7">
            <h1 class="post-name h3">{{ $post->name }}</h1>
        </div>
        <div class="col-xs-5 btn-toolbar">
            {!! Form::open(['route' => ['blog.post.destroy', $post], 'method' => 'DELETE', 'class' => 'btn-group pull-right']) !!}
            <div class="btn-group">
                {!! Form::submit(trans('post.destroy'), ['class' => 'btn btn-danger']) !!}
                {!! link_to_route('blog.post.edit', trans('post.edit'), $post, ['class' => 'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <ul class="list-inline">
        <li>@lang('post.author'): {{ $post->author->name }}</li>
        <li>@lang('post.date'):
            <time datetime="{{ $post->created_at->toDateTimeString() }}">{{ $post->created_at->toDateTimeString() }}</time>
        </li>
    </ul>
    <figure>
        <img class="img-thumbnail" src="{{ $post->large }}" alt="{{ $post->name }}">
    </figure>
    <hr>
    <p>{!! $post->content !!}</p>
@endsection