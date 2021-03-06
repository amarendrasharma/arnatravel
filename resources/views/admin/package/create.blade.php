@extends('layouts.admin')
@section('script')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.5/dist/alpine.js" defer></script>
@endsection
@section('content')
<div class="container">
	<div class="row">
		<h3>
			Package Create
		</h3>
		<div class="col-md-12">
			<form method="POST" enctype="multipart/form-data" action="/admin/packages">
				@csrf
				<div class="col-md-4 py-3">
					<img src="https://via.placeholder.com/300.png/09f/fff" height="300" width="300" id="image">

					<input name="banner" id="fileInput" accept="image/*" type="file" onchange="let file = this.files[0];
							var reader = new FileReader();
							reader.onload = function(e){
								e.preventDefault();
								document.getElementById('image').src = e.target.result;
							};
							reader.readAsDataURL(file);
							" hidden>
					<button type="button" class="px-5 mt-3 btn btn-info"
						onClick="document.getElementById('fileInput').click();e.preventDefault()">
						Browse
					</button>
				</div>
				<div class="col-md-8">
					<div class="form-row">
						<div class="col-md-11 mb-3">
							<label for="validationServer01">Package Name</label>
							<input type="text" class="form-control" id="validationServer01" value="" name="title">
							@error('title')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror

						</div>
						<div class="col-md-11 mb-3">
							<label for="validationServer01">Tag Line</label>
							<input type="text" class="form-control" id="validationServer01" name="desc">
							@error('desc')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="col-md-11 mb-3">
							<label for="validationServer02">Duration</label>
							<input type="text" class="form-control" id="validationServer02" name="duration">
							@error('duration')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="col-md-11 mb-3">
							<label for="validationServer03">Overview</label>
							<textarea class="form-control" id="validationServer03" name="overview" rows="3"> </textarea>
							@error('overview')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="col-md-11 mb-3">
							<label for="validationServer06">Included & Excluded</label>
							<textarea class="form-control" id="validationServer06" name="included" rows="3"> </textarea>
							@error('included')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
					</div>
					<div class="form-row">
						<button class="btn btn-primary">Save Package</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div> @endsection