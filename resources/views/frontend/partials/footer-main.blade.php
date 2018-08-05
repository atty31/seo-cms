<footer class="main-footer">
    <!-- Enable/Disable footer -->
    @if (!empty( $footer['enableFooter'] ))
        <div class="container">
            <div class="top-part">
                <div class="row">
                    @if ( $footer['footerType'] == 3 ) <!-- Check footer type -->
                        @include('frontend.partials.footer.3columns.footer-left')
                        @include('frontend.partials.footer.3columns.footer-center')
                        @include('frontend.partials.footer.3columns.footer-right')
                    @elseif ($footer['footerType'] == 2)
                        @include('frontend.partials.footer.2columns.footer-left')
                        @include('frontend.partials.footer.2columns.footer-right')
                    @else
                        @include('frontend.partials.footer.1column.footer-center')
                    @endif
                </div>
                <!-- Enable/Disable after footer containers -->
                @if ( !empty($footer['afterFooterContainer'] ))
                    <div class="row">
                        @include('frontend.partials.footer.after-footer-containers')
                    </div>
                @endif
            </div>
        </div>
        @if ( !empty($footer['bottomFooter'] ))   <!-- Enable/Disable bottom footer -->
            @include('frontend.partials.footer.bottom-footer')
        @endif
    @endif
</footer>