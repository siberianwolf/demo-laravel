@extends('app')

@section('content')
    <h3>{{ trans('post.edit') }}</h3>

    {!! Form::open(['route' => ['blog.post.update', $post], 'method' => 'PUT', 'id' => 'edit', 'class' => 'form-horizontal']) !!}
    @include('blog.post.form')
    {!! Form::close() !!}
@endsection