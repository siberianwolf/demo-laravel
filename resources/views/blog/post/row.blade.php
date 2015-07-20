<div class="post-row">
    @each('blog.post.item', $posts, 'post')
</div>
<div class="post-nav">
    {!! $posts->render() !!}
</div>
