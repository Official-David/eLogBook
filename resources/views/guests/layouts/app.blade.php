<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="keywords" content="">

	<title>@yield('title') | {{config('app.name')}}</title>

	<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon" />
	<link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}" />
	<link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/images/apple-touch-icon-57x57.png')}}" />
	<link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/images/apple-touch-icon-72x72.png')}}" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/images/apple-touch-icon-76x76.png')}}" />
	<link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/images/apple-touch-icon-114x114.png')}}" />
	<link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/images/apple-touch-icon-120x120.png')}}" />
	<link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/images/apple-touch-icon-144x144.png')}}" />
	<link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/images/apple-touch-icon-152x152.png')}}" />
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/apple-touch-icon-180x180.png')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('assets/rs-plugin/css/settings.css')}}" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.3.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bxslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/style.css')}}">

	<!-- COLORS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		
</head>
<body>

    <div id="loader">
        <div class="loader-container">
            <img src="{{asset('assets/images/site.gif')}}" alt="" class="loader-site">
        </div>
    </div>

	<div id="wrapper">
		<div class="topbar">
        	<div class="container">
        		<div class="row">
	                <div class="col-md-6 text-left">
	                    <p><i class="fa fa-graduation-cap"></i> e-LogBook for effective logging.</p>
					</div><!-- end left -->

	                <div class="col-md-6 text-right">
						<ul class="list-inline">
                            <li>
                                <a class="social" href="#"><i class="fa fa-facebook"></i></a> 
                                <a class="social" href="#"><i class="fa fa-twitter"></i></a> 
                                <a class="social" href="#"><i class="fa fa-google-plus"></i></a> 
                                <a class="social" href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-lock"></i> Login & Register</a>
                                <div class="dropdown-menu">
                                    <form method="post"> 
                                        <div class="form-title">
                                            <h4>Login Area</h4>
                                            <hr>
                                        </div>
                                        <input class="form-control" type="text" name="username" placeholder="User Name"> 
                                        <div class="formpassword">
                                            <input class="form-control" type="password" name="password" placeholder="******"> 
                                        </div>
                                        <div class="clearfix"></div>
                                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                                        <hr>
                                        <h4><a href="#">Create an Account</a></h4>
                                    </form> 
                                </div>
                            </li>
                        </ul>
					</div><!-- end right -->
				</div><!-- end row -->
        	</div><!-- end container -->
		</div><!-- end topbar -->

		<header class="header">
            <div class="container">
                <div class="hovermenu ttmenu">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="fa fa-bars"></span>
                            </button>
                            <div class="logo">
                                <a class="navbar-brand" href="index-2.html"><img src="{{asset('assets/images/logo.png')}}" alt=""></a>
                            </div>
                        </div><!-- end navbar-header -->
            
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="page-about.html">Home</a></li>
                                <li><a href="page-about.html">About</a></li>
                                <li><a href="forums.html">Community</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="page-contact.html">Contact</a></li>
                            </ul><!-- end nav navbar-nav -->
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="btn btn-primary" href="course-login.html"><i class="fa fa-sign-in"></i> Register Now</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!-- end navbar navbar-default clearfix -->
                </div><!-- end menu 1 -->  
            </div><!-- end container -->
		</header><!-- end header -->
    
@yield('content')

        <footer class="dark footer section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-6 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>About LearnPLUS</h4>
                                <hr>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took...</p>

                            <a href="#" class="btn btn-default">Read More</a>
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-md-6 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Recent Tweets</h4>
                                <hr>
                            </div>

                            <div class="twitter-widget">
                                <ul class="latest-tweets">
                                    <li>
                                        <p><a href="#" title="">@Mark</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
                                        <span>2 hours ago</span>
                                    </li>
                                    <li>
                                        <p><a href="#" title="">@Envato</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
                                        <span>2 hours ago</span>
                                    </li>
                                </ul><!-- end latest-tweet -->
                            </div><!-- end twitter-widget -->

                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-md-6 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Popular Courses</h4>
                                <hr>
                            </div>

                            <ul class="popular-courses">
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="{{asset('assets/upload/service_01.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="{{asset('assets/upload/service_02.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="{{asset('assets/upload/service_03.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="{{asset('assets/upload/service_04.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="{{asset('assets/upload/service_05.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="{{asset('assets/upload/service_06.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="{{asset('assets/upload/service_07.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="{{asset('assets/upload/service_08.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="{{asset('assets/upload/service_09.png')}}" alt=""></a>
                                </li>
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-md-6 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Contact Details</h4>
                                <hr>
                            </div>

                            <ul class="contact-details">
                                <li><i class="fa fa-link"></i> <a href="#">www.yoursite.com</a></li>
                                <li><i class="fa fa-envelope"></i> <a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                                <li><i class="fa fa-phone"></i> +90 123 45 67</li>
                                <li><i class="fa fa-fax"></i> +90 123 45 68</li>
                                <li><i class="fa fa-home"></i> Envato INC 22 Elizabeth Str. Melbourne. Victoria 8777.</li>
                            </ul>

                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end section -->

        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <p>© 2015 {{config('app.name')}}</p>
                    </div><!-- end col -->
                    <div class="col-md-6 text-right">
                        <ul class="list-inline">
                            <li><a href="#">Terms of Usage</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>

                        </ul>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
	</div><!-- end wrapper -->

	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/retina.js')}}"></script>
    <script src="{{asset('assets/js/wow.js')}}"></script>
    <script src="{{asset('assets/js/carousel.js')}}"></script>
    <!-- CUSTOM PLUGINS -->
	<script src="{{asset('assets/js/custom.js')}}"></script>
    <!-- SLIDER REV -->
    <script src="{{asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('assets/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script>
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution(
            {
            dottedOverlay:"none",
            delay:16000,
            startwidth:1170,
            startheight:620,
            hideThumbs:200,     
            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,  
            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview3",  
            touchenabled:"on",
            onHoverStop:"on",
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,          
            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[10,7,4,3,2,5,4,3,2,1],
            parallaxDisableOnMobile:"off",           
            keyboardNavigation:"off",   
            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,
            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,
            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,  
            shadow:0,
            fullWidth:"on",
            fullScreen:"off",
            spinner:"spinner4",  
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",  
            autoHeight:"off",           
            forceFullWidth:"off",                         
            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,            
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0,
            fullScreenOffsetContainer: ""  
            }); 
        });
    </script>

    <script src="{{asset('assets/js/bxslider.js')}}"></script>
    <script type="text/javascript">
    /* ==============================================
        Vertical Carousel
    =============================================== */
    (function($) {
    "use strict";
        $('.bxslider').bxSlider({
            mode: 'vertical',
            minSlides: 1,
            maxSlides: 1,
            slideMargin: 0,
            pager: false,
            nextText:  '<i class="fa fa-arrow-down"></i>',
            prevText:  '<i class="fa fa-arrow-up"></i>',
            speed: 1000,
            auto: true
        });
    })(jQuery);
    </script>

</body>

</html>