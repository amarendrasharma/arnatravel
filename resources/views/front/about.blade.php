@extends('layouts.otherfront')

@section('content')

<!-- Body main wrapper start -->
<div class="wrapper fixed-newslatter">

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area bg-5" data-black-overlay="7">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">About US</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="index.html">Home</a>
                                <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i><i
                                        class="zmdi zmdi-chevron-right"></i></span>
                                <span class="breadcrumb-item active">About US</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- Start Our Service area -->
    <section class="our__service__area pt-100 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <!-- Start Our Service -->
                    <div class="service__inner">
                        <!-- Start Single Service -->
                        <div class="service">
                            <div class="service__icon">
                                <i class="flaticon-telephone icon"></i>
                            </div>
                            <div class="service__details">
                                <h4><a href="#">Taxi Cab Booking</a></h4>
                                <p>We provide Taxi Cab in all the places over northeast. Our main goal shows
                                    safe and successful journey to all the customers. All the drivers act as a
                                    tour guides and they are very much experienced. Vehicle are listed they are
                                    – Bolero , Innova , Swift Dzire ,Tempo Traveler , Bus etc.</p>
                            </div>
                        </div>
                        <!-- End Single Service -->

                        <!-- Start Single Service -->
                        <div class="service">
                            <div class="service__icon">
                                <i class="flaticon-sleeping icon"></i>
                            </div>
                            <div class="service__details">
                                <h4><a href="#">Amazing Tour</a></h4>
                                <p>
                                    Amazing tours and packages also have good deals with the most of the hotels,
                                    budgeted,luxary and heritage in all over Northeast. Maintained cordial
                                    relations with the hotelers.</p>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="service">
                            <div class="service__icon">
                                <i class="flaticon-transport icon"></i>
                            </div>
                            <div class="service__details">
                                <h4><a href="#">Book Cheap Online</a></h4>
                                <p> We providing our satisfactory service to our customers. We arrange tours for
                                    domestic inbound and pilgrim tourists by taking under consideration the
                                    desire and budget of tourist.</p>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <div class="service">

                        </div>
                    </div>
                    <!-- End Our Service -->
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 sm-mt-30 xs--mt--40">
                    <!-- Start Tab Menu -->
                    <ul class="view-mode" role="tablist">
                        <li role="presentation" class="about active"><a href="#about" role="tab" data-toggle="tab">about
                                us</a>
                        </li>
                        <li role="presentation" class="mission "><a href="#mission" role="tab" data-toggle="tab">our
                                mission</a></li>
                        <li role="presentation" class="vision"><a href="#vision" role="tab" data-toggle="tab">our
                                vision</a></li>
                    </ul>
                    <!-- End Tab Menu -->
                    <!-- Start Tab Content -->
                    <div class="htc__tab__content">
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="about" class="single__tab__content tab-pane fade in active bg-cat-1">
                            <div class="tab__content__inner">
                                <p>ARNA TRAVELS located at Changsari, which is a town in Kamrup district of Assam,
                                    situated on the north bank of the Brahmaputra River. It should help improve the
                                    satisfaction, experience of tourist and to make arrangements for people who want to
                                    travel. , ARNA TRAVELS has been founded in Dec 2019 by a group of young and dynamic
                                    entrepreneurs. It aims to Provide a high standard of services suitable for
                                    individuals seeking relaxing, comfortable and memorable experiences</p>
                                {{-- <ul class="tab__list">
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Tempor incididunt ut
                                            labore et dolore magna aliqua</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Ullamco laboris nisi ut
                                            aliquiexea commodo</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Tempor incididunt ut
                                            labore et dolore magna aliqua</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i>quis nostrud exercitation
                                            ullamco laboris</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Consectetur adipisicing
                                            elit</a></li>
                                </ul> --}}
                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="mission" class="single__tab__content tab-pane fade bg-cat-1">
                            <div class="tab__content__inner">
                                <h2></h2>
                                <p>To provide a warm, professional and knowledgeable service to all the clients, as well
                                    as potential clients. Every tourist is our guest. It is our mission to bring forth a
                                    high quality of personality and trust, in turn creating a everlasting memory of our
                                    client. We help guide the traveler as a friend would guide a friend. Our objective
                                    in every case to receive the testimonial letter that will bring the utmost
                                    satisfaction to our daily work environment. Word of mouth travels further than any
                                    advertisement and create a never ending chain of satisfied travelers.</p>
                                {{-- <ul class="tab__list">
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Tempor incididunt ut
                                            labore et dolore magna aliqua</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Ullamco laboris nisi ut
                                            aliquiexea commodo</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Tempor incididunt ut
                                            labore et dolore magna aliqua</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i>quis nostrud exercitation
                                            ullamco laboris</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Consectetur adipisicing
                                            elit</a></li>
                                </ul> --}}
                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="vision" class="single__tab__content tab-pane fade bg-cat-1">
                            <div class="tab__content__inner">
                                <h2></h2>
                                <p>Our main objective is to understand the prospects of rural tourism in North East
                                    India and specially Assam and maintain our main vision of high class travel service
                                    at reasonable prices through consistent leadership, controlled growth and excellent
                                    commitment.</p>
                                {{-- <ul class="tab__list">
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Tempor incididunt ut
                                            labore et dolore magna aliqua</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Ullamco laboris nisi ut
                                            aliquiexea commodo</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Tempor incididunt ut
                                            labore et dolore magna aliqua</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i>quis nostrud exercitation
                                            ullamco laboris</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Consectetur adipisicing
                                            elit</a></li>
                                </ul> --}}
                            </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                    <!-- End Tab Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Service area -->




</div>
<!-- Body main wrapper end -->

@endsection