<aside class="side-bar">
    <div class="js-sidebar"> <!-- class to scroll down -->
        @include('frontend.pages.socials')
        @include('frontend.pages.subscribe')
        <?php if ((int) $page->enable_comments === 1){ ?>
            @include('frontend.pages.comment-button')
        <?php } ?>
        @include('frontend.pages.tags')
    </div>
</aside>