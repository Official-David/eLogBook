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

	<title>LearnPLUS | Learning Management System HTML Template</title>

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

        <section class="slider-section">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="{{asset('assets/upload/slider_new_01.jpg')}}')}}"  data-saveperformance="off"  data-title="Slide">
                            <img src="{{asset('assets/upload/slider_new_01.jpg')}}"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="220" 
                                data-speed="1000"
                                data-start="600"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-graduation-cap"></i> Learn<strong>PLUS</strong> Site Template
                            </div>
                            <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="320" 
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Great Theme For Education, University Learning Websites<br> with tons of options and custom sections!
                            </div>
                            <div class="tp-caption text-center lft tp-resizeme"
                                data-x="center"
                                data-y="390" 
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="btn btn-default">Start Learning</a> <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </li>

                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" data-delay="5000">
                        <!-- MAIN IMAGE -->
                            <img src="{{asset('assets/images/dummy.png')}}"  alt="video_business"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                    
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-fade fadeout fullscreenvideo"
                                data-x="0"
                                data-y="0"
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power4.easeOut"
                                data-endspeed="1500"
                                data-endeasing="Power4.easeIn"
                                data-autoplay="true"
                                data-autoplayonlyfirsttime="false"
                                data-nextslideatend="true"
                                 data-forceCover="1" data-aspectratio="16:9" data-forcerewind="on"
                                 style="z-index: 2"><video id="revvideo" class="video-js vjs-default-skin" preload="none"
                                poster='{{asset('assets/images/dummy.png')}}' data-setup="{}">
                                <source src='{{asset('assets/upload/video.mp4')}}' type='video/mp4' />
                                <source src='{{asset('assets/upload/video.webm')}}' type='video/webm' />
                                <source src='{{asset('assets/upload/video.ogv')}}' type='video/ogg' />
                                </video>
                            </div>
                            <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="220" 
                                data-speed="1000"
                                data-start="600"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-html5"></i> SUPPORTED <strong>HTML5 VIDEO</strong> SLIDER
                            </div>
                            <div class="tp-caption slider_layer_02 lightcolor text-center lft tp-resizeme"
                                data-x="center"
                                data-y="320" 
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">The LearnPLUS Compatible With Revolution Slider<br> You Can Use Your Own Video Slider..
                            </div>
                            <div class="tp-caption text-center lft tp-resizeme"
                                data-x="center"
                                data-y="390" 
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="btn btn-default">Start Learning</a> <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </li>
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="{{asset('assets/upload/slider_new_03.jpg')}}')}}"  data-saveperformance="off"  data-title="Slide">
                            <img src="{{asset('assets/upload/slider_new_03.jpg')}}"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <div class="tp-caption slider_layer_05 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="140" 
                                data-speed="1000"
                                data-start="600"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-graduation-cap"></i> 
                            </div>
                            <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="250" 
                                data-speed="1000"
                                data-start="600"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Learning Management System
                            </div>
                            <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="360" 
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Great Theme For Education, University Learning Websites<br> with tons of options and custom sections!
                            </div>
                            <div class="tp-caption text-center lft tp-resizeme"
                                data-x="center"
                                data-y="440" 
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"> <a target="_blank" href="#" class="btn btn-primary">Purchase Now</a> <a target="_blank" href="#" class="btn btn-default">Read More About</a>
                            </div>
                        </li>
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="{{asset('assets/upload/slider_new_02.jpg')}}')}}"  data-saveperformance="off"  data-title="Slide">
                            <img src="{{asset('assets/upload/slider_new_02.jpg')}}"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption slider_layer_04 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="200" 
                                data-speed="1000"
                                data-start="600"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><strong>Works with any Devices</strong>
                            </div>
                            <div class="tp-caption slider_layer_03 text-center lft tp-resizeme"
                                data-x="300"
                                data-y="240" 
                                data-speed="1000"
                                data-start="600"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-html5"></i> 
                            </div>
                            <div class="tp-caption slider_layer_03 text-center lft tp-resizeme"
                                data-x="400"
                                data-y="240" 
                                data-speed="1000"
                                data-start="600"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-tablet"></i> 
                            </div>
                            <div class="tp-caption slider_layer_03 text-center lft tp-resizeme"
                                data-x="500"
                                data-y="240" 
                                data-speed="1000"
                                data-start="600"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-laptop"></i> 
                            </div>
                            <div class="tp-caption slider_layer_03 text-center lft tp-resizeme"
                                data-x="620"
                                data-y="240" 
                                data-speed="1000"
                                data-start="600"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-mobile"></i> 
                            </div>
                            <div class="tp-caption slider_layer_03 text-center lft tp-resizeme"
                                data-x="800"
                                data-y="240" 
                                data-speed="1000"
                                data-start="600"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-css3"></i> 
                            </div>
                            <div class="tp-caption slider_layer_03 text-center lft tp-resizeme"
                                data-x="700"
                                data-y="240" 
                                data-speed="1000"
                                data-start="600"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-pencil"></i> 
                            </div>
                            <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="340" 
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Great Theme For Education, University Learning Websites<br> with tons of options and custom sections!
                            </div>
                            <div class="tp-caption text-center lft tp-resizeme"
                                data-x="center"
                                data-y="410" 
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><a target="_blank" href="http://www.responsinator.com/?url=http%3A%2F%2Ftemplatevisual.com%2Fdemo%2Flearnplus%2F" class="btn btn-default">Test Responsive Now</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="white section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h4>Our Features</h4>
                            <p>Simply The Most Featured Rich HTML5 Learning Management System</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row service-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list border-radius">
                            <i class="fa fa-graduation-cap"></i>
                            <p><strong>Multi-Tier Courses</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer loectetur adipiing elit. Integer lectetur adipiing elit. Integer lrem quam..</p>
                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list border-radius">
                            <i class="fa fa-shopping-cart"></i>
                            <p><strong>Sell Online Courses</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer loectetur adipiing elit. Integer lectetur adipiing elit. Integer lrem quam..</p>
                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list border-radius">
                            <i class="fa fa-question"></i>
                            <p><strong>Advanced Quizzing</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer loectetur adipiing elit. Integer lectetur adipiing elit. Integer lrem quam..</p>
                        </div><!-- end service -->
                    </div><!-- end col -->
                </div>

                <hr class="invis">

                <div class="callout row">
                    <div class="col-md-9">
                        <h4><i class="fa fa-graduation-cap fa-3x alignleft"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Vestibulum non</a><br> dolor ultricies, porttitor justo non.</h4>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="btn btn-primary btn-block">Get In Touch</a>
                    </div>
                </div><!-- end callout -->

            </div>
        </section>

        <section class="grey section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h4>Popular Courses</h4>
                            <p>Listed Below Our Most Popular Courses</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div id="owl-featured" class="owl-custom">
                    <div class="owl-featured">
                        <div class="shop-item-list entry">
                            <div class="">
                                <img src="{{asset('assets/upload/course_01.png')}}" alt="">
                                <div class="magnifier">
                                </div>
                            </div>
                            <div class="shop-item-title clearfix">
                                <h4><a href="course-single.html">Learn Web Design & Development</a></h4>
                                <div class="shopmeta">
                                    <span class="pull-left">12 Student</span>
                                    <div class="rating pull-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><!-- end rating -->
                                </div><!-- end shop-meta -->
                            </div><!-- end shop-item-title -->
                            <div class="visible-buttons">
                                <a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                                <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
                            </div><!-- end buttons -->
                        </div><!-- end relative -->
                    </div><!-- end col -->

                    <div class="owl-featured">
                        <div class="shop-item-list entry">
                            <div class="">
                                <img src="{{asset('assets/upload/course_02.png')}}" alt="">
                                <div class="magnifier">
                                </div>
                            </div>
                            <div class="shop-item-title clearfix">
                                <h4><a href="course-single.html">Graphic Design & Logo Mockups Course</a></h4>
                                <div class="shopmeta">
                                    <span class="pull-left">21 Student</span>
                                    <div class="rating pull-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div><!-- end rating -->
                                </div><!-- end shop-meta -->
                            </div><!-- end shop-item-title -->
                            <div class="visible-buttons">
                                <a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                                <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
                            </div><!-- end buttons -->
                        </div><!-- end relative -->
                    </div><!-- end col -->

                    <div class="owl-featured">
                        <div class="shop-item-list entry">
                            <div class="">
                                <img src="{{asset('assets/upload/course_03.png')}}" alt="">
                                <div class="magnifier">
                                </div>
                            </div>
                            <div class="shop-item-title clearfix">
                                <h4><a href="course-single.html">Social Media Network & Marketing</a></h4>
                                <div class="shopmeta">
                                    <span class="pull-left">98 Student</span>
                                    <div class="rating pull-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div><!-- end rating -->
                                </div><!-- end shop-meta -->
                            </div><!-- end shop-item-title -->
                            <div class="visible-buttons">
                                <a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                                <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
                            </div><!-- end buttons -->
                        </div><!-- end relative -->
                    </div><!-- end col -->

                    <div class="owl-featured">
                        <div class="shop-item-list entry">
                            <div class="">
                                <img src="{{asset('assets/upload/course_04.png')}}" alt="">
                                <div class="magnifier">
                                </div>
                            </div>
                            <div class="shop-item-title clearfix">
                                <h4><a href="course-single.html">WordPress Blogging, Tumblr and Blogger</a></h4>
                                <div class="shopmeta">
                                    <span class="pull-left">98 Student</span>
                                    <div class="rating pull-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div><!-- end rating -->
                                </div><!-- end shop-meta -->
                            </div><!-- end shop-item-title -->
                            <div class="visible-buttons">
                                <a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                                <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
                            </div><!-- end buttons -->
                        </div><!-- end relative -->
                    </div><!-- end col -->
                </div><!-- end owl-featured -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section darkskin fullscreen paralbackground parallax" style="background-image:url('{{asset('assets/upload/parallax_01.jpg')}}');" data-img-width="1627" data-img-height="868" data-diff="100">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h4>The Working Process</h4>
                            <p>We Shared Awesome Articles for Your Next Sites</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row service-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list">
                            <i class="fa fa-graduation-cap"></i>
                            <p><strong>Multi-Tier Courses</strong></p>
                            <p>Lorem ipsum m dolor sit amet, consectetur adipiing elit.dolor sit amet, consectetur adipiing elit. Integer lorem quam..</p>
                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list">
                            <i class="fa fa-shopping-cart"></i>
                            <p><strong>Sell Online Courses</strong></p>
                            <p>Lorem ipsum m dolor sit amet, consectetur adipiing elit.dolor sit amet, consectetur adipiing elit. Integer lorem quam..</p>
                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list">
                            <i class="fa fa-question"></i>
                            <p><strong>Advanced Quizzing</strong></p>
                            <p>Lorem ipsum m dolor sit amet, consectetur adipiing elit.dolor sit amet, consectetur adipiing elit. Integer lorem quam..</p>
                        </div><!-- end service -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row button-wrapper">
                    <div class="col-md-12">
                        <div class="text-center">
                            <a href="#" class="btn btn-default">Start New Project</a>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="white section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h4>Why Learning Template?</h4>
                            <p>Listed Below Why Our Template Are Powerful and Easy to Use?</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="why-us text-right wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <i class="fa fa-html5 alignright"></i>
                            <h4>HTML5 Technology</h4>
                            <p>Integer non dapibus fermentum nibh volutpat, accumsan purus.</p>
                        </div>
                        <div class="why-us text-right wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s">
                            <i class="fa fa-laptop alignright"></i>
                            <h4>Works Any Devices</h4>
                            <p>Integer non dapibus fermentum nibh volutpat, accumsan purus.</p>
                        </div>
                        <div class="why-us text-right wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.1s">
                            <i class="fa fa-home alignright"></i>
                            <h4>10 Beautiful Homepage</h4>
                            <p>Integer non dapibus fermentum nibh volutpat, accumsan purus.</p>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-4 col-sm-6">
                        <div class="image-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <img src="{{asset('assets/upload/device_02.png')}}" alt="" class="img-responsive">
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-4 col-sm-6">
                        <div class="why-us text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <i class="fa fa-clock-o alignleft"></i>
                            <h4>Real Time Saver</h4>
                            <p>Integer non dapibus fermentum nibh volutpat, accumsan purus.</p>
                        </div>
                        <div class="why-us text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.9s">
                            <i class="fa fa-gears alignleft"></i>
                            <h4>Powerful Options</h4>
                            <p>Integer non dapibus fermentum nibh volutpat, accumsan purus.</p>
                        </div>
                        <div class="why-us text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.3s">
                            <i class="fa fa-leaf alignleft"></i>
                            <h4>Easily Customisable</h4>
                            <p>Integer non dapibus fermentum nibh volutpat, accumsan purus.</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="grey section">
            <div class="row-fluid">
                <div class="col-md-6 myimg"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-6">
                            <div class="section-container nopadding">
                                <div class="textrotate">
                                    <ul class="bxslider">
                                        <li>
                                            <div class="big-title">
                                                <p class="lead">Vivamus quis sapien cura</p>
                                                <h3><span>WHO</span> WE ARE</h3>
                                                <div class="border-title"></div>
                                            </div><!-- big-title -->
                                            <p>Phasellus nec dolor.Sed ornare semper ipsum. Sed pede orci volutpat sed congue vels gravida non lacus.Vivamus quis sed metus quisque gravida Quisque blandit sem esed  erat. Maecenas porttitor neque eu sem. Nullam lectus neque, blandit quis mattis quis varius eu eros. Vivamus ads metus. Mauris at tellus at sapien.</p>
                                            <a href="#" class="btn btn-default" title="">Learn More</a>
                                        </li>
                                        <li>
                                            <div class="big-title">
                                                <p class="lead">Vivamus quis sapien cura</p>
                                                <h3><span>WHAT</span> WE DO</h3>
                                                <div class="border-title"></div>
                                            </div><!-- big-title -->
                                            <p>Phasellus nec dolor.Sed ornare semper ipsum. Sed pede orci volutpat sed congue vels gravida non lacus.Vivamus quis sed metus quisque gravida Quisque blandit sem esed  erat. Maecenas porttitor neque eu sem. Nullam lectus neque, blandit quis mattis quis varius eu eros. Vivamus ads metus. Mauris at tellus at sapien.</p>
                                            <a href="#" class="btn btn-default" title="">Get a Quote</a>
                                        </li>
                                        <li>
                                            <div class="big-title">
                                                <p class="lead">Vivamus quis sapien cura</p>
                                                <h3><span>OUR</span> MISSION</h3>
                                                <div class="border-title"></div>
                                            </div><!-- big-title -->
                                            <p>Phasellus nec dolor.Sed ornare semper ipsum. Sed pede orci volutpat sed congue vels gravida non lacus.Vivamus quis sed metus quisque gravida Quisque blandit sem esed  erat. Maecenas porttitor neque eu sem. Nullam lectus neque, blandit quis mattis quis varius eu eros. Vivamus ads metus. Mauris at tellus at sapien.</p>
                                            <a href="#" class="btn btn-default" title="">Contact Us</a>
                                        </li>
                                    </ul>
                                </div><!-- end textrotate -->
                            </div>
                        </div>
                    </div><!--end of row-->
                </div><!-- end container -->
            </div><!-- end row fluid -->
        </section>

        <section class="white section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h4>Meet Our Team</h4>
                            <p>We build LearnPLUS with professional and love</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-widget">
                            <div class="team-members row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="team">
                                        <img src="{{asset('assets/upload/team_01.jpg')}}" alt="" class="img-responsive wow fadeInUp">
                                        <div class="team-hover-content">
                                            <h5>Bryan Kennedy</h5>
                                            <span>Project Manager</span>
                                            <p>Curabitur ultrices nec est nec vestibulum. Maecenas tincidunt pretium lacinia. Nullam purus dolor, tempor et lacinia quis, viverra quis erat.</p>
                                            <div class="social">
                                                <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>     
                                                <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- end team -->
                                </div><!-- end col -->

                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="team">
                                        <img src="{{asset('assets/upload/team_02.jpg')}}" alt="" class="img-responsive wow fadeInUp">
                                        <div class="team-hover-content">
                                            <h5>Adam DEO</h5>
                                            <span>SEO Manager</span>
                                            <p>Curabitur ultrices nec est nec vestibulum. Maecenas tincidunt pretium lacinia. Nullam purus dolor, tempor et lacinia quis, viverra quis erat.</p>
                                            <div class="social">
                                                <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>     
                                                <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- end team -->
                                </div><!-- end col -->

                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="team">
                                        <img src="{{asset('assets/upload/team_03.jpg')}}" alt="" class="img-responsive wow fadeInUp">
                                        <div class="team-hover-content">
                                            <h5>Jenny Kennedy</h5>
                                            <span>Advertising Manager</span>
                                            <p>Curabitur ultrices nec est nec vestibulum. Maecenas tincidunt pretium lacinia. Nullam purus dolor, tempor et lacinia quis, viverra quis erat.</p>
                                            <div class="social">
                                                <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>     
                                                <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- end team -->
                                </div><!-- end col -->

                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="team">
                                        <img src="{{asset('assets/upload/team_04.jpg')}}" alt="" class="img-responsive wow fadeInUp">
                                        <div class="team-hover-content">
                                            <h5>Jennifer DEO</h5>
                                            <span>Social Manager</span>
                                            <p>Curabitur ultrices nec est nec vestibulum. Maecenas tincidunt pretium lacinia. Nullam purus dolor, tempor et lacinia quis, viverra quis erat.</p>
                                            <div class="social">
                                                <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>     
                                                <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                                                <a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- end team -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end content-widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section fullscreen paralbackground parallax" style="background-image:url('{{asset('assets/upload/parallax_02.jpg')}}');" data-img-width="1627" data-img-height="868" data-diff="100">
            <div class="overlay green-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h4>Happy Milistones</h4>
                            <p>We Have Powerful Milistones With Fun Fact Effects</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row service-center funfactors">
                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list">
                            <i class="stat-count">3312</i>
                            <p><strong>Happy Students</strong></p>
                            <p>Lorem ipsum m dolor sit amet, consectetur adipiing elit.dolor sit amet, consectetur adipiing elit. Integer lorem quam..</p>
                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list">
                            <i class="stat-count">450</i>
                            <p><strong>Active Courses</strong></p>
                            <p>Lorem ipsum m dolor sit amet, consectetur adipiing elit.dolor sit amet, consectetur adipiing elit. Integer lorem quam..</p>
                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list">
                            <i class="stat-count">8443</i>
                            <p><strong>Quiz Completed</strong></p>
                            <p>Lorem ipsum m dolor sit amet, consectetur adipiing elit.dolor sit amet, consectetur adipiing elit. Integer lorem quam..</p>
                        </div><!-- end service -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="grey section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h4>From The Blog</h4>
                            <p>We Shared Awesome Articles for Your Next Sites</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row blog-widget">
                    <div class="col-md-4 col-sm-6">
                        <div class="blog-wrapper">
                            <div class="blog-title">
                                <a class="category_title" href="#" title="">Digital Marketing</a>
                                <h2><a href="single.html" title="">Best Learning Management System for Ever</a></h2>
                                <div class="post-meta">
                                    <span>
                                    <i class="fa fa-user"></i>
                                    <a href="#">John</a>
                                    </span>
                                    <span>
                                    <i class="fa fa-tag"></i>
                                    <a href="#">Marketing</a>
                                    </span>
                                    <span>
                                    <i class="fa fa-comments"></i>
                                    <a href="#">19 Comments</a>
                                    </span>
                                </div>
                            </div><!-- end blog-title -->
                            <div class="blog-image">
                                <a href="single.html" title=""><img src="{{asset('assets/upload/blog_01.jpg')}}" alt="" class="img-responsive"></a>
                            </div><!-- end image -->
                            <div class="blog-desc">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theown printer took.</p>
                                <a href="single.html" class="btn btn-default btn-block">Read More</a>
                            </div><!-- end desc -->
                        </div><!-- end blog-wrapper -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="blog-wrapper">
                            <div class="blog-title">
                                <a class="category_title" href="#" title="">SEO Marketing</a>
                                <h2><a href="single.html" title="">Best SEO Google System and Algoritmas</a></h2>
                                <div class="post-meta">
                                    <span>
                                    <i class="fa fa-user"></i>
                                    <a href="#">Jenny</a>
                                    </span>
                                    <span>
                                    <i class="fa fa-tag"></i>
                                    <a href="#">SEO</a>
                                    </span>
                                    <span>
                                    <i class="fa fa-comments"></i>
                                    <a href="#">44 Comments</a>
                                    </span>
                                </div>
                            </div><!-- end blog-title -->
                            <div class="blog-image">
                                <a href="single.html" title=""><img src="{{asset('assets/upload/blog_02.jpg')}}" alt="" class="img-responsive"></a>
                            </div><!-- end image -->
                            <div class="blog-desc">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theown printer took.</p>
                                <a href="single.html" class="btn btn-default btn-block">Read More</a>
                            </div><!-- end desc -->
                        </div><!-- end blog-wrapper -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="blog-wrapper">
                            <div class="blog-title">
                                <a class="category_title" href="#" title="">Commerce Marketing</a>
                                <h2><a href="single.html" title="">Never Forget! WooCommerce is an Amazing Plugin</a></h2>
                                <div class="post-meta">
                                    <span>
                                    <i class="fa fa-user"></i>
                                    <a href="#">Bob Doe</a>
                                    </span>
                                    <span>
                                    <i class="fa fa-tag"></i>
                                    <a href="#">Commerce</a>
                                    </span>
                                    <span>
                                    <i class="fa fa-comments"></i>
                                    <a href="#">0 Comment</a>
                                    </span>
                                </div>
                            </div><!-- end blog-title -->
                            <div class="blog-image">
                                <a href="single.html" title=""><img src="{{asset('assets/upload/blog_03.jpg')}}" alt="" class="img-responsive"></a>
                            </div><!-- end image -->
                            <div class="blog-desc">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theown printer took.</p>
                                <a href="single.html" class="btn btn-default btn-block">Read More</a>
                            </div><!-- end desc -->
                        </div><!-- end blog-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="white section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h4>Happy Students</h4>
                            <p>What Our Students Say About LearnPLUS</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="testimonial">
                            <img class="alignleft img-circle" src="{{asset('assets/upload/student_01.png')}}" alt="">
                            <p>Lorem Ipsum is simply dummy text of the printing and industry. </p>
                            <div class="testimonial-meta">
                            <h4>John DOE <small><a href="#">envato.com</a></small></h4>
                            </div>
                        </div><!-- end dmbox -->
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="testimonial">
                            <img class="alignleft img-circle" src="{{asset('assets/upload/student_02.png')}}" alt="">
                            <p>Lorem Ipsum is simply dummy text of the most popular items.</p>
                            <div class="testimonial-meta">
                            <h4>Jenny Anderson <small><a href="#">photodune.com</a></small></h4>
                            </div>
                        </div><!-- end dmbox -->
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="testimonial">
                            <img class="alignleft img-circle" src="{{asset('assets/upload/student_03.png')}}" alt="">
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            <div class="testimonial-meta">
                            <h4>Mark BOBS <small><a href="#">tutsplus.com</a></small></h4>
                            </div>
                        </div><!-- end dmbox -->
                    </div><!-- end col-lg-4 -->
                </div><!-- end row -->

                <div class="button-wrapper text-center">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since<br> the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    <a href="#" class="btn btn-default border-radius"><i class="fa fa-sign-in"></i> Join Us Today</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#" class="btn btn-primary"><i class="fa fa-download"></i> Download PDF</a> 
                </div><!-- end button-wrapper -->

            </div><!-- end container -->
        </section><!-- end section -->

        <section class="grey section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h4>Our Clients</h4>
                            <p>What University's Love Work With Us and With Our Teachers</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-md-2">
                        <img src="{{asset('assets/upload/client_01.png')}}" alt="" class="img-responsive img-thumbnail">
                    </div>

                    <div class="col-md-2">
                        <img src="{{asset('assets/upload/client_02.png')}}" alt="" class="img-responsive img-thumbnail">
                    </div>

                    <div class="col-md-2">
                        <img src="{{asset('assets/upload/client_03.png')}}" alt="" class="img-responsive img-thumbnail">
                    </div>

                    <div class="col-md-2">
                        <img src="{{asset('assets/upload/client_04.png')}}" alt="" class="img-responsive img-thumbnail">
                    </div>
                    
                    <div class="col-md-2">
                        <img src="{{asset('assets/upload/client_05.png')}}" alt="" class="img-responsive img-thumbnail">
                    </div>

                    <div class="col-md-2">
                        <img src="{{asset('assets/upload/client_06.png')}}" alt="" class="img-responsive img-thumbnail">
                    </div>
                </div><!-- end button-wrapper -->
            </div><!-- end container -->
        </section><!-- end section -->  

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
                        <p>© 2015 LearnPLUS Pty Ltd. by <a href="#">Template Visual</a></p>
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