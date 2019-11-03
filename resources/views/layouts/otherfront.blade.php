<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ARNA TRAVEL // HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Template shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Template main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed-newslatter">
        <!-- Start Header Style -->
        <header id="header" class="header">
            <div id="sticky-header-with-topbar" class="container-fluid hidden-xs sticky__header">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-12">
                        <div class="logo">
                            <a href="/"><img src="logo.jpg" height="60" alt="logo"></a>
                            <!-- <a href="/">ARNA Travel</a> -->
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8">
                        <div class="header__top">
                            <div class="header__top__left">
                                <p><span class="text-theme">Contact:</span><a href="#">0088-234-675-827</a></p>
                                <p class="hidden-sm"><span class="text-theme">Opening Hours:</span> Mon - Sat 8.00 - 18.00. Sunday CLOSED</p>
                            </div>
                            <div class="header__top__right">
                                <ul class="login__regester">
                                    {{-- <li><a class="modal-view button" href="#" data-toggle="modal" data-target="#loginform"><i class="zmdi zmdi-account"></i>Login</a></li>
                                    <li><a  class="modal-view button" href="#" data-toggle="modal" data-target="#registrationform"><i class="zmdi zmdi-account-add"></i>Register</a></li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="header__bottom">
                            <div class="mainmenu__area">
                                <nav class="mainmenu__nav">
                                    <ul class="main__menu">
                                        <li><a href="/">home</a>
                                        </li>
                                        <li><a href="/about">about</a></li>
										<li><a href="/packages">Packages</a></li>
                                        <li><a href="/gallery">gallery</a></li>
                                     
                                        <li><a href="/contact">contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2 hidden-sm">
                        <ul class="social__icon icon--position">
                            <li><a href="https://www.linkedin.com/"><i class="zmdi zmdi-linkedin"></i></a></li>
                            <li><a href="https://www.pinterest.com/"><i class="zmdi zmdi-pinterest"></i></a></li>
                            <li><a href="https://www.tumblr.com/"><i class="zmdi zmdi-tumblr"></i></a></li>
                            <li><a href="https://plus.google.com/"><i class="zmdi zmdi-google"></i></a></li>
                            <li><a href="https://www.facebook.com/"><i class="zmdi zmdi-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Mobile-menu-area start -->
            <div class="mobile-menu-area hidden-md hidden-lg hidden-sm">
                <div class="fluid-container mobile-menu-container">
                    <div class="mobile-logo"><a href="/"><img src="logo.jpg" height="60" alt="Mobile logo"></a></div>
                    <div class="mobile-menu clearfix">
                        <nav id="mobile_dropdown">
                            <ul>
                                <li><a href="/">home</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/packages">Package list</a></li>
                                <li><a href="/gallery">gallery</a></li>
                                <li><a href="/contact">contact</a></li>
                            </ul>
                        </nav>
                    </div>  
                </div>
            </div>
            <!-- Mobile-menu-area End -->
        </header>
        <!-- End Header Style -->


		@yield('content')

		<footer class="footer__area bg-4">
            <div class="footer__top ptb-70" data-black-overlay="8">
                <div class="container">
                    <div class="row">
                        <div class="footer__wrap clearfix">
                            <!-- Start Single Footer -->
                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                <div class="footer__wedget">
                                    <div class="footer__logo">
                                        <a href="#">
                                            <img src="logo.jpg" height="60" alt="logo">
                                        </a>
                                    </div>
                                    <p class="footer__dtl">Lorem ipsum dolor sit amet, consectetur adipisicing ejlit, sed do eiusmod tempor incididunt ut labore egtt dolore magna aliqua. Ut enim ad minim veniam, quisgt nostrud exercitation ullamco laboris.</p>
                                    <ul class="footer__social__icon">
                                        <li><a href="https://www.linkedin.com/"><i class="zmdi zmdi-linkedin"></i></a></li>
                                        <li><a href="https://www.pinterest.com/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        <li><a href="https://www.tumblr.com/"><i class="zmdi zmdi-tumblr"></i></a></li>
                                        <li><a href="https://plus.google.com/"><i class="zmdi zmdi-google"></i></a></li>
                                        <li><a href="https://www.facebook.com/"><i class="zmdi zmdi-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Footer -->
                            <!-- Start Single Footer -->
                     
                            <!-- End Single Footer -->
                            <!-- Start Single Footer -->
                          
                            <!-- End Single Footer -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright__arera" data-black-overlay="9">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                            <div class="copyright__inner">
                                <div class="copyright__text">
                                    <p>Copyright © 2019<a href="#">Arna Travels</a> All Right Reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- Body main wrapper end -->

    <!--Start of Login Form-->
    <div id="login__form__wrap">
        <!-- Modal -->
        <div class="modal fade" id="loginform" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-pop-up-content">
                            <div class="text-center">
                                <h2 class="modal-title">Login Hare</h2>
                            </div>
                            <form method="post" action="#">
                                <div class="form-box">
                                    <input type="text" name="username" placeholder="User Name">
                                    <input type="password" name="pass" placeholder="Password">
                                </div>
                                <div class="clearfix">
                                    <span class="remember pull-left">
                                      <input type="checkbox" id="pass_chack" value="pass_remb">
                                      <label for="pass_chack">Remember Me</label>
                                    </span>
                                    <span class="pull-right"><a href="#">Forget Password?</a></span>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="text-uppercase login__btn">login now</button>
                                </div>
                            </form>
                        </div>
                    </div>  
                </div>  
            </div>
        </div>
    </div>
    <!--End of Login Form-->

    <!--Start of Registration Form-->
    <div id="register__form__wrap">
        <!-- Modal -->
        <div class="modal fade" id="registrationform" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-pop-up-content">
                            <div class="area-title text-center">
                                <h2>Register Now</h2>
                            </div>
                            <form method="post" action="#">
                                <div class="form-box">
                                    <input type="text" name="username" placeholder="Name">
                                    <input type="text" name="email" placeholder="Email">
                                    <input type="password" name="pass" placeholder="Password">
                                    <input type="text" name="age" placeholder="Age">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="text-uppercase register__btn">register</button>
                                </div>
                            </form>
                        </div>
                    </div>  
                </div>  
            </div>
        </div>
    </div>
    <!--End of Registration Form-->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>