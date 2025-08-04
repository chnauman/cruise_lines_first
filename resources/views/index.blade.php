@extends('layouts.app')

@section('title', 'AKAD - Creative Digital Agency HTML Template')
@section('description', 'AKAD is a creative and modern template for digital agencies')

@section('content')
	<!-- HERO SECTION  -->
	<div class="site-hero">
		<ul class="slides">
			<li>
				<div><span class="small-title uppercase montserrat-text">we're</span></div>
				<div class="big-title uppercase montserrat-text">Cruise Industry and Tourism Consulting</div>
				<p>Embark on a Journey Beyond the Horizon — Explore the World with Our Exclusive Cruise Experiences.</p>
			</li>
			<!-- <li>
				<div><span class="small-title uppercase montserrat-text">we do</span></div>
				<div class="big-title uppercase montserrat-text">creative stuff</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. </p>
			</li> -->
		</ul>
	</div>

	<!-- HISTORY OF AGENCY -->
	<div class="container">
		<div class="agency bg-dark">
			<div class="col-md-5 col-sm-12">
				<div class="row">
					<img src="{{ asset('assets/img/agency.jpg') }}" alt="image">
				</div>
			</div>
			<div class="col-md-offset-1 col-md-6 col-sm-12 p-4">
				<div class="row">
					<div class="section-title white-semitransparent">
						<span style="padding: 10px;">Welcome to Cruise Lines First Consultants</span>
					</div>
					<div class="black-semitransparent p-4 rounded">
						<p style="padding: 10px;">
							we have built strong and lasting relationships by helping owners, boards and senior management to achieve their business goals, identify new opportunities, analyse and capitalise on the growth of cruising worldwide. 
							<br>
							We serve all manner of cruise industry stakeholders, delivering expertise in strategy, performance improvement, new business development, growth and competition.
							<br>
							Our clients include tourism and port authorities, global cruise lines, niche operators, investors, cruise related enterprises, educational/training programs and research centres.
						</p>
					</div>
					<a href="#" class="btn green" style="float:right;margin-top:30px"><span>read more</span></a>
				</div>
			</div>
		</div>
	</div>

	<!-- WHY CHOOSE US -->
	<section class="services">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<span>why choose us</span>
					<p>We undertake cruise industry consulting and tourism assignments anywhere in the world. CHART has worked extensively in the USA, the UK, Monaco, Australia and New Zealand and also carried out successful projects in the South Pacific, Melanesia, Southeast Asia, China, the Middle East and Western Europe.</p>
				</div>
			</div>

			<div class="col-md-7 col-sm-12 services-left wow fadeInUp">
				<div class="row" style="margin-bottom:50px">
					<div class="col-md-6 col-sm-12">
						<div class="row">
							<i class="icon ion-ios-infinite-outline"></i>
							<span class="montserrat-text uppercase service-title">Cruise Experience Design</span>
							<ul>
								<li>Unlimited travel destinations</li>
								<li>Tailored itineraries for all preferences</li>
								<li>Exclusive themed cruises</li>
								<li>Curated onboard experiences</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="row">
							<i class="icon ion-ios-shuffle"></i>
							<span class="montserrat-text uppercase service-title">Luxury & Exclusive Cruises</span>
							<ul>
								<li>Bespoke experiences for high-end clients</li>
								<li>Customizable cabins and suites</li>
								<li>Personalized concierge services</li>
								<li>Exclusive onboard events & experiences</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="row">
							<i class="icon ion-ios-cart-outline"></i>
							<span class="montserrat-text uppercase service-title">Customer-Centric Services</span>
							<ul>
								<li>Personalized guest service experiences</li>
								<li>Onboard customer feedback systems</li>
								<li>Pre-cruise communication and concierge services</li>
								<li>Post-cruise engagement (e.g., follow-up offers, surveys)</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="row">
							<i class="icon ion-ios-settings"></i>
							<span class="montserrat-text uppercase service-title">Cruise Concept Development</span>
							<ul>
								<li>Themed cruise concepts (e.g., adventure, luxury, family)</li>
								<li>Customized shore excursions</li>
								<li>Unique onboard activities & amenities</li>
								<li>Specialized dining and entertainment options</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-5 col-sm-12 services-right wow fadeInUp" data-wow-delay=".1s">
				<div class="row">
					<img src="{{ asset('assets/img/serv.jpg') }}" alt="image">
				</div>
			</div>

		</div>
	</section>

	<!-- PORTFOLIO -->
	<section class="portfolio">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<span>our portfolio</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
				
			<!-- categories  -->
			<div class="col-md-3">
				<div class="row categories-grid wow fadeInLeft">
					<span class="montserrat-text uppercase">choose category</span>

					<nav class="categories">
						<ul class="portfolio_filter">
							<li><a href="" class="active" data-filter="*">all</a></li>
							<li><a href="" data-filter=".photography">photography</a></li>
							<li><a href="" data-filter=".web">webdesign</a></li>
							<li><a href="" data-filter=".logo">logo</a></li>
							<li><a href="" data-filter=".graphics">graphics</a></li>
							<li><a href="" data-filter=".ads">advertising</a></li>
							<li><a href="" data-filter=".fashion">fashion</a></li>
						</ul>
					</nav>
				</div>
			</div>

			<!-- all works -->
			<div class="col-md-9">
				<div class="row portfolio_container">
					<!-- single work -->
					<div class="col-md-4 photography">
						<a href="#" class="portfolio_item work-grid wow fadeInUp">
							<img src="{{ asset('assets/img/work-1.jpg') }}" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>Brave man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="#" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".2s">
							<img src="{{ asset('assets/img/work-2.jpg') }}" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>super man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 ads graphics">
						<a href="#" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".3s">
							<img src="{{ asset('assets/img/work-3.jpg') }}" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>bat man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion ads">
						<a href="#" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".4s">
							<img src="{{ asset('assets/img/work-1.jpg') }}" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>spider man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 graphics ads">
						<a href="#" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".5s">
							<img src="{{ asset('assets/img/work-3.jpg') }}" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 logo web photography">
						<a href="#" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".6s">
							<img src="{{ asset('assets/img/work-2.jpg') }}" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 ads graphics">
						<a href="#" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".7s">
							<img src="{{ asset('assets/img/work-2.jpg') }}" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 web fashion photography">
						<a href="#" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".8s">
							<img src="{{ asset('assets/img/work-3.jpg') }}" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="#" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".9s">
							<img src="{{ asset('assets/img/work-1.jpg') }}" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->
				</div>
				<!-- end row -->
			</div>
			<!-- all works end -->
		</div>
		<!-- end container -->
	</section>
	<!-- portfolio -->

	<!-- newsletter -->
	<section class="green-section wow fadeInUp" style="padding:50px 0">
		<div class="container">
			<div class="col-md-6 col-sm-12">
				<div class="row">
					<span class="white-text montserrat-text uppercase" style="font-size:30px;display:block;">
						you think we're cool? let's work together
					</span>
					<a href="#" class="btn white" style="margin-top:30px"><span>get in touch</span></a>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<div class="row">
					<div class="white-section" style="padding:20px">
						<span class="montserrat-text uppercase" style="font-size:24px">stay informed with our newsletter</span>
						<p>
							Sign up for our newsletter to receive the latest cruise itineraries, exclusive offers, and exciting onboard experiences straight to your inbox.
						</p>
						<form action="#" method="post">
							@csrf
							<div class="input_1">
								<input type="text" name="email">
								<span>your email</span>
							</div>
							<button type="submit" class="btn green" style="margin-top:20px"><span>send</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@push('scripts')
<script type="text/javascript" charset="utf-8">
	$(window).load(function() {
		new WOW().init();

		// initialise flexslider
		$('.site-hero').flexslider({
			animation: "fade",
			directionNav: false,
			controlNav: false, 
			keyboardNav: true,
			slideToStart: 0,
			animationLoop: true,
			pauseOnHover: false,
			slideshowSpeed: 4000, 
		});

		// initialize isotope
		var $container = $('.portfolio_container');
		$container.isotope({
			filter: '*',
		});
	 
		$('.portfolio_filter a').click(function(){
			$('.portfolio_filter .active').removeClass('active');
			$(this).addClass('active');
	 
			var selector = $(this).attr('data-filter');
			$container.isotope({
				filter: selector,
				animationOptions: {
					duration: 500,
					animationEngine : "jquery"
				}
			});
			return false;
		}); 
	});
</script>
@endpush