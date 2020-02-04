@if($users->isEmpty())

@else
@php
$columns = [
['name' => 'name', 'th' => ' Name'],
['name' => 'email', 'th' => 'Email'],
[
'name' => 'action', 'th' => 'Actions',
'actions' => ['show', 'delete'], 'width' =>
'w-64', 'deleteId' => 'id', 'deleteColumnName' => 'id']
];
@endphp
@datatable([
'columns' => $columns,
'data' => $users,
'pagination' => true
])@enddatatable
@endif