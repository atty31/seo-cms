<div class="forums-comment-block">
    @foreach ($comments as $comment)
        <article class="bbp-reply-post">
            <div class="bbp-reply-header">
                <div class="bbp-meta">
                    <span class="bbp-reply-post-date">{{ $comment->created_at }}</span>
                </div>
            </div>
            <div class="bbp-reply-topic">
                <div class="bbp-reply-author">
                    <a href="" class="bbp-author-name">{{ $comment->author }}</a>
                </div>
                <div class="bbp-reply-content">
                    <p class="p">{{ $comment->description }}</p>
                </div>
            </div>
        </article>
    @endforeach
</div>
<div class="live-comments-block" id = "live-comments-block">
    <div class="title-blc-2">
        <div class="title-blc-inner">
            <h4>Leave a <span>Comment</span></h4>
        </div>
    </div>
    <div class="comments-form">
        <form action="{{ route('comments.store', ['id' => $page->pid ])}}" method="post" id="comment-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-control">
                <label>
                    NAME*
                    <input name="name" type="text">
                </label>
            </div>
            <div class="form-control">
                <label>
                    Comment*
                    <textarea name="description"></textarea>
                </label>
            </div>
            <button class="btn-3">Post comment</button>
        </form>
    </div>
</div>