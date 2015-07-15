<article class="post-item col-xs-12 row">
    <div class="col-xs-4">
        <a href="{{ route('post.show', $post) }}">
            <img src="https://placeholdit.imgix.net/~text?txtsize=30&bg=fff&w=240&h=160&txt=Thumbnail" alt="..." class="img-thumbnail">
        </a>
    </div>
    <div class="col-xs-8">
        <h2 class="h4"><a href="{{ route('post.show', $post) }}">{{ $post->name }}</a></h2>
        <ul class="list-inline">
            <li>{{ trans('post.author') }}: {{ $post->author->name }}</li>
            <li>{{ trans('post.date') }}: <time datetime=">{{ $post->created_at->toDateTimeString() }}">{{ $post->created_at->toDateTimeString() }}</time></li>
        </ul>
        <p>{{ $post->description }}</p>
        <div class="text-right"><a href="{{ route('post.show', $post) }}" class="btn btn-primary">{{ trans('post.more') }}</a></div>
    </div>
</article>