@extends('layouts.app')

@section('title')
    About Quark
    @endsection


@section('content')
    <!--Breadcrumb START-->
    <div style="margin-top: 100px; margin-bottom: 75px;" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
        <div class="container text-center">
            <h1>About Us I</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us </a></li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb END-->


    <!--Info Section START-->
    <div  class="container-fluid pl-0 pr-0">
        <div class="row no-gutters reverse-xs">
            <div class="col-md-6 col-sm-12 col-12">
                <div class="full-background background-right min-350" style="background-image: url('/frontEnd/img/content/about/about-4.jpg');">
                    <div class="video-video-box-overlay">
                        <div class="video-video-box-button-sm">
                            <button class="video-video-play-icon pulsebox-1" data-izimodal-open=".izimodal">
                                <i class="fa fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Modal Start -->
                    <div class="izimodal" data-iziModal-width="800px" data-iziModal-fullscreen="true">
                        <iframe height="415" src="https://www.youtube.com/embed/nrJtHemSPW4" class="full-width shadow-primary"></iframe>
                    </div>
                    <!-- Modal End -->
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12">
                <div class="padding-10-perc background-80 background-no-repeat background-center">
                    <div class="section-heading text-left">
                        <small class="grey-color font-size-20 font-weight-normal">Strategies to win in the knowledge economy</small>
                        <h4 class="semi-bold font-size-35">Marketing solutions to win you more customers!</h4>
                    </div>
                    <div class="text-content mt-20">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa</p>
                    </div>
                    <div class="">
                        <div class="progress-bar-title clearfix">
                            <h5>Budget Analyst</h5>
                            <h6>25%</h6>
                        </div>
                        <div class="progress progress-bar-sm">
                            <div class="progress-bar progress-bar-gradient slideInLeft wow animated" style="width:25%"></div>
                        </div>
                        <div class="progress-bar-title clearfix">
                            <h5>Digital Marketing</h5>
                            <h6>50%</h6>
                        </div>
                        <div class="progress progress-bar-sm">
                            <div class="progress-bar progress-bar-gradient slideInLeft wow animated" style="width:50%"></div>
                        </div>
                        <div class="progress-bar-title clearfix">
                            <h5>Social Media Managment</h5>
                            <h6>75%</h6>
                        </div>
                        <div class="progress progress-bar-sm">
                            <div class="progress-bar progress-bar-gradient slideInLeft wow animated" style="width:75%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Info Section END-->

    <!--Countups Section START-->
    <div class="container-fluid pl-0 pr-0">
        <div class="row no-gutters">
            <div class="col-md-6 col-sm-12 col-12">
                <div class="padding-10-perc">
                    <div class="section-heading text-left">
                        <small class="grey-color font-size-20 font-weight-normal">Accurate data for precision marketing</small>
                        <h4 class="semi-bold font-size-35">Brand marketing that puts your vision into action!</h4>
                    </div>
                    <div class="row mt-45">
                        <div class="col-sm-5 col-12">
                            <div class="countup-box-2">
                                <h3 class="countup semi-bold">29</h3><span class="semi-bold"> k</span>
                                <h4>Team Members</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                            </div>
                        </div>
                        <div class="col-sm-5 col-12 offset-sm-1">
                            <div class="countup-box-2">
                                <h3 class="countup semi-bold">173</h3><span class="semi-bold"> k</span>
                                <h4>Happy Clients</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12">
                <div class="full-background min-350" style="background-image: url(/frontEnd/img/content/bgs/bg3.jpg);"></div>
            </div>
        </div>
    </div>
    <!--Countups Section END-->

    <!--Features Section START-->
    <div class="section-block grey-bg background-shape-3">
        <div class="container">
            <div class="section-heading text-center">
                <h3 class="semi-bold">Planning & Consulting</h3>
                <div class="section-heading-line line-thin"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br>ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <div class="row mt-20">
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="features-box-3 text-center">
                        <div class="features-box-3-icon">
                            <i class="icon-message-1"></i>
                        </div>
                        <h4>Business Development</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="features-box-3 text-center">
                        <div class="features-box-3-icon">
                            <i class="icon-worldwide"></i>
                        </div>
                        <h4>Risk Management</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="features-box-3 text-center">
                        <div class="features-box-3-icon">
                            <i class="icon-network"></i>
                        </div>
                        <h4>Trading & Stocking</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="features-box-3 text-center">
                        <div class="features-box-3-icon">
                            <i class="icon-analytics"></i>
                        </div>
                        <h4>Financial Services</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="features-box-3 text-center">
                        <div class="features-box-3-icon">
                            <i class="icon-development"></i>
                        </div>
                        <h4>Strategic planning</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="features-box-3 text-center">
                        <div class="features-box-3-icon">
                            <i class="icon-communications"></i>
                        </div>
                        <h4>Strategic Planning</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Features Section END -->


@endsection
