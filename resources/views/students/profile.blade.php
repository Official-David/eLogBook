@extends('layouts.app')
@section('title', 'Profile')
@section('content')

    <section class="grey page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1>Profile</h1>
                </div><!-- end col -->
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="#">{{ ucFirst(Auth::User()->role) }}</a></li>
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="active">Profile</li>
                        </ol>
                    </div><!-- end bread -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="white section">
        <div class="container">
            <div class="row">
                <div id="course-left-sidebar" class="col-md-3">
                    <div class="course-image-widget">
                        {{-- <img src="{{ asset('assets/upload/student_06.png') }}" alt="" class="img-responsive"> --}}
                        <img src="#" alt="" class="img-responsive">
                    </div><!-- end image widget -->
                    <div class="course-meta">
                        <p>{{ Auth::User()->first_name . ' ' . Auth::User()->last_name }}</p>
                        {{-- <hr>
                        <p>My Profile <small><a href="course-account.html">Edit</a></small></p>
                        <hr>
                        <p>My Courses <small class="label label-primary">12</small></p>
                        <hr>
                        <p>Completed Quiz <small class="label label-primary">40</small></p>
                        <hr>
                        <p>Achievements <small class="label label-primary"><a href="course-achievements.html">5</a></small>
                        </p>
                        <hr>
                        <p>Messages <small class="label label-primary"><a href="#">0</a></small></p>
                        <hr>
                        <p>My Friends <small class="label label-primary"><a href="#">31</a></small></p> --}}
                    </div><!-- end meta -->
                </div><!-- end col -->


                <div id="course-content" class="col-md-9">
                    <div class="course-description">
                        <h3 class="course-title">Edit Profile</h3>

                        <div class="edit-profile">
                            <form action="{{route('update.student.profile', Auth::User()->id)}}" method="post" role="form">
                                @csrf
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="first_name" value="{{Auth::User()->first_name}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="last_name" value="{{Auth::User()->last_name}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="phone_number" value="{{Auth::User()->phone_number}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" name="email" value="{{Auth::User()->email}}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>School</label>
                                        <input type="text" class="form-control" name="school" value="{{Auth::User()->school}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Matriculation Number</label>
                                        <input type="text" class="form-control" name="matriculation_number" value="{{Auth::User()->matriculation_number}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Year Of Study</label>
                                        <input type="text" class="form-control" name="year_of_study" value="{{Auth::User()->year_of_study}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control" name="company_name" value="{{Auth::User()->company_name}}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Supervisor's Name</label>
                                        <input type="text" class="form-control" name="supervisors_name" value="{{Auth::User()->supervisor_name}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Bank Name</label>
                                        <input type="text" class="form-control" name="bank_name" value="{{Auth::User()->bank_name}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Bank Account Number</label>
                                        <input type="text" class="form-control" name="bank_account_number" value="{{Auth::User()->bank_account_number}}">
                                    </div>
                                </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Changes</button>
                            </form>
                        </div><!-- end edit profile -->
                    </div><!-- end desc -->

                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

@endsection
