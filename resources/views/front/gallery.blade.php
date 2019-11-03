@extends('layouts.otherfront')
@section('content')
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-5" data-black-overlay="7">
	<div class="ht__bradcaump__wrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="bradcaump__inner text-center">
						<h2 class="bradcaump-title">Our Gallery</h2>
						<nav class="bradcaump-inner">
							<a class="breadcrumb-item" href="/">Home</a>
							<span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i><i
									class="zmdi zmdi-chevron-right"></i></span>
							<span class="breadcrumb-item active">Gallery</span>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- Start Gallery Area -->
<section class="gallery__area ptb-100 bg-white">
	<div class="container">
		<!-- Start Our Section Title area -->
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<div class="section__title text-center">
					<h2 class="title__line">our <span class="text-theme">gallery</span></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utllaf
					</p>
				</div>
			</div>
		</div>
		<div class="row mb-30">
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
				<ul id="htc__filters" class="htc__port__filter__nav">
					<li data-filter="*" class="is-checked">All</li>
					<li data-filter=".webdesign">Kaziranga</li>
					<li data-filter=".photography">Zero</li>
					<li data-filter=".html">Pobitora</li>
					{{-- <li data-filter=".jomla">jomla</li> --}}
					{{-- <li data-filter=".wordpress">Wordpress</li> --}}
				</ul>
			</div>
		</div>
		<!-- End Our Section Title area -->
		<div class="row">
			<div class="htc__portfolio__container clearfix mt-20">
				<!-- Start Single Gallery -->
				{{-- <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item webdesign jomla">
					<div class="portfolio">
						<div class="portfolio__inner">
							<div class="htc__hover__fornt">
								<img src="images/portfolio/width-variation/1.jpg" alt="portfolio images">
							</div>
							<div class="htc__hover__information">
								<div class="htc__hover__action">
									<a href="images/portfolio/width-variation/1.jpg" data-lightbox="tfportimg"
										data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div> --}}

				<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item photography">
					<div class="portfolio">
						<div class="portfolio__inner">
							<div class="htc__hover__fornt">
								<img src="2.jpg" alt="portfolio images">
							</div>
							<div class="htc__hover__information">
								<div class="htc__hover__action">
									<a href="2.jpg" data-lightbox="tfportimg" data-title="My caption"><i
											class="zmdi zmdi-zoom-in"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				{{-- <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item wordpress html jomla">
					<div class="portfolio">
						<div class="portfolio__inner">
							<div class="htc__hover__fornt">
								<img src="images/portfolio/width-variation/3.jpg" alt="portfolio images">
							</div>
							<div class="htc__hover__information">
								<div class="htc__hover__action">
									<a href="images/portfolio/width-variation/3.jpg" data-lightbox="tfportimg"
										data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div> --}}

				<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item webdesign html">
					<div class="portfolio">
						<div class="portfolio__inner">
							<div class="htc__hover__fornt">
								<img src="4.jpg" alt="portfolio images">
							</div>
							<div class="htc__hover__information">
								<div class="htc__hover__action">
									<a href="4.jpg" data-lightbox="tfportimg" data-title="My caption"><i
											class="zmdi zmdi-zoom-in"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item photography html">
					<div class="portfolio">
						<div class="portfolio__inner">
							<div class="htc__hover__fornt">
								<img src="5.jpg" alt="portfolio images">
							</div>
							<div class="htc__hover__information">
								<div class="htc__hover__action">
									<a href="5.jpg" data-lightbox="tfportimg" data-title="My caption"><i
											class="zmdi zmdi-zoom-in"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				{{-- <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item wordpress photography">
					<div class="portfolio">
						<div class="portfolio__inner">
							<div class="htc__hover__fornt">
								<img src="images/portfolio/width-variation/6.jpg" alt="portfolio images">
							</div>
							<div class="htc__hover__information">
								<div class="htc__hover__action">
									<a href="images/portfolio/width-variation/6.jpg" data-lightbox="tfportimg"
										data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div> --}}

				{{-- <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item webdesign jomla">
					<div class="portfolio">
						<div class="portfolio__inner">
							<div class="htc__hover__fornt">
								<img src="images/portfolio/width-variation/11.jpg" alt="portfolio images">
							</div>
							<div class="htc__hover__information">
								<div class="htc__hover__action">
									<a href="images/portfolio/width-variation/11.jpg" data-lightbox="tfportimg"
										data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div> --}}

				<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item photography html">
					<div class="portfolio">
						<div class="portfolio__inner">
							<div class="htc__hover__fornt">
								<img src="5.jpg" alt="portfolio images">
							</div>
							<div class="htc__hover__information">
								<div class="htc__hover__action">
									<a href="5.jpg" data-lightbox="tfportimg" data-title="My caption"><i
											class="zmdi zmdi-zoom-in"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				{{-- <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item wordpress">
					<div class="portfolio">
						<div class="portfolio__inner">
							<div class="htc__hover__fornt">
								<img src="images/portfolio/width-variation/2.jpg" alt="portfolio images">
							</div>
							<div class="htc__hover__information">
								<div class="htc__hover__action">
									<a href="images/portfolio/width-variation/2.jpg" data-lightbox="tfportimg"
										data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div> --}}

				<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item webdesign photography">
					<div class="portfolio">
						<div class="portfolio__inner">
							<div class="htc__hover__fornt">
								<img src="4.jpg" alt="portfolio images">
							</div>
							<div class="htc__hover__information">
								<div class="htc__hover__action">
									<a href="4.jpg" data-lightbox="tfportimg" data-title="My caption"><i
											class="zmdi zmdi-zoom-in"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item photography">
					<div class="portfolio">
						<div class="portfolio__inner">
							<div class="htc__hover__fornt">
								<img src="images/portfolio/width-variation/10.jpg" alt="portfolio images">
							</div>
							<div class="htc__hover__information">
								<div class="htc__hover__action">
									<a href="images/portfolio/width-variation/10.jpg" data-lightbox="tfportimg"
										data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item wordpress photography">
					<div class="portfolio">
						<div class="portfolio__inner">
							<div class="htc__hover__fornt">
								<img src="images/portfolio/width-variation/12.jpg" alt="portfolio images">
							</div>
							<div class="htc__hover__information">
								<div class="htc__hover__action">
									<a href="images/portfolio/width-variation/12.jpg" data-lightbox="tfportimg"
										data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Gallery -->
			</div>
		</div>
	</div>
</section>
<!-- End Gallery Area -->


@endsection