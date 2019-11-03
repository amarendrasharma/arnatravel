@extends('layouts.front')
@section('content')
<div class="container-fluid">

	<div class="glide">
		<div class="glide__track" data-glide-el="track">
			<ul class="glide__slides">
				<li class="glide__slide">
					<img src="1.jpg">
				</li>
				<li class="glide__slide">
					<img src="2.jpg">
				</li>
				<li class="glide__slide">
					<img src="3.jpg">
				</li>
				<li class="glide__slide">
					<img src="4.jpg">
				</li>
				<li class="glide__slide">
					<img src="5.jpg">
				</li>
			</ul>
		</div>
		<div class="glide__arrows" data-glide-el="controls">
			<button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
			<button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
		</div>
	</div>
</div>

{{-- <div class="content">
	<div class="glide">
		<div class="glide__track" data-glide-el="track">
			<ul class="glide__slides">
				<li class="glide__slide">
					<img src="1.jpg" height="200px">
				</li>
				<li class="glide__slide">
					<img src="2.jpg" height="200px">
				</li>
				<li class="glide__slide">
					<img src="3.jpg" height="200px">
				</li>
			</ul>
		</div>
		<div class="glide">
			<div class="glide__arrows" data-glide-el="controls">
				<button class="glide__arrow glide__arrow--prev" data-glide-dir="<">prev</button>
				<button class="glide__arrow glide__arrow--next" data-glide-dir=">">next</button>
			</div>

			<div class="glide__bullets" data-glide-el="controls[nav]">
				<button class="glide__bullet" data-glide-dir="=0"></button>
				<button class="glide__bullet" data-glide-dir="=1"></button>
				<button class="glide__bullet" data-glide-dir="=2"></button>
			</div>
		</div>
	</div>
</div> --}}
<script>
	new Glide('.glide', {
  type: 'carousel',
  autoplay: 1500,
  animationDuration: 1000,
  animationTimingFunc: 'linear',
  peek: 10,
  perView: 3,
  breakpoints: {
    1024: {
      perView: 2
    },
    600: {
	autoplay:0,
      perView: 1
	}
}
	}).mount()
</script>
@endsection