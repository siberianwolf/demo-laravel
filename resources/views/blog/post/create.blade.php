@extends('app')

@section('content')
    <h3>{{ trans('post.create') }}</h3>

    {!! Form::open(['route' => ['blog.post.store'], 'id' => 'edit', 'class' => 'form-horizontal']) !!}
    @include('blog.post.form')
    {!! Form::close() !!}
@endsection