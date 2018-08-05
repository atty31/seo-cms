@extends('frontend.layouts.main')

@section('htmlheader_title')
	Contact
@endsection

@section('main-content')
	<div class="main-content">
		<!-- Page head tile -->
		<div class="page-head-tile">
			<div class="container">
				<div class="breadcrumbs-block">
					<ul class="breadcrumbs">
						<li class="bc-item">
							<a href="">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li class="bc-item">
							<a href="">Category Style One</a>
						</li>
					</ul>
				</div>
				<div class="page-title">
					<h1 class="title-16"><strong>Category Style</strong> One</h1>
					<div class="filters">
						<ul class="filters-list-1">
							<li><a href="" class="active">all</a></li>
							<li><a href="">web design</a></li>
							<li><a href="">branding</a></li>
							<li><a href="">design</a></li>
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
			</div>
		</div>
		<!-- Page head tile END -->
		<!-- Main posts -->
		<div class="main-posts-3">
			<div class="mp-section">
				{!! html_entity_decode($category_content) !!}
			</div>
		</div>
		<!-- Main posts END -->
		<div class="section">
			<div class="row">
				<div class="content">
					<div class="pst-block">
						<div class="pst-block-main">
							<div class="col-row">
								@if (count($categories) > 0)
									@foreach($categories as $cat)
										@if ($cat->is_active == 1)
											<div class="col-half">
												<article class="post post-tp-8">
													<figure>
														<a href="{{$cat->curl_name}}/{{$cat->purl_name}}">
															@if (!empty($cat->path))
																<img src="{{ asset($cat->path) }}" height="242" width="345" @if( !empty($cat->alt_image)) alt="{{$cat->alt_image}}" @endif class="adaptive" />
															@else
																<img src="{{ asset('/styles/img/345x242/3.jpg') }}" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
															@endif
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
													<h3 class="title-5"><a href="{{$cat->curl_name}}/{{$cat->purl_name}}">{{$cat->ptitle}}</a></h3>
													<div class="meta-tp-2">
														<div class="date"><span>{{ date('F d, Y', strtotime($cat->created_at)) }}</span></div>
														<div class="category">
															<a href=""><i class="li_pen"></i><span>{{$cat->uname}}</span></a>
														</div>
													</div>
												</article>
											</div>
										@endif
									@endforeach
								@endif
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
				<aside class="side-bar sticky-wrap">
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
										<li><a href="" class="active">News</a></li>
										<li><a href="">Featured</a></li>
										<li><a href="">Comments</a></li>
									</ul>
								</div>
								<hr class="pst-block-hr">
								<div class="js-csp-block js-tab-slider">
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
													<img src="{{ asset('/styles/img/115x85/10.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
												</a>
											</figure>
											<h3 class="title-6"><a href="">Vivamus auctor quam nec mauris commodo</a></h3>
											<div class="date-tp-2">october 2, 2015</div>
										</article>
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
													<img src="{{ asset('/styles/img/115x85/11.jpg') }}" alt="Spectr News Theme" class="adaptive" height="85" width="115">
												</a>
											</figure>
											<h3 class="title-6"><a href="">Nam ut metus elementum pharetra diam sed</a></h3>
											<div class="date-tp-2">october 2, 2015</div>
										</article>
									</div>
								</div>
							</div>
							<div class="pst-block-foot">
								<div class="js-sbr-pagination"></div>
							</div>
						</div>
					</div>
					@include('frontend.pages.subscribe')
					@include('frontend.pages.tags')
				</aside>
			</div>
		</div>
	</div>
@endsection
