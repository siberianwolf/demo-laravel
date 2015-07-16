@extends('app')

@section('content')
    <h3>{{ trans('post.create') }}</h3>

    {!! Form::open(['route' => ['post.store'], 'id' => 'edit', 'class' => 'form-horizontal']) !!}
    @include('post.form')
    {!! Form::close() !!}
@endsection