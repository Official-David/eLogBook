@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<section class="grey page-title">
<div class="container">
<div class="row">  
<div class="col-md-6 text-left">
<h1>Dashboard</h1>
</div><!-- end col -->
<div class="col-md-6 text-right">
<div class="bread">
<ol class="breadcrumb">
    <li><a href="#">{{ucFirst(Auth::User()->role)}}</a></li>
                        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
</ol>
</div><!-- end bread -->
</div><!-- end col -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end section -->

<section class="white section">
    <div class="container">
        <div class="row course-list">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="shop-item-list entry">
                    <div class="">
                        <img src="{{asset('assets/upload/course_01.png')}}" alt="">
                        <div class="magnifier">
                        </div>
                    </div>
                    <div class="shop-item-title text-center clearfix">
                        <h4><a href="{{route('student.profile', Auth::User()->id)}}">Update Profile</a></h4>
                    </div><!-- end shop-item-title -->
                </div><!-- end relative -->
            </div><!-- end col -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="shop-item-list entry">
                    <div class="">
                        <img src="{{asset('assets/upload/course_01.png')}}" alt="">
                        <div class="magnifier">
                        </div>
                    </div>
                    <div class="shop-item-title text-center clearfix">
                        <h4><a href="#">View Logs</a></h4>
                    </div><!-- end shop-item-title -->
                </div><!-- end relative -->
            </div><!-- end col -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="shop-item-list entry">
                    <div class="">
                        <img src="{{asset('assets/upload/course_01.png')}}" alt="">
                        <div class="magnifier">
                        </div>
                    </div>
                    <div class="shop-item-title text-center clearfix">
                        <h4><a href="#">Add Log</a></h4>
                    </div><!-- end shop-item-title -->
                </div><!-- end relative -->
            </div><!-- end col -->
        </div>
    </div><!-- end container -->
</section><!-- end section -->
@endsection