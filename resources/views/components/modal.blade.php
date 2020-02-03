<div x-data="{{$xdata}}" x-cloak>
	@if($type =='button')
	<button type="button" x-on:click="isOpen = !isOpen" class="btn btn-primary">{{$buttonName}}</button>
	@endif
	@if($type =='link')
	<a href="#" x-on:click.prevent="isOpen = !isOpen">{{$buttonName}}</a>
	@endif
	<div style="background-color: rgba(0, 0, 0, 0.4);z-index:40;top:0;right:0;left:0;botton:0;width:100%;height:100%"
		class="position-fixed" x-show="isOpen" x-transition:enter="ease-out transition-slow"
		x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
		x-transition:leave="ease-in transition-slow" x-transition:leave-start="opacity-100"
		x-transition:leave-end="opacity-0">
		<div class="container p-4 mx-auto position-absolute left-0 right-0 overflow-hidden mt-24">
			<div class="card card-body">
				{{$slot}}
			</div>
		</div>
	</div>
</div>