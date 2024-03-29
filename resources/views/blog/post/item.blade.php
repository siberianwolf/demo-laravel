<article class="post-item col-xs-12">
    <div class="row">
        <div class="col-xs-4">
            <a href="{{ route('blog.post.show', $post) }}">
                <img class="img-thumbnail" src="{{ $post->thumbnail }}" alt="{{ $post->name }}">
            </a>
        </div>
        <div class="col-xs-8">
            <h2 class="post-name h4">{!! link_to_route('blog.post.show', $post->name, $post) !!}</h2>
            <ul class="list-inline">
                <li>{{ trans('post.author') }}: {{ $post->author->name }}</li>
                <li>{{ trans('post.date') }}:
                    <time datetime="{{ $post->created_at->toDateTimeString() }}">{{ $post->created_at->toDateTimeString() }}</time>
                </li>
            </ul>
            <p>{{ $post->description }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-right">
            {!! link_to_route('blog.post.show', trans('post.more'), $post , ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</article>