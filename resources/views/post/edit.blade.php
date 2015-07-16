@extends('app')

@section('content')
    <h3>{{ trans('post.edit') }}</h3>

    {!! Form::open(['route' => ['post.update', $post], 'method' => 'PUT', 'id' => 'edit', 'class' => 'form-horizontal']) !!}
    @include('post.form')
    {!! Form::close() !!}
@endsection