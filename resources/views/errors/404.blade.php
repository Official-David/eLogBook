@extends('layouts.app')
@section('title', '404')
@section('content')

<section class="grey section">
    <div class="container">
        <div class="row">
            <div id="content" class="col-md-12 col-sm-12 col-xs-12">
                <div class="blog-wrapper">
                    <div class="row second-bread">  
                        <div class="col-md-6 text-left">
                            <h1>Page Not Found</h1>
                        </div><!-- end col -->
                        <div class="col-md-6 text-right">
                            <div class="bread">
                                <ol class="breadcrumb">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li class="active">404</li>
                                </ol>
                            </div><!-- end bread -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end blog-wrapper -->

                <div class="blog-wrapper">
                    <div class="blog-desc notfound text-center">
                     
                        <h3>404</h3>

                        <p class="lead">The page you are looking for no longer exists. Perhaps you can return<br> back to the site's homepage and see if you can find what you are looking for.</p>

                        <a href="{{route('home')}}" class="btn btn-default">Back to homepage</a>

                        <hr class="invis">

                    </div><!-- end desc -->
                </div><!-- end blog-wrapper -->
            </div><!-- end content -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->
@endsection