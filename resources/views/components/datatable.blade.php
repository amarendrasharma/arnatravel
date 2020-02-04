<div class="shadow rounded-lg overflow-hidden mb-8">
	<table class="w-full whitespace-no-wrap bg-white overflow-hidden">
		<thead>
			<tr>
				@foreach($columns as $column)
				<th class="{{ $column['width'] ?? 'w-auto' }} {{ $column['align'] ?? 'text-left' }} px-6 py-3
						text-gray-500 font-bold tracking-wider uppercase text-xs">
					{{ isset($column['th']) ? $column['th'] : str_replace('_', ' ', $column['name']) }}
				</th>
				@endforeach
			</tr>
		</thead>
		<tbody>
			{{-- {{ $slot }} --}}
			@foreach ($data as $value)
			<tr class="focus-within:bg-gray-200 overflow-hidden">
				@foreach($columns as $column)
				@if ($column['name'] === 'action')
				<td class="border-t">
					<div
						class="{{ $column['align'] ?? 'text-left' }} {{ $column['width'] ?? 'w-auto' }} block truncate px-2">
						@foreach ($column['actions'] as $action)
						@if ($action == 'show')
						<a href="{{ $value->links['show'] }}"
							class="px-2 text-blue-500 inline-flex items-center justify-between cursor-pointer hover:text-blue-700">
							View <span class="hidden md:block ml-1">Details</span>
							<svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path d="M10.707 17.707L16.414 12 10.707 6.293 9.293 7.707 13.586 12 9.293 16.293z" />
							</svg>
						</a>
						@endif
						@if ($action == 'edit')
						<a href="{{ $value->links['edit'] }}"
							class="inline-block px-2 text-blue-500 hover:text-blue-700">Edit</a>
						@endif
						@if ($action == 'delete')
						@component('components.confirm',[
						'classes' => 'ml-1 mr-4 text-left',
						'title' => 'Are you sure delete this record?',
						'link' => 'Delete',
						'id' => $value->{$column['deleteId']},
						'idName' => $column['deleteColumnName'],
						'route' => $value->links['delete'],
						'xdata' => json_encode([
						'isOpen' => false
						])
						])
						<p>If you delete the record you can't recover it.</p>
						@endcomponent
						@endif
						@endforeach
					</div>
				</td>
				@else
				<td class="border-t"><span
						class="{{ $column['width'] ?? 'w-auto' }} {{ $column['align'] ?? 'text-left' }} text-gray-700 px-6 py-2 block truncate">
						@isset ( $column['format'])
						@if ($column['format'] === 'currency')
						@currency($value->{$column['name']})
						@else
						{{ $value->{$column['name']}->format($column['format']) }}
						@endif
						@else
						@php $exploded = explode('.', $column['name']); @endphp
						@if (count($exploded) === 2)
						{{ $value->{$exploded[0]}->{$exploded[1]} }}
						@elseif (count($exploded) === 3)
						{{ $value->{$exploded[0]}->{$exploded[1]}->{$exploded[2]} }}
						@else
						{{ $value->{$column['name']} }}
						@endif
						@endisset
					</span>
				</td>
				@endif
				@endforeach
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@isset($pagination)
<div class="flex justify-between my-2">
	<div class="w-1/2">
		@if ($data->previousPageUrl())
		<a href="{{ $data->previousPageUrl() }}"
			class="inline-block font-bold shadow bg-white px-4 py-2 rounded-lg text-gray-600 hover:text-blue-600">Previous</a>
		@endif
	</div>
	<div class="w-1/2 text-right">
		@if ($data->nextPageUrl())
		<a href="{{ $data->nextPageUrl() }}"
			class="inline-block font-bold shadow bg-white px-4 py-2 rounded-lg text-gray-600 hover:text-blue-600">Next</a>
		@endif
	</div>
</div>
@endisset