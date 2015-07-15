<div class="post-row">
    @each('post.item', $posts, 'post')
</div>
<div class="post-nav">
    {!! $posts->render() !!}
</div>
