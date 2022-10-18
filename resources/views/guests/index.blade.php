@extends('layouts.app')
@section('title', 'Home')
@section('content')
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
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-graduation-cap"></i> e-<strong>LogBook</strong>
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
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Great way to keep<br> track of daily activities and archievement!
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
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><a href="{{route('login')}}" class="btn btn-default">Get Started</a>
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
                            <h4>Why choose us</h4>
                            <p>We are simply the Most Featured e-Log Book System</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row service-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list border-radius">
                            <i class="fa fa-graduation-cap"></i>
                            <p><strong>Student Centric</strong></p>
                            <p>e-Log Book is built with the student in mind to effectively meet everyday need</p>
                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list border-radius">
                            <i class="fa fa-shopping-cart"></i>
                            <p><strong>No need to buy third party softwares</strong></p>
                            <p>There's defintely no need to purchase third party softwares we got you coverd with all you need and you'll need</p>
                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list border-radius">
                            <i class="fa fa-question"></i>
                            <p><strong>Easy to use</strong></p>
                            <p>e-Log Book is no science rocket. It is simple to use be ready to see resuts in no time</p>
                        </div><!-- end service -->
                    </div><!-- end col -->
                </div>

                {{-- <hr class="invis">

                <div class="callout row">
                    <div class="col-md-9">
                        <h4><i class="fa fa-graduation-cap fa-3x alignleft"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Vestibulum non</a><br> dolor ultricies, porttitor justo non.</h4>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="btn btn-primary btn-block">Get In Touch</a>
                    </div>
                </div><!-- end callout --> --}}

            </div>
        </section>
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
                            <i class="stat-count">612</i>
                            <p><strong>Happy Students</strong></p>
                            {{-- <p>Lorem ipsum m dolor sit amet, consectetur adipiing elit.dolor sit amet, consectetur adipiing elit. Integer lorem quam..</p> --}}
                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list">
                            <i class="stat-count">2250</i>
                            <p><strong>Active Logs</strong></p>
                            {{-- <p>Lorem ipsum m dolor sit amet, consectetur adipiing elit.dolor sit amet, consectetur adipiing elit. Integer lorem quam..</p> --}}
                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="feature-list">
                            <i class="stat-count">1443</i>
                            <p><strong>Completed Logs</strong></p>
                            {{-- <p>Lorem ipsum m dolor sit amet, consectetur adipiing elit.dolor sit amet, consectetur adipiing elit. Integer lorem quam..</p> --}}
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
                            <h4>Our Clients</h4>
                            <p>We service serveral universities and students all the world</p>
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
@endsection