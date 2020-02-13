@extends('admin.index')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mx-auto">
			<div class="h3 mb-3">Booking Request</div>
			<table class="table table-striped table-hover border rounded-lg">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Name</th>
						<th scope="col">Mobile</th>
						<th scope="col">Email</th>
						<th scope="col">Msg</th>
						<th scope="col">Date</th>
					</tr>
				</thead>
				@foreach ($contacts as $contact)
				<tr>
					<td></td>
					<td>{{$contact->name}}</td>
					<td>{{$contact->phone}}</td>
					<td>{{$contact->email}}</td>
					<td>{{$contact->msg}}</td>
					<td data-toggle="tooltip" data-placement="bottom" title="{{$contact->created_at->format('d/m/Y')}}">
						{{$contact->contactdate}}</td>
				</tr>
				@endforeach
			</table>
			{{$contacts->links()}}
		</div>
	</div>
</div>
</div>
</div>
@endsection