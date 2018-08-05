<!DOCTYPE html>
<html lang="en">
@section('htmlheader')
    @include('frontend.partials.htmlheader')
@show
<body>
<div class="main-wrapper">
    @include('frontend.partials.header')
    <div class="inner-wrapper">
        @include('frontend.partials.left-sticky-bar')
        <div class="main">
            <!-- Main content -->
            <div class="main-content">
                <div class="section">
                    <div class="page-404 text-center">
                        <div class="large-404">404</div>
                        <h2>Nothing Found</h2>
                        <p>Sorry, but the page you are looking not found.</p>
                        <div class="search-form-2 block-center">
                            <div class="src-form">
                                <div class="src-input">
                                    <input type="email" placeholder="Search">
                                </div>
                                <div class="src-btn">
                                    <button><i class="li_search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
            @include('frontend.partials.footer-main')
        </div>
    </div>
</div>
@include('frontend.partials.footer-scripts')
</body>
</html>