@extends('frontend.layouts.main')


@section('main-content')
    <div class="page-head-tile">
        <div class="container">
            <div class="alert alert-success">
                <?php
                    if ( !empty(app('request')->input('c')) || (int) app('request')->input('c') === 1) {
                        echo 'Your comment is waiting for the admin approval. Thank you!';
                    }
                ?>
            </div>
            <div class="page-title">
                <h1 class="title-16"><strong>{!! $page->title !!}</strong></h1>
            </div>
        </div>
    </div>
    <!-- Page head tile END -->
    <div class="section">
        <div class="row">
            <div class="content">
                <div class="pst-block">
                    <div class="pst-block-main">
                        <div class="post-content">
                            <div class="forum-block">
                                <div class="breadcrumbs-block">
                                    <ul class="breadcrumbs">
                                        <li class="bc-item">
                                            <a href="">Home</a>
                                            <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="bc-item">
                                            <a href="">Forum</a>
                                            <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="bc-item">
                                            <a href="">Design</a>
                                            <i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="bc-item">
                                            <a href="">Voluptatem accusantium doloremque</a>
                                        </li>
                                    </ul>
                                </div>
                                {!! $page->short_description !!}
                                {!! html_entity_decode($page->description) !!}
                                <?php if ((int) $page->enable_comments === 1){ ?>
                                        @include('frontend.pages.comments')
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('frontend.pages.right-side-bar')
        </div>
    </div>
@endsection

