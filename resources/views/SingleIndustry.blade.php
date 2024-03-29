@extends('layouts.app')

@section('title')
    {{$industry->title}}
@endsection

@section('content')
    <!--Breadcrumb START-->
    <div style="@if(isset($settings->Industry_Background)) background: url({{'/storage/' .$settings->Industry_Background}}) fixed;@endif " class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
        <div class="container text-center">
            <h1>{{$industry->title}}</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/Industries">All Industries</a></li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb END-->
    <!-- 4 Columns Carousel Section Section START -->
    <div class="section-block-grey">
        <div class="container">
            <div class="semi-bold font-size-20 text-center mb-5">@lang('homepage.SingleIndustry')</div>
            <div class="row" id="accordion" role="tablist" >
                    @foreach($categories as $category)
                        <div class="col-md-3 mt-2 card card-primary" style="  border: 0!important; ">
                            <div style="padding: 15px!important; border-radius: 10px;   border: 1px solid rgba(0,0,0,.125)!important;" class="card-header card-header-primary" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse{{$category->id}}" aria-expanded="true" aria-controls="collapseOne">
                                        {{$category->title}}
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse{{$category->id}}" class="collapse" role="tabpanel" aria-labelledby="heading{{$category->id}}" data-parent="#accordion">
                                <div class="card-body p-2 card-body-primary"><a href="{{action('SiteController@SingleCategory',$category)}}">Go To {{$category->title}} Page</a></div>
                                <div class="dropdown-divider"></div>
                                @foreach($category->products as $product)
                                    <div class="card-body p-2 card-body-primary"><a href="{{action('SiteController@Product',$product)}}">{{$product->title}}</a></div>
                                    <div class="dropdown-divider"></div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="section-block">
        <div class="container">
            <div class="row">
                <!-- Left Side START -->
                <div class="col-md-9 col-sm-12 col-12">
                    <div class="blog-list">
                        <img style="height: 400px!important;" src="{{url('/storage/'.$industry->image_path)}}" alt="img">


                        <blockquote>
                            {!! $industry->description!!}
                        </blockquote>

                        <p class="mt-25">
                            @if(isset($industry->effectArea)&&$industry->effectArea!='')
                            {!! $industry->effectArea !!}
                                @endif
                        </p>

                    </div>
                </div>
                <!-- Left Side END -->

                <!-- Right Side START -->
                <div class="col-md-3 col-sm-12 col-12">
                    <div class="blog-post-right">
                        <h4 class="blog-widget-title">Related Partner</h4>
                        @if($partners->count())
                        @foreach($partners as  $key=>$partner)
                            @if($partner!=null)
                        <div class="top-news mt-20">
                            <div class="top-news-info">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-12 pr-0">
                                        <img src="{{url('/storage/'.$partner->image_path)}}" alt="img">
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-12">
                                        <h3><a href="{{action('SiteController@partner',$partner)}}" >{{$partner->title}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                                @endif

                        @endforeach
                            @endif
                    </div>
                </div>
                <!-- Right Side END -->
            </div>
        </div>
    </div>
    <!-- Clients Carousel START -->
    {{--<div class="section-block grey-bg section-sm">--}}
        {{--<div class="container">--}}
            {{--<div class="owl-carousel owl-theme clients clients-carousel">--}}
                {{--@foreach($partners as $partner)--}}
                {{--<div class="item">--}}
                    {{--<img src="{{url('/storage/'.$partner->image_path)}}" alt="partner-image">--}}
                {{--</div>--}}
                    {{--@endforeach--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- Clients Carousel END -->
@endsection
