@extends('frontend.layouts.main')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <!-- Trending line -->
    <div class="trending-posts-line">
        <div class="container">
            <div class="trending-line">
                <div class="trending-now"><strong>Trending</strong> Now</div>
                <div class="tl-slider">
                    <div><a href="">Fusce ac orci sagittis mattis magna et ultrices</a></div>
                    <div><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, consectetur.</a></div>
                    <div><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></div>
                </div>
                <div class="tl-slider-control"></div>
            </div>
        </div>
    </div>
    <!-- Trending line END -->
    <!-- Main posts -->
    <div class="main-posts-1">
        <div class="mp-section">
            <div class="two-thirds sm-full">
                <div class="main-slider-2">
                    <div class="js-main-slider-2">
                        <div class="slide">
                            <article class="post post-tp-1">
                                <figure>
                                    <a href=""><img src="{{ asset('/styles/img/760x471/1.jpg') }}" height="471" width="760" alt="Spectr News Theme" class="adaptive" /></a>
                                </figure>
                                <div class="ptp-1-overlay">
                                    <div class="ptp-1-data">
                                        <a href="" class="category-tp-1">BUSINESS</a>
                                        <h3 class="title-1"><a href="#1">Qt arcu odio sollicitudin obortis vitae scelerid ante</a></h3>
                                        <div class="meta-tp-1">
                                            <div class="ptp-1-date"><a href="">october 2, 2015</a></div>
                                            <div class="ptp-1-views"><a href=""><i class="li_eye"></i><span>187</span></a></div>
                                            <div class="ptp-1-comments"><a href=""><i class="li_bubble"></i><span>5</span></a></div>
                                        </div>
                                        <a href="" class="read-tp-1"><span>Read more</span> <span class="arr-right-light-ic"><i></i></span></a>
                                        <a href="" class="save-tp-1 pull-right"><span>Save and read later</span> <span class="arr-down-light-ic"><i></i></span></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="slide">
                            <article class="post post-tp-1">
                                <figure>
                                    <a href=""><img src="{{ asset('/styles/img/760x471/2.jpg') }}" height="471" width="760" alt="Spectr News Theme" class="adaptive" /></a>
                                </figure>
                                <div class="ptp-1-overlay">
                                    <div class="ptp-1-data">
                                        <a href="" class="category-tp-1">BUSINESS</a>
                                        <h3 class="title-1"><a href="#1">Qt arcu odio sollicitudin obortis vitae scelerid ante</a></h3>
                                        <div class="meta-tp-1">
                                            <div class="ptp-1-date"><a href="">october 2, 2015</a></div>
                                            <div class="ptp-1-views"><a href=""><i class="li_eye"></i><span>187</span></a></div>
                                            <div class="ptp-1-comments"><a href=""><i class="li_bubble"></i><span>5</span></a></div>
                                        </div>
                                        <a href="" class="read-tp-1"><span>Read more</span> <span class="arr-right-light-ic"><i></i></span></a>
                                        <a href="" class="save-tp-1 pull-right"><span>Save and read later</span> <span class="arr-down-light-ic"><i></i></span></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="slide">
                            <article class="post post-tp-1">
                                <figure>
                                    <a href=""><img src="{{ asset('/styles/img/760x471/3.jpg') }}" height="471" width="760" alt="Spectr News Theme" class="adaptive" /></a>
                                </figure>
                                <div class="ptp-1-overlay">
                                    <div class="ptp-1-data">
                                        <a href="" class="category-tp-1">BUSINESS</a>
                                        <h3 class="title-1"><a href="#1">Qt arcu odio sollicitudin obortis vitae scelerid ante</a></h3>
                                        <div class="meta-tp-1">
                                            <div class="ptp-1-date"><a href="">october 2, 2015</a></div>
                                            <div class="ptp-1-views"><a href=""><i class="li_eye"></i><span>187</span></a></div>
                                            <div class="ptp-1-comments"><a href=""><i class="li_bubble"></i><span>5</span></a></div>
                                        </div>
                                        <a href="" class="read-tp-1"><span>Read more</span> <span class="arr-right-light-ic"><i></i></span></a>
                                        <a href="" class="save-tp-1 pull-right"><span>Save and read later</span> <span class="arr-down-light-ic"><i></i></span></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="ms-navs">
                        <div class="slide-count">
                            <span class="current"></span> of
                            <span class="total"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="one-third sm-hide">
                <div class="trend-pst-slider">
                    <div class="trpst-block">
                        <div class="trpst-block-head">
                            <h2 class="title-4"><strong>Trending</strong> Posts</h2>
                            <div class="js-sbr-pagination"></div>
                        </div>
                        <div class="trpst-block-main">
                            <div class="js-trend-pst-slider">
                                <div>
                                    <article class="post post-tp-3">
                                        <figure>
                                            <a href=""><img src="{{ asset('/styles/img/126x98/1.jpg') }}" height="98" width="126" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <a href="" class="category-tp-2">business</a>
                                        <h3 class="title-3"><a href="">Mauris porta quam a lorem honcus</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-3">
                                        <figure>
                                            <a href=""><img src="{{ asset('/styles/img/126x98/2.jpg') }}" height="98" width="126" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <a href="" class="category-tp-2">video</a>
                                        <h3 class="title-3"><a href="">Duis eu arcu sit amet ante tristique</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-3">
                                        <figure>
                                            <a href=""><img src="{{ asset('/styles/img/126x98/3.jpg') }}" height="98" width="126" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <a href="" class="category-tp-2">design</a>
                                        <h3 class="title-3"><a href="">Fusce ac orci sagittis mattis</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post post-tp-3">
                                        <figure>
                                            <a href=""><img src="{{ asset('/styles/img/126x98/2.jpg') }}" height="98" width="126" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <a href="" class="category-tp-2">video</a>
                                        <h3 class="title-3"><a href="">Duis eu arcu sit amet ante</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-3">
                                        <figure>
                                            <a href=""><img src="{{ asset('/styles/img/126x98/3.jpg') }}" height="98" width="126" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <a href="" class="category-tp-2">design</a>
                                        <h3 class="title-3"><a href="">Fusce ac orci sagittis mattis</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-3">
                                        <figure>
                                            <a href=""><img src="{{ asset('/styles/img/126x98/1.jpg') }}" height="98" width="126" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <a href="" class="category-tp-2">business</a>
                                        <h3 class="title-3"><a href="">Mauris porta quam a lorem honcus</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="trpst-block-foot">
                            <a href=""><span class="more-txt">More trending posts</span><span class="arr-right-dark-ic"><i></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mp-section">
            <div class="one-third sm-half xs-full">
                <article class="post post-tp-2">
                    <figure>
                        <a href=""><img src="{{ asset('/styles/img/380x258/1.jpg') }}" height="258" width="380" alt="Spectr News Theme" class="adaptive" /></a>
                    </figure>
                    <div class="ptp-1-overlay">
                        <div class="ptp-1-data">
                            <a href="" class="category-tp-1">BUSINESS</a>
                            <h2 class="title-29"><a href="#1">Qt arcu odio sollicitudin obortis vitae scelerid ante</a></h2>
                            <div class="meta-tp-1">
                                <div class="ptp-1-date"><a href="">october 2, 2015</a></div>
                                <div class="ptp-1-views"><a href=""><i class="li_eye"></i><span>187</span></a></div>
                                <div class="ptp-1-comments"><a href=""><i class="li_bubble"></i><span>5</span></a></div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="one-third sm-half xs-hide">
                <article class="post post-tp-2">
                    <figure>
                        <a href=""><img src="{{ asset('/styles/img/380x258/2.jpg') }}" height="258" width="380" alt="Spectr News Theme" class="adaptive" /></a>
                    </figure>
                    <div class="ptp-1-overlay">
                        <div class="ptp-1-data">
                            <a href="" class="category-tp-1">design</a>
                            <h2 class="title-29"><a href="#1">Explain to you how all this mistaken idea</a></h2>
                            <div class="meta-tp-1">
                                <div class="ptp-1-date"><a href="">october 2, 2015</a></div>
                                <div class="ptp-1-views"><a href=""><i class="li_eye"></i><span>187</span></a></div>
                                <div class="ptp-1-comments"><a href=""><i class="li_bubble"></i><span>5</span></a></div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="one-third sm-hide">
                <article class="post post-tp-2">
                    <figure>
                        <a href=""><img src="{{ asset('/styles/img/380x258/3.jpg') }}" height="258" width="380" alt="Spectr News Theme" class="adaptive" /></a>
                    </figure>
                    <div class="ptp-1-overlay">
                        <div class="ptp-1-data">
                            <a href="" class="category-tp-1">life styles</a>
                            <h2 class="title-29"><a href="#1">Denouncing pleasure and praising pain was</a></h2>
                            <div class="meta-tp-1">
                                <div class="ptp-1-date"><a href="">october 2, 2015</a></div>
                                <div class="ptp-1-views"><a href=""><i class="li_eye"></i><span>187</span></a></div>
                                <div class="ptp-1-comments"><a href=""><i class="li_bubble"></i><span>5</span></a></div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <!-- Main posts END -->
    <div class="section">
        <div class="trend-pst">
            <div class="pst-block">
                <div class="pst-block-head">
                    <h2 class="title-4"><strong>Trending</strong> Posts</h2>
                    <div class="filters">
                        <ul class="filters-list-1 xs-hide">
                            <li><a href="" class="active">all</a></li>
                            <li><a href="">business</a></li>
                            <li><a href="">gadgets</a></li>
                            <li><a href="">design</a></li>
                            <li><a href="">fachion</a></li>
                            <li><a href="">video</a></li>
                        </ul>
                        <div class="filters-more">
                            <div class="filters-btn js-fl-btn">
                                <i class="li_settings"></i>
                                <div class="filters-drop js-fl-block">
                                    <i class="arr"></i>
                                    <ul>
                                        <li><a href="">Latest</a></li>
                                        <li><a href="" class="active">Popular</a></li>
                                        <li><a href="">Recent</a></li>
                                        <li><a href="">Most comment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pst-block-main">
                    <div class="col-row">
                        <div class="col-one-quarter">
                            <article class="post post-tp-4">
                                <figure>
                                    <a href="">
                                        <img src="{{ asset('/styles/img/260x186/1.jpg') }}" height="186" width="260" alt="Spectr News Theme" class="adaptive" />
                                    </a>
                                    <div class="ptp-4-overlay">
                                        <div class="ptp-4-data">
                                            <a href="">
                                                <i class="li_eye"></i>187
                                            </a>
                                            <a href="">
                                                <i class="li_bubble"></i>187
                                            </a>
                                        </div>
                                    </div>
                                </figure>
                                <h3 class="title-3"><a href="">Fusce ac orci sagittis mattis magna t ultrices</a></h3>
                                <div class="meta-tp-2">
                                    <div class="date"><span>october 2, 2015</span></div>
                                    <div class="category">
                                        <a href=""><i class="li_pen"></i><span>business</span></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-one-quarter">
                            <article class="post post-tp-4">
                                <figure>
                                    <a href="">
                                        <img src="{{ asset('/styles/img/260x186/2.jpg') }}" height="186" width="260" alt="Spectr News Theme" class="adaptive" />
                                    </a>
                                    <div class="ptp-4-overlay">
                                        <div class="ptp-4-data">
                                            <a href="">
                                                <i class="li_eye"></i>187
                                            </a>
                                            <a href="">
                                                <i class="li_bubble"></i>187
                                            </a>
                                        </div>
                                    </div>
                                </figure>
                                <h3 class="title-3"><a href="">Denouncing pleasure and praising pain was</a></h3>
                                <div class="meta-tp-2">
                                    <div class="date"><span>october 2, 2015</span></div>
                                    <div class="category">
                                        <a href=""><i class="li_pen"></i><span>business</span></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-one-quarter">
                            <article class="post post-tp-4">
                                <figure>
                                    <a href="">
                                        <img src="{{ asset('/styles/img/260x186/3.jpg') }}" height="186" width="260" alt="Spectr News Theme" class="adaptive" />
                                    </a>
                                    <div class="ptp-4-overlay">
                                        <div class="ptp-4-data">
                                            <a href="">
                                                <i class="li_eye"></i>187
                                            </a>
                                            <a href="">
                                                <i class="li_bubble"></i>187
                                            </a>
                                        </div>
                                    </div>
                                </figure>
                                <h3 class="title-3"><a href="">Fusce ac orci sagittis mattis magna t ultrices</a></h3>
                                <div class="meta-tp-2">
                                    <div class="date"><span>october 2, 2015</span></div>
                                    <div class="category">
                                        <a href=""><i class="li_pen"></i><span>business</span></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-one-quarter">
                            <article class="post post-tp-4">
                                <figure>
                                    <a href="">
                                        <img src="{{ asset('/styles/img/260x186/4.jpg') }}" height="186" width="260" alt="Spectr News Theme" class="adaptive" />
                                    </a>
                                    <div class="ptp-4-overlay">
                                        <div class="ptp-4-data">
                                            <a href="">
                                                <i class="li_eye"></i>187
                                            </a>
                                            <a href="">
                                                <i class="li_bubble"></i>187
                                            </a>
                                        </div>
                                    </div>
                                </figure>
                                <h3 class="title-3"><a href="">Fusce ac orci sagittis mattis magna t ultrices</a></h3>
                                <div class="meta-tp-2">
                                    <div class="date"><span>october 2, 2015</span></div>
                                    <div class="category">
                                        <a href=""><i class="li_pen"></i><span>business</span></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="pst-block-foot">
                    <a href="">More recent posts</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="content">
                <div class="popular-pst">
                    <div class="pst-block">
                        <div class="pst-block-head">
                            <h2 class="title-4"><strong>Popular</strong> Posts</h2>
                            <div class="filters">
                                <ul class="filters-list-1 xs-hide">
                                    <li><a href="" class="active">all</a></li>
                                    <li><a href="">business</a></li>
                                    <li><a href="">gadgets</a></li>
                                    <li><a href="">design</a></li>
                                    <li><a href="">fachion</a></li>
                                    <li><a href="">video</a></li>
                                </ul>
                                <div class="filters-more">
                                    <div class="filters-btn js-fl-btn">
                                        <i class="li_settings"></i>
                                        <div class="filters-drop js-fl-block">
                                            <i class="arr"></i>
                                            <ul>
                                                <li><a href="">Latest</a></li>
                                                <li><a href="" class="active">Popular</a></li>
                                                <li><a href="">Recent</a></li>
                                                <li><a href="">Most comment</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pst-block-main">
                            <div class="col-row">
                                <div class="col-half">
                                    <article class="post post-tp-5">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/345x242/1.jpg') }}" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                        </figure>
                                        <h3 class="title-5"><a href="">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                        <div class="meta-tp-2">
                                            <div class="date"><span>october 2, 2015</span></div>
                                            <div class="category">
                                                <a href=""><i class="li_user"></i><span>admin</span></a>
                                            </div>
                                        </div>
                                        <p class="p">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore</p>
                                    </article>
                                </div>
                                <div class="col-half">
                                    <article class="post post-tp-6">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/1.jpg') }}" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Duis eu arcu sit amet ante tristique</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-6">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/2.jpg') }}" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Vivamus auctor quam nec mauris commodo</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-6">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/3.jpg') }}" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Nam ut metus elementum pharetra diam sed</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-6">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/4.jpg') }}" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Mauris porta quam a lorem rhoncus fringilla</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="pst-block-foot">
                            <a href="">MOre popular posts</a>
                        </div>
                    </div>
                </div>
                <div class="design-pst">
                    <div class="pst-block">
                        <div class="pst-block-head">
                            <h2 class="title-4"><strong>Design</strong> Posts</h2>
                            <div class="filters">
                                <ul class="filters-list-1 xs-hide">
                                    <li><a href="" class="active">all</a></li>
                                    <li><a href="">business</a></li>
                                    <li><a href="">gadgets</a></li>
                                    <li><a href="">design</a></li>
                                    <li><a href="">fachion</a></li>
                                    <li><a href="">video</a></li>
                                </ul>
                                <div class="filters-more">
                                    <div class="filters-btn js-fl-btn">
                                        <i class="li_settings"></i>
                                        <div class="filters-drop js-fl-block">
                                            <i class="arr"></i>
                                            <ul>
                                                <li><a href="">Latest</a></li>
                                                <li><a href="" class="active">Popular</a></li>
                                                <li><a href="">Recent</a></li>
                                                <li><a href="">Most comment</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pst-block-main">
                            <div class="col-row">
                                <div class="col-half">
                                    <article class="post post-tp-5">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/345x242/2.jpg') }}" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                            <div class="ptp-5-overlay">
                                                <div class="ptp-5-data">
                                                    <a href="">
                                                        <i class="li_eye"></i>187
                                                    </a>
                                                    <a href="">
                                                        <i class="li_bubble"></i>187
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                        <h3 class="title-5"><a href="">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                        <div class="meta-tp-2">
                                            <div class="date"><span>october 2, 2015</span></div>
                                            <div class="category">
                                                <a href=""><i class="li_user"></i><span>admin</span></a>
                                            </div>
                                        </div>
                                        <p class="p">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore</p>
                                    </article>
                                </div>
                                <div class="col-half">
                                    <article class="post post-tp-5">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/345x242/3.jpg') }}" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                            <div class="ptp-5-overlay">
                                                <div class="ptp-5-data">
                                                    <a href="">
                                                        <i class="li_eye"></i>187
                                                    </a>
                                                    <a href="">
                                                        <i class="li_bubble"></i>187
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                        <h3 class="title-5"><a href="">Explain to you how all this mistaken idea of denouncing</a></h3>
                                        <div class="meta-tp-2">
                                            <div class="date"><span>october 2, 2015</span></div>
                                            <div class="category">
                                                <a href=""><i class="li_user"></i><span>admin</span></a>
                                            </div>
                                        </div>
                                        <p class="p">Qiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore</p>
                                    </article>
                                </div>
                            </div>
                            <hr class="pst-block-hr">
                            <div class="col-row">
                                <div class="col-half">
                                    <article class="post post-tp-6">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/5.jpg') }}" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Duis eu arcu sit amet ante tristique</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-6">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/6.jpg') }}" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Vivamus auctor quam nec mauris commodo</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                </div>
                                <div class="col-half">
                                    <article class="post post-tp-6">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/7.jpg') }}" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Nam ut metus elementum pharetra diam sed</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-6">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/8.jpg') }}" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Mauris porta quam a lorem rhoncus fringilla</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="pst-block-foot">
                            <a href="">More design posts</a>
                        </div>
                    </div>
                </div>
                <div class="editors-pst">
                    <div class="pst-block spst-slider">
                        <div class="pst-block-head">
                            <h2 class="title-4"><strong>Editors</strong> Posts</h2>
                            <div class="filters">
                                <div class="post-navs js-pst-navs">
                                    <a href="" class="prev pst-prev">
                                        <span class="arr-left-dark-ic"><i></i></span>
                                    </a>
                                    <a href="" class="next pst-next">
                                        <span class="arr-right-dark-ic"><i></i></span>
                                    </a>
                                </div>
                                <div class="filters-more">
                                    <div class="filters-btn js-fl-btn">
                                        <i class="li_settings"></i>
                                        <div class="filters-drop js-fl-block">
                                            <i class="arr"></i>
                                            <ul>
                                                <li><a href="">Latest</a></li>
                                                <li><a href="" class="active">Popular</a></li>
                                                <li><a href="">Recent</a></li>
                                                <li><a href="">Most comment</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pst-block-main">
                            <div class="col-row">
                                <div class="js-pst-block">
                                    <div class="col-one-third">
                                        <article class="post post-tp-5">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('/styles/img/224x150/1.jpg') }}" height="150" width="224" alt="Spectr News Theme" class="adaptive" />
                                                </a>
                                            </figure>
                                            <h3 class="title-5"><a href="">Fusce ac orci sagittis mattis magna ultrices</a></h3>
                                            <div class="date-tp-2"><span>october 2, 2015</span></div>
                                        </article>
                                    </div>
                                    <div class="col-one-third">
                                        <article class="post post-tp-5">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('/styles/img/224x150/2.jpg') }}" height="150" width="224" alt="Spectr News Theme" class="adaptive" />
                                                </a>
                                            </figure>
                                            <h3 class="title-5"><a href="">Aliquam venenatis aliquet tortor non blandit</a></h3>
                                            <div class="date-tp-2"><span>october 2, 2015</span></div>
                                        </article>
                                    </div>
                                    <div class="col-one-third">
                                        <article class="post post-tp-5">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('/styles/img/224x150/3.jpg') }}" height="150" width="224" alt="Spectr News Theme" class="adaptive" />
                                                </a>
                                            </figure>
                                            <h3 class="title-5"><a href="">Fusce ac orci sagittis mattis magna ultrices</a></h3>
                                            <div class="date-tp-2"><span>october 2, 2015</span></div>
                                        </article>
                                    </div>
                                    <div class="col-one-third">
                                        <article class="post post-tp-5">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('/styles/img/224x150/2.jpg') }}" height="150" width="224" alt="Spectr News Theme" class="adaptive" />
                                                </a>
                                            </figure>
                                            <h3 class="title-5"><a href="">Aliquam venenatis aliquet tortor non blandit</a></h3>
                                            <div class="date-tp-2"><span>october 2, 2015</span></div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pst-block-foot">
                            <a href="">More editors posts</a>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="side-bar">
                <div class="pst-block">
                    <div class="pst-block-head">
                        <h2 class="title-4"><strong>Stay</strong> Connected</h2>
                    </div>
                    <div class="pst-block-main">
                        <div class="social-tp-1">
                            <ul class="social-list">
                                <li class="fb">
                                    <a href="">
                            <span class="soc-ic">
                                <i class="fa fa-facebook"></i>
                            </span> 1526 Fans
                                        <span class="soc-btn">Like It</span>
                                    </a>
                                </li>
                                <li class="tw">
                                    <a href="">
                            <span class="soc-ic">
                                <i class="fa fa-twitter"></i>
                            </span> 541 Followers
                                        <span class="soc-btn">Follow Us</span>
                                    </a>
                                </li>
                                <li class="gp">
                                    <a href="">
                            <span class="soc-ic">
                                <i class="fa fa-google-plus"></i>
                            </span> 421 Friends
                                        <span class="soc-btn">Follow Us</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sb-banner">
                    <div class="banner-inner">
                        <img src="{{ asset('/styles/img/sb-banner-img.jpg') }}" height="270" width="320" alt="Spectr News Theme" class="adaptive" />
                        <div class="banner-overlay">
                            <h5 class="title-11">The Best <br>Magazine &amp; Blog <br>Theme</h5>
                            <a href="" class="btn-2">buy it now</a>
                        </div>
                    </div>
                </div>
                <div class="recent-nws">
                    <div class="pst-block">
                        <div class="pst-block-head">
                            <h2 class="title-4"><strong>Recent</strong> News</h2>
                            <div class="all-sb">
                                <a href="">all news</a>
                            </div>
                        </div>
                        <div class="pst-block-main">
                            <div class="inner-filters">
                                <ul class="filters-list-3 js-tab-filter">
                                    <li><a href="" class="active" onclick="openTab('tab_news_all')">News</a></li>
                                    <li><a href="" onclick="openTab('tab_news_featured')">Featured</a></li>
                                    <li><a href="" onclick="openTab('tab_news_comments')">Comments</a></li>
                                </ul>
                            </div>
                            <hr class="pst-block-hr" />
                            <div id="tab_news_all" class="tab_item js-csp-block js-tab-slider">
                                <div>
                                    <article class="post post-tp-9">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/9.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Duis eu arcu sit amet ante tristique</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-9">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/10.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Vivamus auctor quam nec mauris commodo</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-9">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/11.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Nam ut metus elementum pharetra diam sed</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post post-tp-9">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/11.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Vivamus auctor quam nec mauris commodo</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-9">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/8.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Duis eu arcu sit amet ante tristique</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-9">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/9.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Nam ut metus elementum pharetra diam sed</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                </div>
                            </div>
                            <div id="tab_news_featured" class="tab_item js-csp-block js-tab-slider">
                                <div>
                                    <article class="post post-tp-9">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/2.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Vivamus auctor quam nec mauris commodo</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-9">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/3.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Duis eu arcu sit amet ante tristique</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-9">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/4.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Nam ut metus elementum pharetra diam sed</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                </div>
                            </div>
                            <div id="tab_news_comments" class="tab_item js-csp-block">
                                <div>
                                    <article class="post post-tp-9">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/5.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Vivamus auctor quam nec mauris commodo</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-9">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/6.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Duis eu arcu sit amet ante tristique</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                    <article class="post post-tp-9">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/115x85/7.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                            </a>
                                        </figure>
                                        <h3 class="title-6"><a href="">Nam ut metus elementum pharetra diam sed</a></h3>
                                        <div class="date-tp-2">october 2, 2015</div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div id="tab_news_all_nav" class="tab_item_nav pst-block-foot">
                            <div class="js-sbr-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="sbsb-block-1">
                    <h4 class="title-8"><strong>Subscribe</strong> to Spectr</h4>
                    <div class="sbsb-form-1">
                        <div class="sbsb-form">
                            <div class="sbsb-input">
                                <span class="sbsb-icon"><i class="li_mail"></i></span>
                                <input type="email" placeholder="E-mail">
                            </div>
                            <div class="sbsb-btn">
                                <button>subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sbr-slider">
                    <div class="pst-block">
                        <div class="pst-block-head">
                            <h2 class="title-4"><strong>Sidebar</strong> Slider</h2>
                        </div>
                        <div class="pst-block-main">
                            <div class="sidebar-slider">
                                <div class="js-sbr-slider">
                                    <div class="item">
                                        <article class="post post-tp-10">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('/styles/img/360x231/1.jpg') }}" alt="Spectr News Theme" class="adaptive" height="231" width="360">
                                                </a>
                                                <a href="" class="category-tp-1">Home</a>
                                            </figure>
                                            <div class="ptp-10-data">
                                                <h3 class="title-5"><a href="">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                                <p class="p">Sed ut perspiciatis unde omnis iste natus sit volupta tem accusantium doloremque laudantium</p>
                                                <div class="meta-tp-2">
                                                    <div class="date"><span>october 2, 2015</span></div>
                                                    <div class="category">
                                                        <a href=""><i class="li_pen"></i><span>business</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="item">
                                        <article class="post post-tp-10">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('/styles/img/360x231/2.jpg') }}" alt="Spectr News Theme" class="adaptive" height="231" width="360">
                                                </a>
                                                <a href="" class="category-tp-1">Home</a>
                                            </figure>
                                            <div class="ptp-10-data">
                                                <h3 class="title-5"><a href="">Mauris porta quam a lorem rhoncus fringilla</a></h3>
                                                <p class="p">Sed ut perspiciatis unde omnis iste natus sit volupta tem accusantium doloremque laudantium</p>
                                                <div class="meta-tp-2">
                                                    <div class="date"><span>october 2, 2015</span></div>
                                                    <div class="category">
                                                        <a href=""><i class="li_pen"></i><span>business</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="item">
                                        <article class="post post-tp-10">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('/styles/img/360x231/3.jpg') }}" alt="Spectr News Theme" class="adaptive" height="231" width="360">
                                                </a>
                                                <a href="" class="category-tp-1">Home</a>
                                            </figure>
                                            <div class="ptp-10-data">
                                                <h3 class="title-5"><a href="">Aliquam venenatis aliquet tortor non blandit</a></h3>
                                                <p class="p">Sed ut perspiciatis unde omnis iste natus sit volupta tem accusantium doloremque laudantium</p>
                                                <div class="meta-tp-2">
                                                    <div class="date"><span>october 2, 2015</span></div>
                                                    <div class="category">
                                                        <a href=""><i class="li_pen"></i><span>business</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="sbr-navs js-sbr-navs"></div>
                            </div>
                        </div>
                        <div class="pst-block-foot">
                            <div class="js-sbr-pagination"></div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
    <div class="main-video-posts">
        <div class="video-posts-pane">
            <div class="vpst-block">
                <div class="vpst-block-head">
                    <h2 class="title-4"><strong>Featured</strong> Video</h2>
                    <div class="filters">
                        <ul class="filters-list-1 xs-hide">
                            <li><a href="" class="active">all</a></li>
                            <li><a href="">business</a></li>
                            <li><a href="">gadgets</a></li>
                            <li><a href="">design</a></li>
                            <li><a href="">fachion</a></li>
                            <li><a href="">video</a></li>
                        </ul>
                        <div class="filters-more">
                            <div class="filters-btn js-fl-btn">
                                <i class="li_settings"></i>
                                <div class="filters-drop js-fl-block">
                                    <i class="arr"></i>
                                    <ul>
                                        <li><a href="">Latest</a></li>
                                        <li><a href="" class="active">Popular</a></li>
                                        <li><a href="">Recent</a></li>
                                        <li><a href="">Most comment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vpst-block-main">
                    <div class="js-video-pst-slider">
                        <div class="vps-item">
                            <div class="half sm-full mb-pt-hide">
                                <article class="post post-tpv-1">
                                    <figure>
                                        <a href=""><img src="{{ asset('/styles/img/570x430/1.jpg') }}" height="430" width="570" alt="Spectr News Theme" class="adaptive" /></a>
                                    </figure>
                                    <div class="ptp-1-overlay">
                                        <span class="arr-left-light-lg-ic video-lg-ic"><i></i></span>
                                        <div class="ptp-1-data">
                                            <a href="" class="category-tp-1">video</a>
                                            <h2 class="title-7"><a href="#1">Ut arcu odio sollicitud a lobo is vitae scelerisque</a></h2>
                                            <div class="meta-tp-1">
                                                <div class="ptp-1-date"><a href="">october 2, 2015</a></div>
                                                <div class="ptp-1-views"><a href=""><i class="li_eye"></i><span>187</span></a></div>
                                                <div class="ptp-1-comments"><a href=""><i class="li_bubble"></i><span>5</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="half sm-full">
                                <div class="half">
                                    <article class="post post-tpv-2">
                                        <figure>
                                            <a href=""><img src="{{ asset('/styles/img/285x215/1.jpg') }}" height="215" width="285" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <div class="ptp-1-overlay">
                                            <div class="ptp-1-data">
                                                <span class="arr-left-light-sm-ic video-sm-ic"><i></i></span>
                                                <h2 class="title-5"><a href="#1">Ut arcu odio sollicitud a lobo is vitae scelerisque</a></h2>
                                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="half">
                                    <article class="post post-tpv-2">
                                        <figure>
                                            <a href=""><img src="{{ asset('/styles/img/285x215/2.jpg') }}" height="215" width="285" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <div class="ptp-1-overlay">
                                            <div class="ptp-1-data">
                                                <span class="arr-left-light-sm-ic video-sm-ic"><i></i></span>
                                                <h2 class="title-5"><a href="#1">Voluptatem accusantium dolore mque laudan</a></h2>
                                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="half">
                                    <article class="post post-tpv-2">
                                        <figure>
                                            <a href=""><img src="{{ asset('/styles/img/285x215/3.jpg') }}" height="215" width="285" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <div class="ptp-1-overlay">
                                            <div class="ptp-1-data">
                                                <span class="arr-left-light-sm-ic video-sm-ic"><i></i></span>
                                                <h2 class="title-5"><a href="#1">Inventore veritatis et quasi architecto beatae</a></h2>
                                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="half">
                                    <article class="post post-tpv-2">
                                        <figure>
                                            <a href=""><img src="{{ asset('/styles/img/285x215/4.jpg') }}" height="215" width="285" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <div class="ptp-1-overlay">
                                            <div class="ptp-1-data">
                                                <span class="arr-left-light-sm-ic video-sm-ic"><i></i></span>
                                                <h2 class="title-5"><a href="#1">Eaque ipsa quae ab illo inventore veritatis</a></h2>
                                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="vps-item">
                            <div class="half sm-full mb-pt-hide">
                                <article class="post post-tpv-1">
                                    <figure>
                                        <a href=""><img src="{{ asset('/styles/img/570x430/1.jpg') }}" height="430" width="570" alt="Spectr News Theme" class="adaptive" /></a>
                                    </figure>
                                    <div class="ptp-1-overlay">
                                        <span class="arr-left-light-lg-ic video-lg-ic"><i></i></span>
                                        <div class="ptp-1-data">
                                            <a href="" class="category-tp-1">video</a>
                                            <h2 class="title-7"><a href="#1">Ut arcu odio sollicitud a lobo is vitae scelerisque</a></h2>
                                            <div class="meta-tp-1">
                                                <div class="ptp-1-date"><a href="">october 2, 2015</a></div>
                                                <div class="ptp-1-views"><a href=""><i class="li_eye"></i><span>187</span></a></div>
                                                <div class="ptp-1-comments"><a href=""><i class="li_bubble"></i><span>5</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="half sm-full">
                                <div class="half">
                                    <article class="post post-tpv-2">
                                        <figure>
                                            <a href=""><img src="{{ asset('/styles/img/285x215/1.jpg') }}" height="215" width="285" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <div class="ptp-1-overlay">
                                            <div class="ptp-1-data">
                                                <span class="arr-left-light-sm-ic video-sm-ic"><i></i></span>
                                                <h2 class="title-5"><a href="#1">Ut arcu odio sollicitud a lobo is vitae scelerisque</a></h2>
                                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="half">
                                    <article class="post post-tpv-2">
                                        <figure>
                                            <a href=""><img src="{{ asset('/styles/img/285x215/2.jpg') }}" height="215" width="285" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <div class="ptp-1-overlay">
                                            <div class="ptp-1-data">
                                                <span class="arr-left-light-sm-ic video-sm-ic"><i></i></span>
                                                <h2 class="title-5"><a href="#1">Voluptatem accusantium dolore mque laudan</a></h2>
                                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="half">
                                    <article class="post post-tpv-2">
                                        <figure>
                                            <a href=""><img src="{{ asset('/styles/img/285x215/3.jpg') }}" height="215" width="285" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <div class="ptp-1-overlay">
                                            <div class="ptp-1-data">
                                                <span class="arr-left-light-sm-ic video-sm-ic"><i></i></span>
                                                <h2 class="title-5"><a href="#1">Inventore veritatis et quasi architecto beatae</a></h2>
                                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="half">
                                    <article class="post post-tpv-2">
                                        <figure>
                                            <a href=""><img src="{{ asset('/styles/img/285x215/4.jpg') }}" height="215" width="285" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <div class="ptp-1-overlay">
                                            <div class="ptp-1-data">
                                                <span class="arr-left-light-sm-ic video-sm-ic"><i></i></span>
                                                <h2 class="title-5"><a href="#1">Eaque ipsa quae ab illo inventore veritatis</a></h2>
                                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vpst-block-foot">
                    <a href="">More video posts</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="content">
                <div class="latest-blg">
                    <div class="pst-block spst-slider">
                        <div class="pst-block-head">
                            <h2 class="title-4"><strong>Latest </strong> Blogs</h2>
                            <div class="filters">
                                <div class="post-navs js-pst-navs">
                                    <a href="" class="prev pst-prev">
                                        <span class="arr-left-dark-ic"><i></i></span>
                                    </a>
                                    <a href="" class="next pst-next">
                                        <span class="arr-right-dark-ic"><i></i></span>
                                    </a>
                                </div>
                                <div class="filters-more">
                                    <div class="filters-btn js-fl-btn">
                                        <i class="li_settings"></i>
                                        <div class="filters-drop js-fl-block">
                                            <i class="arr"></i>
                                            <ul>
                                                <li><a href="">Latest</a></li>
                                                <li><a href="" class="active">Popular</a></li>
                                                <li><a href="">Recent</a></li>
                                                <li><a href="">Most comment</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pst-block-main">
                            <div class="col-row">
                                <div class="js-pst-block" data-items="2">
                                    <div class="col-half">
                                        <article class="post post-tp-7">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('/styles/img/68x80/1.jpg') }}" height="80" width="68" alt="Spectr News Theme">
                                                </a>
                                            </figure>
                                            <div class="date-tp-2"><span>october 2, 2015</span></div>
                                            <h3 class="title-5"><a href="">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                            <p class="p">Sed ut perspiciatis unde omnis iste natus sit volupta tem accusantium doloremque laudantiu</p>
                                            <div class="author-tp-1">
                                                <i class="li_user"></i>John Smith
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-half">
                                        <article class="post post-tp-7">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('/styles/img/68x80/2.jpg') }}" height="80" width="68" alt="Spectr News Theme">
                                                </a>
                                            </figure>
                                            <div class="date-tp-2"><span>october 2, 2015</span></div>
                                            <h3 class="title-5"><a href="">Aliquam venenatis aliquet tortor non blandit sapien aliq</a></h3>
                                            <p class="p">Sed ut perspiciatis unde omnis iste natus sit volupta tem accusantium doloremque laudantiu</p>
                                            <div class="author-tp-1">
                                                <i class="li_user"></i>Roman Polyarush
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-half">
                                        <article class="post post-tp-7">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('/styles/img/68x80/2.jpg') }}" height="80" width="68" alt="Spectr News Theme">
                                                </a>
                                            </figure>
                                            <div class="date-tp-2"><span>october 2, 2015</span></div>
                                            <h3 class="title-5"><a href="">Aliquam venenatis aliquet tortor non blandit sapien aliq</a></h3>
                                            <p class="p">Sed ut perspiciatis unde omnis iste natus sit volupta tem accusantium doloremque laudantiu</p>
                                            <div class="author-tp-1">
                                                <i class="li_user"></i>Roman Polyarush
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pst-block-foot">
                            <a href="">More blog posts</a>
                        </div>
                    </div>
                </div>
                <div class="latest-nws">
                    <div class="pst-block">
                        <div class="pst-block-head">
                            <h2 class="title-4"><strong>Latest </strong> News</h2>
                            <div class="filters">
                                <ul class="filters-list-1 xs-hide">
                                    <li><a href="" class="active">all</a></li>
                                    <li><a href="">business</a></li>
                                    <li><a href="">gadgets</a></li>
                                    <li><a href="">design</a></li>
                                    <li><a href="">fachion</a></li>
                                    <li><a href="">video</a></li>
                                </ul>
                                <div class="filters-more">
                                    <div class="filters-btn js-fl-btn">
                                        <i class="li_settings"></i>
                                        <div class="filters-drop js-fl-block">
                                            <i class="arr"></i>
                                            <ul>
                                                <li><a href="">Latest</a></li>
                                                <li><a href="" class="active">Popular</a></li>
                                                <li><a href="">Recent</a></li>
                                                <li><a href="">Most comment</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pst-block-main">
                            <div class="col-row">
                                <div class="col-half">
                                    <article class="post post-tp-8">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/345x242/4.jpg') }}" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                            <div class="ptp-8-overlay">
                                                <div class="ptp-8-data">
                                                    <a href="">
                                                        <i class="li_eye"></i>187
                                                    </a>
                                                    <a href="">
                                                        <i class="li_bubble"></i>187
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                        <h3 class="title-5"><a href="">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                        <div class="meta-tp-2">
                                            <div class="date"><span>october 2, 2015</span></div>
                                            <div class="category">
                                                <a href=""><i class="li_pen"></i><span>business</span></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-half">
                                    <article class="post post-tp-8">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/345x242/5.jpg') }}" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                            <div class="ptp-8-overlay">
                                                <div class="ptp-8-data">
                                                    <a href="">
                                                        <i class="li_eye"></i>187
                                                    </a>
                                                    <a href="">
                                                        <i class="li_bubble"></i>187
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                        <h3 class="title-5"><a href="">Dapibus eu tempor ut, efficitur id nisi am ornare magna</a></h3>
                                        <div class="meta-tp-2">
                                            <div class="date"><span>october 2, 2015</span></div>
                                            <div class="category">
                                                <a href=""><i class="li_pen"></i><span>business</span></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-half">
                                    <article class="post post-tp-8">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/345x242/6.jpg') }}" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                            <div class="ptp-8-overlay">
                                                <div class="ptp-8-data">
                                                    <a href="">
                                                        <i class="li_eye"></i>187
                                                    </a>
                                                    <a href="">
                                                        <i class="li_bubble"></i>187
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                        <h3 class="title-5"><a href="">Phasellus at egestas elit ut facilisis diam estibulum</a></h3>
                                        <div class="meta-tp-2">
                                            <div class="date"><span>october 2, 2015</span></div>
                                            <div class="category">
                                                <a href=""><i class="li_pen"></i><span>business</span></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-half">
                                    <article class="post post-tp-8">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/345x242/7.jpg') }}" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                            <div class="ptp-8-overlay">
                                                <div class="ptp-8-data">
                                                    <a href="">
                                                        <i class="li_eye"></i>187
                                                    </a>
                                                    <a href="">
                                                        <i class="li_bubble"></i>187
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                        <h3 class="title-5"><a href="">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                        <div class="meta-tp-2">
                                            <div class="date"><span>october 2, 2015</span></div>
                                            <div class="category">
                                                <a href=""><i class="li_pen"></i><span>business</span></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-half">
                                    <article class="post post-tp-8">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/345x242/8.jpg') }}" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                                <span class="reviews-rate"><span>5,0</span></span>
                                            </a>
                                            <div class="ptp-8-overlay">
                                                <div class="ptp-8-data">
                                                    <a href="">
                                                        <i class="li_eye"></i>187
                                                    </a>
                                                    <a href="">
                                                        <i class="li_bubble"></i>187
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                        <h3 class="title-5"><a href="">Nulla semper metus quis erat gravida cursus met quis</a></h3>
                                        <div class="meta-tp-2">
                                            <div class="date"><span>october 2, 2015</span></div>
                                            <div class="category">
                                                <a href=""><i class="li_pen"></i><span>business</span></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-half">
                                    <article class="post post-tp-8">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/345x242/9.jpg') }}" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                            <div class="ptp-8-overlay">
                                                <div class="ptp-8-data">
                                                    <a href="">
                                                        <i class="li_eye"></i>187
                                                    </a>
                                                    <a href="">
                                                        <i class="li_bubble"></i>187
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                        <h3 class="title-5"><a href="">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                        <div class="meta-tp-2">
                                            <div class="date"><span>october 2, 2015</span></div>
                                            <div class="category">
                                                <a href=""><i class="li_pen"></i><span>business</span></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-half">
                                    <article class="post post-tp-8">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/345x242/10.jpg') }}" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                            <div class="ptp-8-overlay">
                                                <div class="ptp-8-data">
                                                    <a href="">
                                                        <i class="li_eye"></i>187
                                                    </a>
                                                    <a href="">
                                                        <i class="li_bubble"></i>187
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                        <h3 class="title-5"><a href="">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                        <div class="meta-tp-2">
                                            <div class="date"><span>october 2, 2015</span></div>
                                            <div class="category">
                                                <a href=""><i class="li_pen"></i><span>business</span></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-half">
                                    <article class="post post-tp-8">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('/styles/img/345x242/11.jpg') }}" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                            </a>
                                            <div class="ptp-8-overlay">
                                                <div class="ptp-8-data">
                                                    <a href="">
                                                        <i class="li_eye"></i>187
                                                    </a>
                                                    <a href="">
                                                        <i class="li_bubble"></i>187
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                        <h3 class="title-5"><a href="">Vitae lacus a arcu dignissim iaculis sed quis orci hasellus</a></h3>
                                        <div class="meta-tp-2">
                                            <div class="date"><span>october 2, 2015</span></div>
                                            <div class="category">
                                                <a href=""><i class="li_pen"></i><span>business</span></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <!-- Page nav -->
                            <div class="page-nav">
                                <a href="" class="pn-item">
                                    <i class="page-nav-prev-ic"></i>
                                </a>
                                <a href="" class="pn-item mb-pt-hide">1</a>
                                <a href="" class="pn-item current mb-pt-hide">2</a>
                                <a href="" class="pn-item mb-pt-hide">3</a>
                                <span class="extend mb-pt-hide">...</span>
                                <a href="" class="pn-item mb-pt-hide">7</a>
                                <a href="" class="pn-item">
                                    <i class="page-nav-next-ic"></i>
                                </a>
                                <span class="page-count">Page 1 of 7</span>
                            </div>
                            <!-- Page nav END -->
                        </div>
                    </div>
                </div>
            </div>
            <aside class="side-bar">
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
                                    <li><a href="">Apple</a></li>
                                    <li><a href="">news</a></li>
                                    <li><a href="">clear</a></li>
                                    <li><a href="">design</a></li>
                                    <li><a href="">magazine</a></li>
                                    <li><a href="">life styles</a></li>
                                    <li><a href="">ui/ux</a></li>
                                    <li><a href="">popular</a></li>
                                    <li><a href="">fashion</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ltst-reviews">
                    <div class="pst-block">
                        <div class="pst-block-head">
                            <h2 class="title-4"><strong>Latest</strong> Reviews</h2>
                            <div class="all-sb">
                                <a href="">all tags</a>
                            </div>
                        </div>
                        <div class="pst-block-main">
                            <div class="js-csp-block">
                                <div>
                                    <figure class="full-img">
                                        <a href="">
                                            <img src="{{ asset('/styles/img/360x245/1.jpg') }}" alt="Spectr News Theme" class="adaptive" height="245" width="360">
                                        </a>
                                        <a href="" class="category-tp-3">reviews</a>
                                    </figure>
                                    <div class="post-wrap">
                                        <article class="post post-tp-11">
                                            <h3 class="title-10"><a href="">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                            <div class="meta-tp-2">
                                                <div class="date"><span>october 2, 2015</span></div>
                                                <div class="rate-tp-1">
                                                    <ul>
                                                        <li>
                                                            <a href="">
                                                                <i class="li_star"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <i class="li_star"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <i class="li_star"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <i class="li_star"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <i class="li_star"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="p">Sed ut perspiciatis unde omnis iste natus sit volupt atem accusantium doloremque laudantium</p>
                                        </article>
                                        <article class="post post-tp-6">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('/styles/img/115x85/12.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                                </a>
                                            </figure>
                                            <h3 class="title-6"><a href="">Duis eu arcu sit amet ante tristique</a></h3>
                                            <div class="rate-tp-1">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                        <article class="post post-tp-6">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('/styles/img/115x85/13.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                                </a>
                                            </figure>
                                            <h3 class="title-6"><a href="">Nam ut metus element pharetra diam sed</a></h3>
                                            <div class="rate-tp-1">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div>
                                    <figure class="full-img">
                                        <a href="">
                                            <img src="{{ asset('/styles/img/360x245/1.jpg') }}" alt="Spectr News Theme" class="adaptive" height="245" width="360">
                                        </a>
                                        <a href="" class="category-tp-3">reviews</a>
                                    </figure>
                                    <div class="post-wrap">
                                        <article class="post post-tp-11">
                                            <h3 class="title-10"><a href="">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                            <div class="meta-tp-2">
                                                <div class="date"><span>october 2, 2015</span></div>
                                                <div class="rate-tp-1">
                                                    <ul>
                                                        <li>
                                                            <a href="">
                                                                <i class="li_star"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <i class="li_star"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <i class="li_star"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <i class="li_star"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <i class="li_star"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="p">Sed ut perspiciatis unde omnis iste natus sit volupt atem accusantium doloremque laudantium</p>
                                        </article>
                                        <article class="post post-tp-6">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('/styles/img/115x85/12.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                                </a>
                                            </figure>
                                            <h3 class="title-6"><a href="">Duis eu arcu sit amet ante tristique</a></h3>
                                            <div class="rate-tp-1">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                        <article class="post post-tp-6">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('/styles/img/115x85/13.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                                </a>
                                            </figure>
                                            <h3 class="title-6"><a href="">Nam ut metus element pharetra diam sed</a></h3>
                                            <div class="rate-tp-1">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="li_star"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pst-block-foot">
                            <div class="js-sbr-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="poling-widget">
                    <div class="pst-block">
                        <div class="pst-block-head">
                            <h2 class="title-4"><strong>Poling</strong></h2>
                        </div>
                        <div class="pst-block-main">
                            <div class="poling-block">
                                <h5 class="title-9">What you favorite film on 2015 year</h5>
                                <ul class="poling-list">
                                    <li>
                                        <input class="radio" type="radio" name="film" id="test1" />
                                        <label class="rd-label" for="test1">Avatar</label>
                                    </li>
                                    <li>
                                        <input class="radio" type="radio" name="film" id="test2" />
                                        <label class="rd-label" for="test2">Man of Steel</label>
                                    </li>
                                    <li>
                                        <input class="radio" type="radio" name="film" id="test3" />
                                        <label class="rd-label" for="test3">Lone Survior</label>
                                    </li>
                                </ul>
                                <button class="btn-1">Submit!</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="twitter-widget">
                    <div class="pst-block">
                        <div class="pst-block-head">
                            <h2 class="title-4"><strong>Twitter</strong></h2>
                            <div class="info-tp-1">
                                <a href=""><span>@weblionmedia</span></a>
                                <a href=""><span class="follow">Follow us</span></a>
                            </div>
                        </div>
                        <div class="pst-block-main">
                            <div class="twitter-posts">
                                <ul class="post-list">
                                    <li>
                                        <i class="fa fa-twitter"></i>
                                        <p class="p">Sed ut perspiciatis <a href="">@weblionmedia</a> unde omnis iste natus sit voluptatem accusantium doloremque laudantiu <a href="">#news</a> <a href="">#video</a> <a href="">#life</a></p>
                                        <div class="date">2 min ago</div>
                                    </li>
                                    <li>
                                        <i class="fa fa-twitter"></i>
                                        <p class="p">Sed ut perspiciatis <a href="">@weblionmedia</a> unde omnis iste natus sit voluptatem accusantium doloremque laudantiu <a href="">#news</a> <a href="">#video</a> <a href="">#life</a></p>
                                        <div class="date">2 min ago</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="weather-widget">
                    <div class="pst-block">
                        <div class="pst-block-head">
                            <h2 class="title-4"><strong><i class="li_location"></i> Vienna</strong></h2>
                            <a href="" class="arr-ic-3"><i class="fa fa-angle-down"></i></a>
                        </div>
                        <div class="pst-block-main">
                            <div class="weather-block">
                                <div class="temperature">
                                    <i class="weather-icon-clouds-flash-alt"></i>
                                    <span class="degrees-1">24<i class="degrees-ic-1"></i></span>
                                    <div class="day">wednesday</div>
                                </div>
                                <ul>
                                    <li>Rain</li>
                                    <li>humidity: 55%</li>
                                    <li>wind: 3km/h NW</li>
                                    <li>H 26 • L 26</li>
                                </ul>
                            </div>
                            <hr class="pst-block-hr">
                            <div class="weather-days">
                                <ul class="weather-days-list">
                                    <li>
                                        <a href="">
                                            <span class="degrees-2">27<i class="degrees-ic-2"></i></span>
                                            <div class="day">thusday</div>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="">
                                            <span class="degrees-2">25<i class="degrees-ic-2"></i></span>
                                            <div class="day">friday</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="degrees-2">26<i class="degrees-ic-2"></i></span>
                                            <div class="day">satuday</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="degrees-2">27<i class="degrees-ic-2"></i></span>
                                            <div class="day">sunday</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="degrees-2">23<i class="degrees-ic-2"></i></span>
                                            <div class="day">monday</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
@endsection