@extends('layouts.app')


@section('title')
    {{$industry->title}}
@endsection

@section('content')
    <!--Breadcrumb START-->
    <div class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
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
    <div class="owl-carousel owl-theme customizable-carousel mt-40 mb-40" data-loop="true" data-items="5"  data-md-items="5" data-sm-items="2" data-xs-items="1" data-space="15" data-autoplay="true" data-autospeed="3500" data-nav-dots="false" data-nav-arrows="true">
       @foreach($industries as $industry)
        <div class="item" style="width: 260px!important;">
            <div class="service-box-2" >
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
    <!-- 4 Columns Carousel Section Section END -->




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
                            {!! $industry->effectArea !!}
                        </p>

                    </div>
                </div>
                <!-- Left Side END -->

                <!-- Right Side START -->
                <div class="col-md-3 col-sm-12 col-12">
                    <div class="blog-post-right">

                        <h4 class="blog-widget-title">Products Categories</h4>
                        <div class="blog-post-categories mt-20">
                            <ul id="accordion" role="tablist" class="mt-5">
                                @foreach($categories as $category)
                                <li class="card card-primary" style="padding: 0!important;">
                                        <div style="padding: 0.25rem 1.25rem!important;" class="card-header card-header-primary" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapse{{$category->id}}" aria-expanded="true" aria-controls="collapseOne">
                                                    {{$category->title}}
                                                </a>
                                            </h5>
                                        </div>
                                    <div id="collapse{{$category->id}}" class="collapse" role="tabpanel" aria-labelledby="heading{{$category->id}}" data-parent="#accordion">
                                        @foreach($category->products as $product)
                                        <div class="card-body p-2 card-body-primary">{{$product->title}}</div>
                                        <div class="dropdown-divider"></div>
                                            @endforeach
                                    </div>
                                </li>
                                    @endforeach
                            </ul>
                        </div>

                        <h4 class="blog-widget-title">Latest Literature</h4>
                        @foreach($literatures as $literature)
                        <div class="top-news mt-20">
                            <div class="top-news-info">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-12 pr-0">
                                        <img src="{{url('/storage/'.$literature->image_path)}}" alt="img">
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-12">
                                        <h3><a href="#">{{$literature->title}}</a></h3>
                                        <h6>{{$literature->created_at}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <h4 class="blog-widget-title">Tags</h4>
                        <div class="recent-post-tags mt-20">
                            <a href="#" class="button-tag semi-rounded">Business</a>
                            <a href="#" class="button-tag semi-rounded">Design</a>
                            <a href="#" class="button-tag semi-rounded">Deweloper</a>
                            <a href="#" class="button-tag semi-rounded">Design</a>
                            <a href="#" class="button-tag semi-rounded">Business</a>
                            <a href="#" class="button-tag semi-rounded">Design</a>
                            <a href="#" class="button-tag semi-rounded">Deweloper</a>
                            <a href="#" class="button-tag semi-rounded">Business</a>
                            <a href="#" class="button-tag semi-rounded">Design</a>
                        </div>
                    </div>
                </div>
                <!-- Right Side END -->
            </div>
        </div>
    </div>

    <!-- Clients Carousel START -->
    <div class="section-block grey-bg section-sm">
        <div class="container">
            <div class="owl-carousel owl-theme clients clients-carousel">
                @foreach($partners as $partner)
                <div class="item">
                    <img src="{{url('/storage/'.$partner->image_path)}}" alt="partner-image">
                </div>
                    @endforeach

            </div>
        </div>
    </div>
    <!-- Clients Carousel END -->


@endsection
