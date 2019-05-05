@extends('layouts.app')

@section('title')
    About Quark
    @endsection


@section('content')
    <!--Breadcrumb START-->
    <div style="margin-bottom: 75px; @if(isset($settings->About_Background)) background: url({{'/storage/' .$settings->About_Background}}) fixed;@endif " class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
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
                <div class="full-background background-right min-350" style="background-image: url({{isset($settings->aboutImage)?url('/storage/'.$settings->aboutImage):''}});">
                    <div class="video-video-box-overlay">
                        <div class="video-video-box-button-sm">
                            <button class="video-video-play-icon pulsebox-1" data-izimodal-open=".izimodal">
                                <i class="fa fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Modal Start -->
                    <div class="izimodal" data-iziModal-width="800px" data-iziModal-fullscreen="true">
                        <iframe height="415" src="{{isset($settings->about_video_link)?url($settings->about_video_link):''}}" class="full-width shadow-primary"></iframe>
                    </div>
                    <!-- Modal End -->
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12">
                <div class="padding-10-perc background-80 background-no-repeat background-center">
                    <div class="section-heading text-left">
                        <small class="grey-color font-size-20 font-weight-normal">{{isset($settings->HeaderTitle)?$settings->HeaderTitle:''}}</small>
                        <h4 class="semi-bold font-size-35">{{isset($settings->aboutTitle)?$settings->aboutTitle:''}}</h4>
                    </div>
                    <div class="text-content mt-20">
                        {!! isset($settings->aboutDescription)?$settings->aboutDescription:'' !!}
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
                        <small class="grey-color font-size-20 font-weight-normal">{{isset($settings->HeaderTitle2)?$settings->HeaderTitle2:''}}</small>
                        <h4 class="semi-bold font-size-35">{{isset($settings->aboutTitle2)?$settings->aboutTitle2:''}}</h4>
                    </div>
                    <div class="text-content mt-20">
                        <p>{!!  isset($settings->aboutDescription2)?$settings->aboutDescription2:''   !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12">
                <div class="full-background min-350" style="background-image: url({{isset($settings->aboutImage2)?url('/storage/'.$settings->aboutImage2):''}});"></div>
            </div>
        </div>
    </div>
    <!--Countups Section END-->

    <!--Features Section START-->
    <div class="section-block grey-bg background-shape-3">
        <div class="container">
            <div class="section-heading text-center">
                <h3 class="semi-bold">{{isset($settings->aboutTitle3)?$settings->aboutTitle3:''}}</h3>
                <div class="section-heading-line line-thin"></div>
                {!!  isset($settings->aboutDescription3)?$settings->aboutDescription3:''   !!}
            </div>

        </div>
    </div>
    <!--Features Section END -->


@endsection
