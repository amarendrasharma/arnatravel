@extends('layouts.otherfront')
@section('content')


<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

<!-- Body main wrapper start -->
<!-- Start Header Style -->
<!-- End Header Style -->
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-5" data-black-overlay="7">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">tour packages grid</h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="index.html">Home</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i><i
                                    class="zmdi zmdi-chevron-right"></i></span>
                            <span class="breadcrumb-item active">packages</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->

<!-- Start Special Packages Area -->
<section class="special__package pb-100 bg-white">
    <div class="container">
        <!-- Start Our Section Title area -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="section__title text-center" style="margin-top:30px">
                    <h2 class="title__line">SPECIAL <span class="text-theme">PACKAGES</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt utllaf </p>
                </div>
            </div>
        </div>
        <!-- End Our Section Title area -->
        <div class="row">
            <div class="special__package__container clearfix mt-10">
                <!-- Start Single Packages -->
                @foreach ($packages as $package)

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="packages">
                        <div class="package__thumb">
                            <img src="{{url($package->banner)}}" alt="packages images" height="300" />
                            <div class="packages__hover__info">
                                <div class="package__hover__inner">
                                    <h4><a href="#">{{$package->title}}</a></h4>
                                    <h6><i class="zmdi zmdi-alarm"></i>{{$package->duration}}</h6>
                                    <p>{{$package->desc}}</p>
                                    <div class="package--rating--btn">
                                        <ul class="rating">
                                            <li><i class="zmdi zmdi-cutlery"></i>
                                            </li>
                                            <li><i class="zmdi zmdi-hotel"></i>
                                            </li>

                                        </ul>
                                        <div class="packages__btn">
                                            <a class="view__btn" href="/packages/details/{{$package->uuid}}">view
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="package__details">
                            <div class="package__details__inner">
                                <p><strong>{{$package->title}}</strong> </p>
                                <p class="packg__prize">&#8377;300</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- End Single Packages -->



            </div>
        </div>
    </div>
</section>
<!-- End Special Packages Area -->


<!-- Body main wrapper end -->
@endsection