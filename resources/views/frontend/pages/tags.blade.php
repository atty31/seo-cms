@if( ! empty($tags))
    <div class="tags-widget">
        <div class="pst-block">
            <div class="pst-block-head">
                <h2 class="title-4"><strong>Tags</strong></h2>
                <div class="all-sb">
                    <a href="">all tags</a>
                </div>
            </div>
            <div class="pst-block-main">
                <div class="tags-block">
                    <ul class="tags-list">
                        @foreach($tags as $tag)
                            <li><a href="">{{ $tag->tname }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif