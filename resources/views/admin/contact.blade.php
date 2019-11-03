@extends('admin.index')
@section('content')
<div class="row">
	<table class="table">
		@foreach ($contacts as $contact)
		<tr>
			<td>{{$contact->name}}</td>
			<td>{{$contact->phone}}</td>
			<td>{{$contact->email}}</td>
			<td>{{$contact->msg}}</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection