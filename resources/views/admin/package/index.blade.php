@extends('layouts.admin')
@section('script')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.5/dist/alpine.js" defer></script>
@endsection
@section('content')
<div class="container">
	<div class="d-flex justify-content-between mb-3">
		<input type="text" class="form-control w-50" name="package" placeholder="Search By Package Name"><a
			class="btn btn-success" href="/admin/packages/create">Create
			Package</a>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Title</th>
					<th>Short Desc</th>
					<th>Status</th>
				</tr>
			</thead>
			@foreach ($packages as $package)
			<tr>
				<td>
					<a href="/admin/packages/{{$package->id}}">{{$package->title}}</a>
				</td>
				<td>
					{{$package->desc}}
				</td>
				<td>
					<div class="custom-control custom-switch">
						{{-- <input type="checkbox" class="custom-control-input" id="customSwitch1"
							oninput="console.log(document.getElementById('customSwitch1'))"> --}}
						<input class="custom-control-input" type="checkbox" value="" id="customSwitch1{{$package->id}}"
							onchange="statusUpdate({{$package->id}})" {{$package->status === 1 ? 'checked' : ''}} />
						<label class="custom-control-label" for="customSwitch1{{$package->id}}"></label>
					</div>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	<script>
		function statusUpdate(packageId) {
							// let fdata = new FormData();
							// fdata.append('status', this.checked);
							 fetch(`/packages/status/${packageId}`,{
								headers: {
									'X-CSRF-Token': document.querySelector(`meta[name='csrf-token']`).content
								}, 
								method: 'POST',
								body:packageId,
							});
		}
	</script>
</div>
@endsection