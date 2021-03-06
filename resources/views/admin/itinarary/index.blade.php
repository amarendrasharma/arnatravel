@extends('layouts.admin')

@section('css')
<style>
	/* Variables */
	/* Base */
	.timeline {
		background: #252827;
		font-size: 16px;
	}

	.timeline p {
		font-weight: 300;
	}

	.timeline a {
		color: #6c6d6d;
		text-decoration: none;
		text-transform: uppercase;
		display: block;
		letter-spacing: 0.3em;
		font-size: 0.6em;
		font-weight: 400;
		background: #252727;
		padding: 0.3rem 1rem;
		margin: 1.9rem 0 0 0;
		float: right;
	}

	.timeline a:hover {
		color: black;
		background: #004ffc;
		border-bottom: 0.35em solid black;
	}

	.timeline strong {
		font-weight: 600;
	}

	.timeline h1 {
		font-family: 'Saira', sans-serif;
		letter-spacing: 1.5px;
		color: black;
		font-weight: 400;
		font-size: 2.4em;
	}

	#timeline-content {
		padding-left: 85px;
		margin-top: 50px;
		text-align: center;
		max-height: 500px;
		overflow-y: scroll
	}

	/* Timeline */
	.timeline {
		border-left: 4px solid #004ffc;
		border-bottom-right-radius: 4px;
		border-top-right-radius: 4px;
		background: rgba(255, 255, 255, 0.03);
		color: rgba(255, 255, 255, 0.8);
		font-family: 'Chivo', sans-serif;
		/* margin: 50px auto; */
		letter-spacing: 0.5px;
		position: relative;
		line-height: 1.4em;
		font-size: 1.03em;
		padding: 50px;
		list-style: none;
		text-align: left;
		font-weight: 100;
		/* max-width: 30%; */
	}

	.timeline h1 {
		font-family: 'Saira', sans-serif;
		letter-spacing: 1.5px;
		font-weight: 100;
		font-size: 1.4em;
	}

	.timeline h2,
	.timeline h3 {
		font-family: 'Saira', sans-serif;
		letter-spacing: 1.5px;
		font-weight: 400;
		font-size: 1.4em;
	}

	.timeline .event {
		border-bottom: 1px dashed rgba(255, 255, 255, 0.1);
		padding-bottom: 25px;
		margin-bottom: 20px;
		position: relative;
	}

	.timeline .event:last-of-type {
		padding-bottom: 0;
		margin-bottom: 0;
		border: none;
	}

	.timeline .event:before,
	.timeline .event:after {
		position: absolute;
		display: block;
		top: 0;
	}

	.custom-padding-me {
		padding: 50px;
	}

	/* .timeline .event:before {
		left: -217.5px;
		color: rgba(0, 0, 0);
		content: "";
		text-align: right;
		font-weight: 100;
		font-size: 0.9em;
		min-width: 120px;
		font-family: 'Saira', sans-serif;
	} */

	.timeline .event:after {
		box-shadow: 0 0 0 4px #004ffc;
		left: -57.85px;
		background: #313534;
		border-radius: 50%;
		height: 11px;
		width: 11px;
		content: "";
		top: 5px;
	}

	.data-date {
		position: absolute;
		left: -217.5px;
		color: rgba(0, 0, 0);
		text-align: right;
		font-weight: 100;
		font-size: 0.9em;
		min-width: 120px;
		font-family: 'Saira', sans-serif;
	}

	@media only screen and (max-width: 320px) {
		.mt-20-included-excluded {
			margin-top: 20px;
		}

		.timeline {
			padding-right: 0px;
		}

		.timeline .event {
			margin-bottom: 15px;
		}

		.custom-padding-me {
			padding: 10px;
		}

		#timeline-content {
			padding-left: 10px;
			max-height: unset;
		}

		.data-date {
			position: unset;

			text-align: left;

		}


	}

	@media only screen and (min-width:321px) and (max-width: 360px) {
		.mt-20-included-excluded {
			margin-top: 20px;
		}

		.timeline {
			padding-right: 0px;
		}

		.timeline .event {
			margin-bottom: 15px;
		}

		.custom-padding-me {
			padding: 10px;
		}

		#timeline-content {
			padding-left: 10px;
			max-height: unset;

		}

		.data-date {
			position: unset;
			text-align: left;
		}


	}

	@media only screen and (min-width:361px) and (max-width: 480px) {
		.mt-20-included-excluded {
			margin-top: 20px;
		}

		.timeline {
			padding-right: 0px;
		}

		.timeline .event {
			margin-bottom: 15px;
		}

		.custom-padding-me {
			padding: 10px;
		}

		#timeline-content {
			padding-left: 10px;
			max-height: unset;
		}

		.data-date {
			position: unset;
			text-align: left;
		}

	}
