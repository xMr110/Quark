@extends('layouts.app')


@section('title')
    Industries
    @endsection

@section('content')

    <!--Breadcrumb START-->
    <div class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
        <div class="container text-center">
            <h1>Industries</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/Industries">Industries</a></li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb END-->
    <!--Industries START-->
    <div class="section-block">
        <div class="container">
            <div class="section-heading text-center">
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

    {{--<!-- Clients Carousel START -->--}}
    {{--<div class="section-block section-sm border-top">--}}
        {{--<div class="container">--}}
            {{--<div class="owl-carousel owl-theme clients clients-carousel">--}}
                {{--<div class="item">--}}
                    {{--<img src="/frontEnd/img/partners/partner1.png" alt="partner-image">--}}
                {{--</div>--}}

                {{--<div class="item">--}}
                    {{--<img src="/frontEnd/img/partners/partner2.png" alt="partner-image">--}}
                {{--</div>--}}

                {{--<div class="item">--}}
                    {{--<img src="/frontEnd/img/partners/partner3.png" alt="partner-image">--}}
                {{--</div>--}}

                {{--<div class="item">--}}
                    {{--<img src="/frontEnd/img/partners/partner4.png" alt="partner-image">--}}
                {{--</div>--}}

                {{--<div class="item">--}}
                    {{--<img src="/frontEnd/img/partners/partner5.png" alt="partner-image">--}}
                {{--</div>--}}

                {{--<div class="item">--}}
                    {{--<img src="/frontEnd/img/partners/partner6.png" alt="partner-image">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- Clients Carousel END -->--}}

@endsection
