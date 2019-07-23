@extends('layouts.app')
@section('title')
    HomePage
    @endsection


@section('style')
    <style>
        @media only screen and (max-width: 450px) {
            .slide-title{
                max-width: 100%!important;
                max-height: 100%!important;
                line-height: normal!important;

                font-size: 40px!important;
            }
            .slide-subtitle {
                line-height: normal!important;
                max-width: 100%!important;
                max-height: 100%!important;
                font-size: 20px!important;
            }
        }
    </style>
    @endsection

@section('content')
    <!-- Preloader Start-->
    <div id="preloader">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>
    <!-- Preloader End -->

    <!-- Start revolution slider -->
    <div class="rev_slider_wrapper bg-arrows">
    <div id="rev_slider" class="rev_slider fullscreenbanner">
        <ul>

            <!-- Slides -->
                @foreach($slides as $slide)
                <li data-delay="5000" data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000" data-fsmasterspeed="1000">
                <!-- Main image-->
                    <img src="{{url('/storage/'.$slide->image_path)}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                    <!-- Layer 1 -->
                    <div class="slide-title tp-caption tp-resizeme text-left white-color"
                         data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['bottom','bottom','middle','middle']" data-voffset="['150','150', '-150', '-350']"
                         data-fontsize="['70','70', '70', '125']"
                         data-fontweight="600"
                         data-lineheight="['85','85', '80', '135']"
                         data-width="['700','700','650']"
                         data-height="none"
                         data-whitespace="normal"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="500"
                         data-splitin="chars"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-elementdelay="0.05">{{$slide->title}}
                    </div>

                    <!-- Layer 2 -->
                    <div class="slide-subtitle tp-caption tp-resizeme text-left white-color "
                         data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['bottom','bottom','middle','middle']" data-voffset="['90','90', '15', '15']"
                         data-fontsize="['18', '18', '18', '18']"
                         data-fontweight="300"
                         data-lineheight="['30']"
                         data-width="['1200','1000','550']"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                         data-transform_out="opacity:0;s:1000;s:1000;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-start="1500"
                         data-splitin="none"
                         data-splitout="none">{{$slide->description}}
                    </div>
                </li>
             @endforeach
            </ul>

    </div>
    </div>
    <!-- End revolution slider -->


    <!--Info Section START-->
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <img src="{{isset($settings->aboutImage)?$settings->aboutImage !=''?url('/storage/'.$settings->aboutImage):'':''}}" class="rounded-border shadow-light" alt="">
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="pl-30-md">
                        <div class="section-heading text-left mt-5">
                            <h4>{{isset($settings->HeaderTitle)?$settings->HeaderTitle!=''?$settings->HeaderTitle:'':''}}</h4>
                            <h2 class="semi-bold font-size-32">{{isset($settings->aboutTitle)?$settings->aboutTitle!=''?$settings->aboutTitle:'':''}}</h2>
                            <div class="section-heading-line line-thin"></div>
                            <div class="text-content">
                                {!! isset($settings->aboutDescription)?$settings->aboutDescription!=''?$settings->aboutDescription:'':'' !!}
                            </div>
                        </div>

                        <div class="mt-40">
                            <a href="/about" class="button-primary button-md">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Info section END-->




    <!--Partner START-->

    <div class="section-block section-sm border-top">
        <div class="container">
            <div class="section-heading text-left ">
                <h3 class="semi-bold font-size-35">@lang('homepage.PartnerTitle')</h3>
                <div class="section-heading-line line-thin"></div>
            </div>
            <div class="mt-25 owl-carousel owl-theme clients clients-carousel ">
                @foreach($partners as $key=>$partner)
                    <!-- Clients Carousel START -->

                                <div class="item">
                                    <a href="{{action('SiteController@partner',$partner)}}">
                                <img src="{{url('/storage/'.$partner->image_path)}}" alt="partner-image"></a>
                                </div>

                    <!-- Clients Carousel END -->
                @endforeach
            </div>
        </div>
    </div>

    <!--Partner END-->





    <!--Industries START-->
    <div class="section-block">
        <div class="container">
            <div class="section-heading text-left">
                <h4 class="semi-bold">@lang('homepage.IndustriesTitle')</h4>
                <div class="section-heading-line line-thin"></div>
                <p>@lang('homepage.IndustriesDescription')</p>
            </div>
            <div class="row mt-30">
                @foreach($industries as $industry)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="service-box-2">
                        <div class="service-box-2-icon">
                            <a href="{{action('SiteController@SingleIndustry',$industry)}}"> <i class="fas fa-arrow-right"></i> </a>
                        </div>
                        <img src="{{url('/storage/'.$industry->image_path)}}" alt="img">
                        <div class="service-box-2-overlay">
                            <div class="service-box-2-text">
                                <h6><a href="{{action('SiteController@SingleIndustry',$industry)}}">{{$industry->title}}</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--Industries END-->



    <!-- Parallax Section START -->
    <div class="section-block-parallax jarallax black-overlay-70" data-jarallax data-speed="0.6" style="background-image: url('/frontEnd/img/content/bgs/bg6.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-12">
                    <div class="large-heading text-left">
                        <small class="semi-bold white-color">{{isset($settings->videoTitle)?$settings->videoTitle!=''?$settings->videoTitle:'':''}}</small>
                        <h4 class="semi-bold white-color">{{isset($settings->videoDescription)?$settings->videoDescription!=''?$settings->videoDescription:'':''}}</h4>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-12">
                    <!-- Video Button Start -->
                    <div class="video-button center-holder mt-30">
                        <button class="video-video-play-icon pulsebox-2" data-izimodal-open=".izimodal">
                            <i class="fa fa-play"></i>
                        </button>
                    </div>
                    <!-- Video Button End -->

                    <!-- Modal Start -->
                    <div class="izimodal" data-iziModal-width="800px" data-iziModal-fullscreen="true">
                        <iframe height="415" src="{{isset($settings->videoLink)?$settings->videoLink!=''?$settings->videoLink:'':''}}" class="full-width shadow-primary"></iframe>
                    </div>
                    <!-- Modal End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Parallax Section END -->



    <!--Literatures START-->

    <div class="section-block-bg">
        <div class="container">
            <div class="section-heading text-center">
                <h3 class="semi-bold font-size-35">@lang('homepage.LiteraturesTitle')</h3>
                <div class="section-heading-line line-thin"></div>
                <p>@lang('homepage.LiteraturesDescription')</p>
            </div>
            <div class="row mt-50">
                @foreach($literatures as $key=>$literature)
                <div class="col-md-3 col-sm-12 col-12">
                    <div class="service-block">
                        <img src="{{url('/storage/'.$literature->image_path)}}" alt="img">
                        <div class="service-block-content">
                            <h4>{{$literature->title}}</h4>
                            <p>{{str_limit(strip_tags($literature->description),20)}}</p>
                            <a href="" data-izimodal-open="#modal{{$key}}" class="service-block-content-button"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Modal Start -->
                    <div class="izimodal" id="modal{{$key}}" data-iziModal-width="600px" data-iziModal-fullscreen="true" data-iziModal-transitionIn="fadeIn" data-iziModal-transitionOut="fadeOut">
                        <!-- Close Button Start -->
                        <div class="close-modal">
                            <button class="close-modal" data-izimodal-close><i class="ti-close"></i></button>
                        </div>
                        <!-- Close Button Start -->
                        <!-- Modal Body Start -->
                        <div class="modal-inside inner-30 center-holder">
                            <div class="modal-heading">
                                <h4>{{$literature->title}}</h4>
                            </div>
                            <p>{!! $literature->description !!}</p>
                            <a class="button-md button-dark m-5" href="{{'/storage/'.$literature->attachment}}">Download</a>

                        </div>
                        <!-- Modal Body End -->
                    </div>
                    <!-- Modal End -->
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--Literatures END-->




    <!--Contact START-->
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="section-heading">
                        <h6 class="semi-bold">@lang('homepage.contactAddressTitle')</h6>
                        <ul class="grey-list mt-15">
                            <li><i class="fa fa-map-marker-alt"></i>{{isset($settings->address)?$settings->address:''}}</li>
                        </ul>
                        <div class="mt-40">
                            <h6 class="semi-bold">@lang('homepage.contactContactTitle')</h6>
                            <ul class="grey-list mt-15">
                                <li><i class="fa fa-phone"></i>{{isset($settings->phone)?$settings->phone:''}}</li>
                                <li><i class="fa fa-envelope-open"></i>{{isset($settings->email)?$settings->email:''}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-12">
                    <div class="section-heading">
                        <h6 class="semi-bold">Write us a message</h6>
                    </div>
                    @include('layouts.alerts')
                    <form class="contact-form-2 mt-15" method="post" action="{{action('SiteController@message')}}" enctype="multipart/form-data">

                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <input type="text" name="name" placeholder="First Name*">
                            </div>
                            <div class="col-sm-6 col-12">
                                <input type="text" name="phone" placeholder="Phone*">
                            </div>
                            <div class="col-sm-6 col-12">
                                <input type="text" name="title" placeholder="Title*">
                            </div>
                            <div class="col-sm-6 col-12">
                                <input type="email" name="email" placeholder="Email*">
                            </div>
                            <div class="col-12">
                                <textarea name="message" placeholder="Your Message*"></textarea>
                            </div>
                        </div>
                        <div class="row mt-15">
                            <div class="col-sm-4 text-right">
                                <button type="submit" class="button-md button-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Contact END-->






@endsection
