<!doctype html>
<html lang="{{ config('app.locale') }}">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<base href="{{ url('/') }}">

<title>Document</title>

<link rel="icon"             href="{{ asset('favicon.png') }}">
<link rel="shortcut icon"    href="{{ asset('shortcut.png') }}">
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
<link rel="stylesheet"       href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600,800&subset=latin,cyrillic">
<link rel="stylesheet"       href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
{{--<link rel="stylesheet"       href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/sandstone/bootstrap.min.css">--}}
<link rel="stylesheet"       href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet"       href="{{ asset('css/app.css') }}">

<main id="main" class="container">
    <header id="header">
        <h1>{!! link_to_route('blog', 'Мой первый блог на Laravel') !!}</h1>
        <h5>github.com/vlsoprun/demo-laravel</h5>
    </header>
    <hr>
    <div class="row">
        <section class="col-sm-9 post-row">
            @yield('content')
        </section>
        <aside id="sidebar" class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">Categories</div>
                </div>
                <ul class="list-group">
                    @foreach(App\Category::all() as $category)
                        <li class="list-group-item">{!! link_to_route('category.show', $category->name, $category) !!}</li>
                    @endforeach
                </ul>
                <div class="panel-heading">
                    <div class="panel-title">Последние 5 постов</div>
                </div>
                <ul class="list-group">
                    @foreach(App\Post::orderBy('created_at', 'desc')->take(5)->get() as $post)
                        <li class="list-group-item">{!! link_to_route('post.show', $post->name, $post) !!}</li>
                    @endforeach
                </ul>
                <div class="panel-footer text-center">
                    {!! link_to_route('post.create', trans('post.create'), [], ['class' => 'btn btn-info']) !!}
                </div>
            </div>
        </aside>
    </div>
</main>

<script src="//cdn.jsdelivr.net/g/jquery,bootstrap"></script>
<script src="{{ asset('js/app.js') }}"></script>
</html>