@extends('layouts.app')
@section('title')
    HomePage
    @endsection

@section('content')
    <!-- Preloader Start-->
    <div id="preloader">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>
    <!-- Preloader End -->

    <!-- Start revolution slider -->
    <div class="rev_slider_wrapper fs-slider-wrap bg-arrows">
        <div id="rev_slider" class="rev_slider fullscreenbanner">
            <ul>
                <!-- Slides -->
                @foreach($slides as $slide)
                <li  data-delay="5000" data-transition="parallaxtotop" data-slotamount="7" data-masterspeed="2500" data-fsmasterspeed="1000">

                    <!-- Main image-->
                    <img src="{{url('/storage/'.$slide->image_path)}}"  alt="" data-bgposition="right center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                    <!-- Layer 1 -->
                    <div class="slide-title tp-caption tp-resizeme text-left text-center-sm"
                         data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20', '-150', '-350']"
                         data-fontsize="['70','60', '60', '125']"
                         data-fontweight="600"
                         data-lineheight="['80','70', '70', '135']"
                         data-width="['700','700','650']"
                         data-height="none"
                         data-color="#fff"
                         data-whitespace="normal"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-start="500"
                         data-responsive_offset="on"
                         data-elementdelay="0.05">{{$slide->title}}
                    </div>

                    <!-- Layer 2 -->
                    <div class="slide-subtitle tp-caption tp-resizeme text-left text-center-sm"
                         data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['90','90', '15', '15']"
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
                         data-color="#fff"
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
                    <img src="{{isset($settings)?$settings->aboutImage !=''?url('/storage/'.$settings->aboutImage):'':''}}" class="rounded-border shadow-primary" alt="">
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="pl-30-md">
                        <div class="section-heading text-left mt-5">
                            <small class="uppercase">{{isset($settings)?$settings->HeaderTitle!=''?$settings->HeaderTitle:'':''}}</small>
                            <h3 class="semi-bold font-size-32">{{isset($settings)?$settings->aboutTitle!=''?$settings->aboutTitle:'':''}}</h3>
                            <div class="section-heading-line line-thin"></div>
                            <div class="text-content">
                                {!! isset($settings)?$settings->aboutDescription!=''?$settings->aboutDescription:'':'' !!}
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
                            <a href="#"> <i class="fas fa-arrow-right"></i> </a>
                        </div>
                        <img src="{{url('/storage/'.$industry->image_path)}}" alt="img">
                        <div class="service-box-2-overlay">
                            <div class="service-box-2-text">
                                <h6><a href="#">{{$industry->title}}</a></h6>
                                <h4>{!! str_limit($industry->description,20) !!}</h4>
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
                        <small class="semi-bold primary-color">{{isset($settings)?$settings->videoTitle!=''?$settings->videoTitle:'':''}}</small>
                        <h4 class="semi-bold white-color">{{isset($settings)?$settings->videoDescription!=''?$settings->videoDescription:'':''}}</h4>
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
                        <iframe height="415" src="{{isset($settings)?$settings->videoLink!=''?$settings->videoLink:'':''}}" class="full-width shadow-primary"></iframe>
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
                @foreach($literatures as $literature)
                <div class="col-md-3 col-sm-12 col-12">
                    <div class="service-block">
                        <img src="{{url('/storage/'.$literature->image_path)}}" alt="img">
                        <div class="service-block-content">
                            <h4>{{$literature->title}}</h4>
                            <p>{{str_limit(strip_tags($literature->description),20)}}</p>
                            <a href="#" class="service-block-content-button"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
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
