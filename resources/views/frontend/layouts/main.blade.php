<!DOCTYPE html>
<html lang="en">
    @section('htmlheader')
        @include('frontend.partials.htmlheader')
    @show
    <body>
        {{--<div class="page-loader">--}}
            {{--<div class="loader">--}}
                {{--<div class="flipper">--}}
                    {{--<div class="front"></div>--}}
                    {{--<div class="back"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="main-wrapper">
            @include('frontend.partials.header')
            <div class="inner-wrapper @if (!empty($leftMenu['leftMenu'])) without-left-menu @endif">
                @if (!empty($leftMenu['leftMenu']))
                    @include('frontend.partials.left-sticky-bar')
                @endif
                <div class="main">
                    <!-- Main content -->
                    <div class="main-content">
                    <!-- Your Page Content Here -->
                        @yield('main-content')
                    </div>
                    <!-- /.content -->
                    @include('frontend.partials.footer-main')
                </div>
            </div>
        </div>
        @include('frontend.partials.footer-scripts')
    </body>
</html>