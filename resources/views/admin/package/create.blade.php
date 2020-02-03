@extends('layouts.admin')
@section('script')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.5/dist/alpine.js" defer></script>
<script src="https://gist.github.com/amarendrasharma/ecdd885c52f56dc477824792bb2d5693.js"></script>
@endsection
@section('content')
<div class="container">
	<div class="row">
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
							<input type="text" class="form-control is-valid" id="validationServer01" value="Mark"
								name="title" required>
							<div class="valid-feedback">
								Looks good!
							</div>
						</div>
						<div class="col-md-11 mb-3">
							<label for="validationServer01">Tag Line</label>
							<input type="text" class="form-control is-valid" id="validationServer01" name="desc"
								required>
							<div class="valid-feedback">
								Looks good!
							</div>
						</div>
						<div class="col-md-11 mb-3">
							<label for="validationServer02">Duration</label>
							<input type="text" class="form-control is-valid" id="validationServer02" name="duration"
								required>
							<div class="valid-feedback">
								Looks good!
							</div>
						</div>
						<div class="col-md-11 mb-3">
							<label for="validationServer03">Overview</label>
							<textarea class="form-control is-valid" id="validationServer03" name="overview"
								rows="3"> </textarea>
							<div class="valid-feedback">
								Looks good!
							</div>
						</div>
						<div class="col-md-11 mb-3">
							<label for="validationServer06">Included & Excluded</label>
							<textarea class="form-control is-valid" id="validationServer06" name="included"
								rows="3"> </textarea>
							<div class="valid-feedback">
								Looks good!
							</div>
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