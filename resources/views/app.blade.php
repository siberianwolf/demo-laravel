<!doctype html>
<html lang="{{ config('app.locale') }}">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<base href="{{ url('/') }}">

<title>Document</title>

<link rel="icon"             href="{{ asset('favicon.png') }}">
<link rel="shortcut icon"    href="{{ asset('shortcut.png') }}">
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
<link rel="stylesheet"       href="//cdn.jsdelivr.net/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet"       href="//cdn.jsdelivr.net/fontawesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet"       href="{{ asset('css/app.css') }}">

<main id="main" class="container">
    <header id="header">
        <h1><a href="{{ route('blog') }}">Мой первый блог на Laravel</a></h1>
    </header>
    <hr>
    <div class="row">
        <section id="content" class="col-sm-8">
            @yield('content')
        </section>
        <aside id="sidebar" class="col-sm-3 col-sm-offset-1">
            <ul class="list-unstyled">
                @foreach(App\Category::all() as $category)
                    <li><a href="{{ route('category.show', $category) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
            <p class="h4">Последние 5 постов</p>
            <ul class="list-unstyled">
                @foreach(App\Post::orderBy('created_at')->take(5)->get() as $post)
                    <li><a href="{{ route('post.show', $post) }}">{{ $post->name }}</a></li>
                @endforeach
            </ul>
        </aside>
    </div>
</main>

{{--<script src="//cdn.jsdelivr.net/g/jsdelivr-rum,jquery"></script>--}}
{{--<script src="{{ asset('js/all.js') }}"></script>--}}
</html>