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
		<div class="col-md-12">
			<h3>{{$package->title}}</h3>
			<hr />
		</div>
		<div class="col-md-4  pt-4">
			<h5>Package Description</h5>
			<hr />
			<p class="mb-3">{{$package->desc}}</p>

			<h5>Package Duration</h5>
			<hr />
			<p class="mb-3">{{$package->duration}}</p>
		</div>
		<div class="col-md-8 ml-auto pt-4">

			<h5> Included & Excluded</h5>
			<hr />
			<div class="d-flex justify-content-end">
				<a href="/packages/{{$package->id}}/itinarary" class="btn btn-success mx-2">
					Create Itinerary
				</a>
				@component('components.modal',[
				'xdata' => json_encode([
				'isOpen' => false,
				]),
				'buttonName' => 'Edit',
				'type' => 'button'
				])
				<form action="/admin/{{$package->id}}/packages" method="POST">
					@csrf
					<div class="form-group">
						<label for="">Overview</label>
						<textarea name="overview" rows="8" class="form-control">{{$package->overview}}</textarea>
					</div>
					<button type="submit" class="btn btn-primary">Update</button>
				</form>
				@endcomponent
			</div>

			<p class="mb-3">{{$package->included}}</p>

		</div>
		<div class="col-md-8 ml-auto">
			<div class="d-flex justify-content-between">
				<h5>Package Overview</h5>
			</div>
			<hr>
			<div>
				@component('components.modal',[
				'xdata' => json_encode([
				'isOpen' => false,
				]),
				'buttonName' => 'Edit',
				'type' => 'button'
				])
				<form action="/admin/{{$package->id}}/packages" method="POST">
					@csrf
					<div class="form-group">
						<label for="">Overview</label>
						<textarea name="overview" rows="8" class="form-control">{{$package->overview}}</textarea>
					</div>
					<button type="submit" class="btn btn-primary">Update</button>
				</form>

				@endcomponent
			</div>
			<p class="mb-3">{{$package->overview}}</p>

			<h5>Package Banner</h5>
			<hr>
			<form method="POST" enctype="multipart/form-data" action="/admin/packages">
				@csrf
				<div class="col-md-4 py-3">
					<img id="image"
						src="{{url('storage/'.$package->banner ?? 'https://via.placeholder.com/300.png/09f/fff')}} "
						height="300">

					<input name="banner" id="fileInput" accept="image/*" type="file" onchange="let file = this.files[0];

							// if(parseInt(file.size) < 320839)
							// {
							// 	console.log('sdsd',file.size)
							// 	return;
							// }
							var reader = new FileReader();
							reader.onload = function(e){
								e.preventDefault();
								document.getElementById('image').src = e.target.result;
								fdata = new FormData();
								fdata.append('banner',file);
							console.log( document.querySelector(`meta[name='csrf-token']`).content)
							let packetPromise = fetch('/admin/{{$package->id}}/packages', {
								headers: {
									'X-CSRF-Token': document.querySelector(`meta[name='csrf-token']`).content
								}, 
								method: 'POST'
						, 		body: fdata,
								});
								packetPromise.then(res=>{
									console.log(res.data);
									alert('hoise');
								})
							};
							reader.readAsDataURL(file);
							" hidden>
					<button type="button" class="px-5 mt-3 btn btn-info"
						onClick="document.getElementById('fileInput').click()">
						Browse
					</button>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 ml-auto pt-4">
			<h3>Itinerary</h3>
			<hr>
		</div>
		<div class="col-md-8 ml-auto" style="margin-bottom: 50px;">
			@if($package->itineraries->count() > 0)
			<div id="timeline-content">
				<ul class="timeline">
					@foreach ($package->itineraries as $item)
					<li class="event">
						<p class="data-date">{{$item->days}}</p>
						<h3>{{$item->title}}</h3>
						<p>{{$item->desc}}</p>
						{{-- <a href="#" x-on:click.prevent="isOpen = !isOpen">{{$buttonName}}</a>
						<a href="#">{{$buttonName}}</a> --}}

						<button class="btn btn-secondary btn-sm text-white" href="/itinerary/{{$item->id}}/delete"
							onclick=" event.preventDefault();
							document.getElementById('logout-form{{$item->id}}').submit();">
							{{ __('Delete') }}
						</button>

						<form id="logout-form{{$item->id}}" action="/itinerary/{{$item->id}}/delete" method="POST"
							style="display: none;">
							@csrf
						</form>



					</li>
					@endforeach

				</ul>
			</div>
			@else
			<p>Empty</p>
			@endif
		</div>

	</div>
</div>
@endsection