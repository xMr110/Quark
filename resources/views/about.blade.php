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
                    <div class="text-content mt-20">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa</p>
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

        </div>
    </div>
    <!--Features Section END -->


@endsection
