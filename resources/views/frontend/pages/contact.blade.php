@extends('frontend.layouts.main')

@section('htmlheader_title')
	Contact
@endsection

@section('main-content')

	<!-- Page head tile -->
	<div class="page-head-tile">
		<div class="container">
			<div class="page-title">
				<h1 class="title-16"><strong>Contact</strong> Us Style Two</h1>
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
							<article>
								<div class="post-main-img">
									<img src="{{ asset('/styles/img/750x438/1.jpg') }}" height="438" width="750" alt="Spectr News Theme" class="adaptive" />
								</div>
								<p>Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo <a href="">inventore veritatis et quasi</a> architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui</p>
							</article>
							<div class="contactf-form-block">
								<div class="title-blc-2">
									<div class="title-blc-inner">
										<h4>Send <span>Message</span></h4>
										<p>Your email address will not be published.</p>
									</div>
								</div>
								<div class="comments-form">

									@include('frontend.partials.messages')

									<form role="form" action="{{ route('contact.store') }}" method="post" id="contactForm" data-toggle="validator" class="shake">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="form-group form-control">
											<label>
												NAME*
												<input type="text" class="form-control" id="name" placeholder="{{ trans('adminlte_lang::message.fullname') }}" name="name" value="{{ old('name') }}"/>
											</label>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group form-control">
											<label>
												EMAIL*
												<input type="email" class="form-control" id="email" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" value="{{ old('email') }}"/>
											</label>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group form-control">
											<label>
												Message*
												<textarea id="message" name="message" class="form-control" rows="5" placeholder="Enter Your Message..."></textarea>
											</label>
											<div class="help-block with-errors"></div>
										</div>
										<button type="submit" id="form-submit" class="btn btn-3 btn-success btn-lg pull-right ">send message</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div>
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<aside class="side-bar sticky-wrap">
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
										<p>Sed ut perspiciatis <a href="">@weblionmedia</a> unde omnis iste natus sit voluptatem accusantium doloremque laudantiu <a href="">#news</a> <a href="">#video</a> <a href="">#life</a></p>
										<div class="date">2 min ago</div>
									</li>
									<li>
										<i class="fa fa-twitter"></i>
										<p>Sed ut perspiciatis <a href="">@weblionmedia</a> unde omnis iste natus sit voluptatem accusantium doloremque laudantiu <a href="">#news</a> <a href="">#video</a> <a href="">#life</a></p>
										<div class="date">2 min ago</div>
									</li>
								</ul>
							</div>
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
			</aside>
		</div>
	</div>

@endsection
