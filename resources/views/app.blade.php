<!doctype html>
<html lang="{{ config('app.locale') }}">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<base href="{{ url('/') }}">

<title>Document</title>

<link rel="icon"             href="{{ asset('favicon.png') }}">
<link rel="shortcut icon"    href="{{ asset('shortcut.png') }}">
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
<link rel="stylesheet"       href="//fonts.googleapis.com/css?family=Open+Sans:400,700,300,600,800&subset=latin,cyrillic">
<link rel="stylesheet"       href="//cdn.jsdelivr.net/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet"       href="//cdn.jsdelivr.net/fontawesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet"       href="{{ asset('css/app.css') }}">

<main id="main" class="container">
    <header id="header">
        <h1>{!! link_to_route('blog', 'Мой первый блог на Laravel') !!}</h1>
        <small>github.com/vlsoprun/demo-laravel</small>
    </header>
    <hr>
    <div class="row">
        <section class="col-sm-8">
            @yield('content')
        </section>
        <aside id="sidebar" class="col-sm-3 col-sm-offset-1">
            <ul class="list-unstyled">
                @foreach(App\Category::all() as $category)
                    <li>{!! link_to_route('category.show', $category->name, $category) !!}</li>
                @endforeach
            </ul>
            <p class="h4">Последние 5 постов</p>
            <ul class="list-unstyled">
                @foreach(App\Post::orderBy('created_at')->take(5)->get() as $post)
                    <li>{!! link_to_route('post.show', $post->name, $post) !!}</li>
                @endforeach
            </ul>
            <hr>
            {!! link_to_route('post.create', trans('post.create'), [], ['class' => 'btn btn-info']) !!}
        </aside>
    </div>
</main>

<script src="//cdn.jsdelivr.net/g/jquery,bootstrap"></script>
<script src="{{ asset('js/app.js') }}"></script>
</html>