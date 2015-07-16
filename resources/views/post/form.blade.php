@if(Session::has('success'))
    <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
@endif

@foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">{{ $error }}</div>
@endforeach

<div class="form-group text-right">
    <div class="col-sm-12">
        {!! Form::reset('Reset', ['class' => 'btn btn-danger', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Tooltip on bottom']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-success', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Tooltip on bottom']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('name', trans('post.name'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('name', old('name', @$post->name), ['class' => 'form-control', 'placeholder' => trans('post.name')]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('description', trans('post.description'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('description', old('description', @$post->description), ['class' => 'form-control', 'placeholder' => trans('post.description')]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('content', trans('post.content'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('content', old('content', @$post->content), ['class' => 'form-control', 'placeholder' => trans('post.content')]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('category_id', trans('post.category'), ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('category_id', $categories, old('category_id'), ['class' => 'form-control', 'placeholder' => trans('post.content')]) !!}
    </div>
</div>