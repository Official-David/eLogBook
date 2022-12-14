<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from templatevisual.com/demo/learnplus/course-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Oct 2022 20:16:35 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="keywords" content="">

	<title>LearnPLUS | Learning Management System HTML Template</title>

	<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico" type="image/x-icon')}}" />
	<link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}" />
	<link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/images/apple-touch-icon-57x57.png')}}" />
	<link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/images/apple-touch-icon-72x72.png')}}" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/images/apple-touch-icon-76x76.png')}}" />
	<link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/images/apple-touch-icon-114x114.png')}}" />
	<link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/images/apple-touch-icon-120x120.png')}}" />
	<link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/images/apple-touch-icon-144x144.png')}}" />
	<link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/images/apple-touch-icon-152x152.png')}}" />
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/apple-touch-icon-180x180.png')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('assets/rs-plugin/css/settings.css" media="screen')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.3.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/style.css')}}">

	<!-- COLORS -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		
</head>
<body class="login">

    <div id="loader">
        <div class="loader-container">
            <img src="images/site.gif" alt="" class="loader-site">
        </div>
    </div>
    
	<div id="wrapper">
    <div class="container">
        <div class="row login-wrapper">
            <div class="col-md-6 col-md-offset-3">
                <div class="logo logo-center">
                    <a href="{{route('home')}}"><img src="{{asset('assets/images/login-logo.png')}}" alt=""></a>
                </div>
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="{{route('login')}}" method="post" role="form" style="display: block;">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="user_id" id="username" tabindex="1" class="form-control" placeholder="User ID" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                        <label for="remember">  &nbsp; Remember Me</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit" class="form-control btn btn-default">Login Account</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            <form id="register-form"  action="{{ route('register') }}" method="post" role="form" style="display: none;">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Last Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="user_id" id="username" tabindex="1" class="form-control" placeholder="User ID">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    {{-- <div class="form-group">
                                        <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                    </div> --}}
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit" class="form-control btn btn-default btn-block">Register an Account</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</div><!-- end wrapper -->

	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/retina.js')}}"></script>
    <script src="{{asset('assets/js/wow.js')}}"></script>
    <script src="{{asset('assets/js/carousel.js')}}"></script>
    <!-- CUSTOM PLUGINS -->
	<script src="{{asset('assets/js/custom.js')}}"></script>

</body>

</html>