</style>
@endsection
@section('content')
<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

<section class="special__package pb-100 bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-7">

				<h2>Itinerary</h2>
			</div>
			<div class="col-md-7" style="margin-bottom: 50px;">
				<div id="timeline-content">

					<ul class="timeline">
						<li class="event">
							<p class="data-date">
								Day 1
							</p>
							<h3>Dinosaurs Roamed the Earth</h3>
							<p>RAWWWWWWRRR 🐢🦂</p>
						</li>
						<li class="event">
							<p class="data-date">day2</p>
							<h3>Creative Component Launched</h3>
							<p>"We can be all things to all people! " Lorem ipsum dolor sit amet consectetur
								adipisicing
								elit.
								Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error cum, quos sint
								tempore
								eaque ab aspernatur repellendus iusto exercitationem. Voluptatum, libero eos?
								Tempore
								non minus excepturi veritatis sint sunt deserunt. 📣</p>
						</li>
						<li class="event" id="date">
							<p class="data-date">day3</p>
							<h3>Squareflair was Born</h3>
							<p></p>
							<p>"We can be all things to Squarespace users!" 📣</p>
						</li>

						<li class="event">
							<p class="data-date">day4</p>
							<h3>Squareflair Today</h3>

							<p>"We design and build from scratch!" 📣
								<p />
								<p>When we say <em><strong>100% custom</strong></em> we mean it— and we build all
									sites
									on the
									Squarespace Developer platform.
									<p />
									<p>Did you know that all of our pixels are hand-forged from the rarest of
										subpixels
										grown and
										harvested in the <em>Nerd Forest</em>? <br>🤜💥🤛</p>

									<p><strong>Our success can be measured by lives and brands enhanced by 9+ years
											of
											100%
											Squarespace-focused service!</strong></p>

									<p><a href="#">arnra.com</a></p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-5">
				<div>
					<div class=" bg-cat-3 custom-padding-me">
						<h2 class="contact__title">Booking <span class="text-theme"> Enquiry</span></h2>
						@if(Session::has('success'))
						<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}
						</p>
						@endif
						<form id="contact-form" action="/contact/{{$package->uuid}}" method="post">
							@csrf
							<div class="single-contact-form">
								<div class="contact-box">
									<input type="text" name="name" placeholder="Your Name*">
									<input type="tel" name="phone" placeholder="Mobile*">
								</div>
							</div>

							<div class="single-contact-form">
								<div class="contact-box">
									<input type="text" name="person" placeholder="No of People*">
								</div>
							</div>
							<div class="single-contact-form">
								<div class="contact-box ">
									<input type="email" name="email" placeholder="email (optional)">

								</div>
							</div>
							<div class="single-contact-form">
								<div class="contact-box message">
									<textarea name="msg" placeholder="Type Your Massage..."></textarea>
								</div>
							</div>
							<div class="contact-btn">
								<button type="submit" class="htc__contact__btn">SEND ENQUIRY</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 mt-20-included-excluded">
				<h2>Included & Excluded</h2>
				<p>
					{{$package->included}}
				</p>
			</div>
		</div>
	</div>
</section>
@endsection