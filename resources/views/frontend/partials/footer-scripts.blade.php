<a href="" class="go-top animated js-go-top"><i class="fa fa-angle-up"></i></a>

<!-- Search block popup -->
<div id="search-block" class="pp-search-block mfp-hide">
    <div class="search">
        <div class="search-btn">
            <button><i class="li_search"></i></button>
        </div>
        <div class="search-input">
            <input type="search" placeholder="Search">
        </div>
    </div>
</div>

<!-- Login popup -->
<div id="login" class="sp-popup login mfp-hide">
    <div class="btns">
        <a href="#signin" class="js-popups">Registration</a>
        <a href="#login" class="active js-popups">Login</a>
    </div>
    <div class="social">
        <div>Sign in with social account</div>
        <ul class="pp-social-list">
            <li class="tw">
                <a href=""><i class="fa fa-twitter"></i></a></li>
            <li class="fb">
                <a href=""><i class="fa fa-facebook"></i></a></li>
            <li class="gp">
                <a href=""><i class="fa fa-google-plus"></i></a></li>
            <li class="vk">
                <a href=""><i class="fa fa-vk"></i></a></li>
        </ul>
    </div>
    <div class="pp-title"><span>or</span></div>
    <div class="form">
        <input type="text" placeholder="Username">
        <input type="password" placeholder="Password">
        <button class="btn-8">login</button>
        <a href="#recentpass" class="js-popups">Lost your Password?</a>
    </div>
</div>

<!-- Sign in popup -->
<div id="signin" class="sp-popup signin mfp-hide">
    <div class="btns">
        <a href="#signin" class="active js-popups">Registration</a>
        <a href="#login" class="js-popups">Login</a>
    </div>
    <div class="social">
        <div>Sign in with social account</div>
        <ul class="pp-social-list">
            <li class="tw">
                <a href=""><i class="fa fa-twitter"></i></a></li>
            <li class="fb">
                <a href=""><i class="fa fa-facebook"></i></a></li>
            <li class="gp">
                <a href=""><i class="fa fa-google-plus"></i></a></li>
            <li class="vk">
                <a href=""><i class="fa fa-vk"></i></a></li>
        </ul>
    </div>
    <div class="pp-title"><span>or</span></div>
    <div class="form not-valid">
        <input type="text" placeholder="Username">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <button class="btn-8">Registration</button>
        <span>A password will be send on your post</span>
    </div>
</div>

<!-- Recent pass popup -->
<div id="recentpass" class="sp-popup recentpass mfp-hide">
    <div class="btns">
        <a href="#signin" class="js-popups">Registration</a>
        <a href="#login" class="active js-popups">Login</a>
    </div>
    <div class="form">
        <input type="email" placeholder="Enter Your Email Adress">
        <button class="btn-8">Get new password</button>
        <a href="#signin" class="js-popups"><i class="popup-arr-left-ic"></i> Registration</a>
    </div>
</div>

<!-- Mobile menu -->
<div id="mb-menu" class="mb-menu mfp-hide">
    <div class="container">
        <nav class="mobile-nav">
            <ul class="mobile-nav-list">
                <li class="mn-item"><a href="index.html">news</a></li>
                <li class="mn-item"><a href="javascript:void(0)">features</a></li>
                <li class="mn-item"><a href="category_style_three.html">design</a></li>
                <li class="mn-item"><a href="category_style_four.html">life style</a></li>
                <li class="mn-item"><a href="video.html">video</a></li>
                <li class="mn-item"><a href="reviews_stars_style.html">reviews</a></li>
                <li class="mn-item"><a href="products.html">shop</a></li>
                <li class="mn-item"><a href="contact_page_style_1.html">contacts</a></li>
            </ul>
        </nav>
    </div>
</div>

@if (!empty($burgerMenu['burgerMenu']))
    <!-- Aside menu -->
    <div id="aside-menu" class="aside-menu mfp-hide">
        <div class="am-container">
            <nav class="am-menu">
                <ul class="am-list">
                    <li class="am-item">
                        <a href="index.html">news</a>
                    </li>
                    <li class="am-item">
                        <a href="javascript:void(0)">FEATURES</a>
                    </li>
                    <li class="am-item">
                        <a href="category_style_three.html">design</a>
                    </li>
                    <li class="am-item">
                        <a href="category_style_four.html">life style</a>
                    </li>
                    <li class="am-item">
                        <a href="video.html">video</a>
                    </li>
                    <li class="am-item">
                        <a href="reviews_stars_style.html">reviews</a>
                    </li>
                    <li class="am-item">
                        <a href="products.html">shop</a>
                    </li>
                    <li class="am-item">
                        <a href="contact_page_style_1.html">Contacts</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="am-container">
            <div class="twitter-posts">
                <ul class="tp-list">
                    <li class="tp-list-item">
                        <div class="icon"><i class="fa fa-twitter"></i></div>
                        Show your web design in a web browser! Check out new awesome tool <a href="">http://www.symu.co  https://www.symu.co</a> 
                    </li>
                    <li class="tp-list-item">
                        <div class="icon"><i class="fa fa-twitter"></i></div>
                        Show your web design in a web browser! Check out new awesome tool <a href="">http://www.symu.co  https://www.symu.co</a> 
                    </li>
                </ul>
                <a href="" class="tp-all">View All Tweets</a>
            </div>
        </div>
    </div>
@endif
<!-- Google maps API -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=true&amp;v=3"></script>

<!-- Vendor -->
<script src="{{ asset('/styles/vendor/jquery/dist/jquery.js') }}"></script>
<script src="{{ asset('/styles/js/jquery-ui.js') }}"></script>
<script src="{{ asset('/styles/vendor/waypoints/lib/jquery.waypoints.js') }}"></script>
<script src="{{ asset('/styles/vendor/superfish/dist/js/superfish.js') }}"></script>
<script src="{{ asset('/styles/vendor/magnific-popup/dist/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('/styles/vendor/imagesloaded/imagesloaded.pkgd.js') }}"></script>
<script src="{{ asset('/styles/vendor/owl-carousel/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('/styles/vendor/slick-carousel/slick/slick.js') }}"></script>
<script src="{{ asset('/styles/vendor/Swiper/dist/js/swiper.jquery.js') }}"></script>
<script src="{{ asset('/styles/vendor/sticky-kit/jquery.sticky-kit.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('/styles/js/main.js') }}"></script>
