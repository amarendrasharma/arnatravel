@extends('layouts.otherfront')
@section('content')


<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-5" data-black-overlay="7">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Contact Us</h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="/">Home</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i><i
                                    class="zmdi zmdi-chevron-right"></i></span>
                            <span class="breadcrumb-item active">Contact Us</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Contact Form Area -->
<div class="conntact__from bg-white ptb-100">
    <div class="container">
        <div class="row">
            <div class="contact__form__wrap clearfix">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="contact__img">
                        <img src="img/6.jpg" alt="contact iamges">
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-output">
                        <p class="form-messege">
                            @if(Session::has('success'))
                            <p class="alert alert-info">{{ Session::get('success') }}</p>
                            @endif

                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @error('msg')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </p>
                    </div>
                    <div class="contact-form-wrap bg-cat-3">
                        <h2 class="contact__title">contact <span class="text-theme">form</span></h2>
                        <form id="contact-form" action="/contact" method="post">
                            @csrf
                            <div class="single-contact-form">
                                <div class="contact-box">
                                    <input type="text" name="name" placeholder="Your Name*">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="tel" name="phone" placeholder="Mobile *">
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="single-contact-form">
                                <div class="contact-box ">
                                    <input type="email" name="email" placeholder="email (optional)">

                                </div>
                            </div>
                            <div class="single-contact-form">
                                <div class="contact-box message">
                                    <textarea name="msg" placeholder="Type Your Massage..."></textarea>
                                </div>
                            </div>
                            <div class="contact-btn">
                                <button type="submit" class="htc__contact__btn">SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Form Area -->

<!-- Start Map Area -->
<div class="map-contacts">
    <div id="googleMap"></div>
    <div class="map__hover__info">
        <div class="map__hover__inner">
            <h2 class="finds__title">how to <span class="text-theme">find us</span></h2>
            <h4 class="text-theme">ARNA travel agency</h4>
            <p>House No 08, Road No 08,<br>
                Changsari ,Guwahati</p>
            <div class="single__find__address">
                <p><a href="mailto:test@test.com">infoarna@gmail.com</a></p>
                <p><a href="mailto:test@test.com">infoarna@gmail.com</a></p>
            </div>
            <div class="single__find__address">
                <p><a href="phone:7002611387">+91 7002 611 387</a></p>
                <p><a href="phone:7002611387">+91 7002 611 387</a></p>
            </div>
        </div>
    </div>
</div>
<!-- End Map Area -->


<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
<script>
    // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                zoom: 10,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(26.1445, 91.7362), // Guwahati

             
                 styles: [

    {
        "featureType": "administrative.locality",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#2c2e33"
            },
            {
                "saturation": 7
            },
            {
                "lightness": 19
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ffffff"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ffffff"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 100
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#bbc0c4"
            },
            {
                "saturation": -93
            },
            {
                "lightness": 31
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "hue": "#bbc0c4"
            },
            {
                "saturation": -93
            },
            {
                "lightness": 31
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels",
        "stylers": [
            {
                "hue": "#bbc0c4"
            },
            {
                "saturation": -93
            },
            {
                "lightness": -2
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#e9ebed"
            },
            {
                "saturation": -90
            },
            {
                "lightness": -8
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#e9ebed"
            },
            {
                "saturation": 10
            },
            {
                "lightness": 69
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#e9ebed"
            },
            {
                "saturation": -78
            },
            {
                "lightness": 67
            },
            {
                "visibility": "simplified"
            }
        ]
    }
]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(23.7286, 90.3854),
                map: map,
                title: 'Arna!',
                animation:google.maps.Animation.BOUNCE

            });
        }
</script>
@endsection