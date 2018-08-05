{{--{{$headerMenu}}--}}
<header class="header-mb">
    <div class="container">
        <div class="hdm-menu">
            <a href="#mb-menu" class="c-hamburger htx js-mb-menu">
                <span>toggle menu</span>
            </a>
        </div>
        <div class="hdm-logo">
            <h1><a href="/"><img src="{{ asset('styles/img/logo-mb.svg') }}" height="40" width="140" alt="Spectr" class="adaptive" /></a></h1>
        </div>
        <div class="hdm-search-user">
            <div class="hd-search">
                <a href="#search-block" class="st-btn-1 fa-flip-horizontal js-hd-search">
                    <i class="li_search"></i>
                </a>
                <div class="hd-search-block js-hd-search-block">
                    <div class="search">
                        <div class="search-input">
                            <input type="search" placeholder="Type keywords">
                        </div>
                        <div class="search-btn">
                            <button>Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user">
                <a href="#login" class="js-popups"><i class="li_user"></i></a>
            </div>
        </div>
    </div>
</header>
<div class="sticky-header js-sticky-header">
    <div class="container">
        <div class="main-nav-wrap">
            <div class="row">
                <nav class="main-nav">
                    @if (!empty($burgerMenu['burgerMenu']))
                        <a href="#aside-menu" class="c-hamburger htx js-asd-menu">
                            <span>toggle menu</span>
                        </a>
                    @endif
                    <ul class="main-nav-list sf-menu">
                        @foreach($menuItems['categories'] as $page)
                            <li class="active"><a href="{{ url('/') }}/{{$page->url_name}}">{{$page->name}}</a></li>
                        @endforeach
                        @foreach($menuItems['static'] as $page)
                            <li><a href="{{ url('/') }}/{{$page->purl_name}}">{{$page->pname}}</a></li>
                        @endforeach
                    </ul>
                </nav>
                <div class="hd-search">
                    <a href="#search-block" class="st-btn-1 fa-flip-horizontal js-hd-search">
                        <i class="li_search"></i>
                    </a>
                    <div class="hd-search-block js-hd-search-block">
                        <div class="search">
                            <div class="search-input">
                                <input type="search" placeholder="Type keywords">
                            </div>
                            <div class="search-btn">
                                <button>Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header-tp-4">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-inner">
                <div class="row">
                    <div class="float-left">
                    @include('frontend.partials.header.top.top-header-left-content')
                    </div>
                    <div class="none">
                    @include('frontend.partials.header.top.top-header-center-content')
                    </div>
                    <div class="float-right">
                    @include('frontend.partials.header.top.top-header-right-content')
                    </div>
                    <div class="tb-sing-login">
                        <a href="#signin" class="js-popups">Sign in</a> / <a href="#login" class="js-popups">Join</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header">
        <div class="mh-top">
            <div class="container">
                <div class="row flex">
                    <div class="mh-logo">
                        <a href="/">
                            <img src="{{ asset('/styles/img/main-logo.svg') }}" height="40" width="140" alt="Spectr News Theme" class="adaptive" />
                        </a>
                    </div>
                    <div class="mh-banner">
                        @include('frontend.partials.header.main-header')
                    </div>
                </div>
            </div>
        </div>
        <div class="mh-bottom">
            <div class="container">
                <div class="main-nav-wrap">
                    <div class="row">
                        <nav class="main-nav">
                            @if (!empty($burgerMenu['burgerMenu']))
                                <a href="#aside-menu" class="c-hamburger htx js-asd-menu">
                                    <span>toggle menu</span>
                                </a>
                            @endif
                            <ul class="main-nav-list sf-menu">
                                @foreach($menuItems['categories'] as $page)
                                    @if ($page->subid > 0)
                                        <li>
                                            <a href="{{ url('/') }}/{{$page->url_name}}">{{$page->name}}<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub">
                                                <?php
                                                    $subName = explode(',', $page->subname);
                                                    $subUrlName = explode(',', $page->suburl_name);
                                                ?>
                                                @for ($i = 0; $i < count($subName); $i++)
                                                    <li><a href="{{ url('/') }}/{{$page->url_name}}/{{$subUrlName[$i]}}">{{$subName[$i]}}</a></li>
                                                @endfor
                                            </ul>
                                        </li>
                                    @else
                                        <li @if (Request::path() == $page->url_name) class="active" @endif><a href="{{ url('/') }}/{{$page->url_name}}">{{$page->name}}</a></li>
                                    @endif
                                @endforeach
                                @foreach($menuItems['static'] as $page)
                                    <li @if (Request::path() == $page->purl_name) class="active" @endif><a href="{{ url('/') }}/{{$page->purl_name}}">{{$page->pname}}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                        <div class="hd-search">
                            <a href="#search-block" class="st-btn-1 fa-flip-horizontal js-hd-search">
                                <i class="li_search"></i>
                            </a>
                            <div class="hd-search-block js-hd-search-block">
                                <div class="search">
                                    <div class="search-input">
                                        <input type="search" placeholder="Type keywords">
                                    </div>
                                    <div class="search-btn">
                                        <button>Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header END -->