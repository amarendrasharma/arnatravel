@extends('layouts.admin')
@section('script')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.5/dist/alpine.js" defer></script>
@endsection
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
		background: rgba(0, 0, 0, 0.03);
		color: rgba(0, 0, 0, 0.8);
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
		border-bottom: 1px dashed rgba(0, 0, 0, 0.1);
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
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h3>{{$package->title}}</h3>
			<p class="mb-3">{{$package->desc}}</p>
			<p class="mb-3">{{$package->duration}}</p>
		</div>
		<div class="col-md-8">
			<div class="d-flex justify-content-between">
				<h5>Package Overview</h5>
				<button class="btn btn-info">
					<svg height="20pt" viewBox="0 -1 401.52289 401" width="20pt" xmlns="http://www.w3.org/2000/svg">
						<path
							d="m370.589844 250.972656c-5.523438 0-10 4.476563-10 10v88.789063c-.019532 16.5625-13.4375 29.984375-30 30h-280.589844c-16.5625-.015625-29.980469-13.4375-30-30v-260.589844c.019531-16.558594 13.4375-29.980469 30-30h88.789062c5.523438 0 10-4.476563 10-10 0-5.519531-4.476562-10-10-10h-88.789062c-27.601562.03125-49.96875 22.398437-50 50v260.59375c.03125 27.601563 22.398438 49.96875 50 50h280.589844c27.601562-.03125 49.96875-22.398437 50-50v-88.792969c0-5.523437-4.476563-10-10-10zm0 0" />
						<path
							d="m376.628906 13.441406c-17.574218-17.574218-46.066406-17.574218-63.640625 0l-178.40625 178.40625c-1.222656 1.222656-2.105469 2.738282-2.566406 4.402344l-23.460937 84.699219c-.964844 3.472656.015624 7.191406 2.5625 9.742187 2.550781 2.546875 6.269531 3.527344 9.742187 2.566406l84.699219-23.464843c1.664062-.460938 3.179687-1.34375 4.402344-2.566407l178.402343-178.410156c17.546875-17.585937 17.546875-46.054687 0-63.640625zm-220.257812 184.90625 146.011718-146.015625 47.089844 47.089844-146.015625 146.015625zm-9.40625 18.875 37.621094 37.625-52.039063 14.417969zm227.257812-142.546875-10.605468 10.605469-47.09375-47.09375 10.609374-10.605469c9.761719-9.761719 25.589844-9.761719 35.351563 0l11.738281 11.734375c9.746094 9.773438 9.746094 25.589844 0 35.359375zm0 0" />
					</svg></button>
			</div>
			<hr>
			<p class="mb-3">{{$package->overview}}</p>
			<div>
				@component('components.modal',[
				'xdata' => json_encode([
				'isOpen' => false,
				]),
				'buttonName' => 'Edit',
				'type' => 'button'
				])
				Lorem ipsum dolor sit amet.

				@endcomponent
			</div>
			<h5>Package Banner</h5>
			<hr>
			<img src="/{{$package->banner}}" height="300">
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 ml-auto py-4">
			<h3>Itinerary</h3>
			<hr>
		</div>
		<div class="col-md-8 ml-auto" style="margin-bottom: 50px;">
			<div id="timeline-content">
				<ul class="timeline">
					@foreach ($package->itineraries as $item)
					<li class="event">
						<p class="data-date">{{$item->days}}</p>
						<h3>{{$item->title}}</h3>
						<p>{{$item->desc}}</p>
					</li>
					@endforeach

				</ul>
			</div>
		</div>

	</div>
</div>
@endsection