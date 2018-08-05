<head>
    <title>
        @if (!empty($header['header_title']))
            {!! $header['header_title'] !!}
        @else
            No Title For This Page
        @endif
    </title>
    @if (!empty($header['header_meta_tags']))
        {!! $header['header_meta_tags'] !!}
    @endif

    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('/') }}/styles/img/favicon/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('/') }}/styles/img/favicon/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('/') }}/styles/img/favicon/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/') }}/styles/img/favicon/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('/') }}/styles/img/favicon/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('/') }}/styles/img/favicon/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('/') }}/styles/img/favicon/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('/') }}/styles/img/favicon/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/') }}/styles/img/favicon/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ url('/') }}/styles/img/favicon/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/') }}/styles/img/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('/') }}/styles/img/favicon/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/') }}/styles/img/favicon/favicon-16x16.png" />
    <link rel="manifest" href="{{ url('/') }}/styles/img/favicon/manifest.json" />
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic%7CInconsolata:400,700%7CMontserrat:400,700' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ url('/') }}/styles/css/font-awesome.css" />
    <link rel="stylesheet" href="{{ url('/') }}/styles/css/linecons.css" />
    <link rel="stylesheet" href="{{ url('/') }}/styles/css/fontello.css" />


    <link rel="stylesheet" href="{{ url('/') }}/styles/css/jquery-ui.css" />
    <link rel="stylesheet" href="{{ url('/') }}/styles/css/jquery-ui.structure.css" />
    <link rel="stylesheet" href="{{ url('/') }}/styles/vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="{{ url('/') }}/styles/vendor/owl-carousel/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="{{ url('/') }}/styles/vendor/owl-carousel/owl-carousel/owl.transitions.css" />
    <link rel="stylesheet" href="{{ url('/') }}/styles/vendor/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="{{ url('/') }}/styles/vendor/Swiper/dist/css/swiper.css" />
    <link rel="stylesheet" href="{{ url('/') }}/styles/vendor/magnific-popup/dist/magnific-popup.css" />

    <link rel="stylesheet" href="{{ url('/') }}/styles/css/main.css" />
    @if (!empty($scripts['google_analytics']))
        <!-- Google Analytics -->
        <script>
            //todo add real analytics code
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                e.src='//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));

            ga('create','UA-44120322-1');
        </script>
    @endif
</head>