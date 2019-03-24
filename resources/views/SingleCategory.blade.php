@extends('layouts.app')

@section('title')
    {{$category->title}} Category - Quark
    @endsection


@section('content')


    <!--Breadcrumb START-->
    <div class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
        <div class="container text-center">
            <h1>{{$category->title}} Products</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/Category/{{$category->id}}/products">Category</a></li>
                <li><a href="#">{{$category->title}}</a></li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb END-->

    <!--Services Section START-->
    <div class="section-block grey-bg">
        <div class="background-shape bs-right"></div>
        <div class="container">
            <div class="section-heading text-center">
                <h3 class="semi-bold font-size-35">@lang('homepage.categoryTitle')</h3>
                <div class="section-heading-line line-thin"></div>
            </div>
            <div class="row mt-40">
                <style>
                    @media (min-width: 768px) {
                        .col-md-3 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 25%;
                            flex: 0 0 25%;
                            max-width: 23%;
                        }
                    }
                </style>
                @foreach($category->products as $product)
                    <div class="p-0  col-md-3 service-block-2 ml-2 mr-2">
                        <img class="m-0 ml-0" src="{{url('/storage/'.$product->image_path)}}" alt="img">
                        <div class="service-block-2-content">
                            <h4><a href="{{action('SiteController@Product',$product)}}">{{$product->title}}</a></h4>
                            <a href="{{action('SiteController@Product',$product)}}" class="service-block-2-btn">Read more <i class="fa fa-arrow-right primary-color"></i></a>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
    <!--Services Section END-->


    <!-- Clients Carousel START -->
    <div class="section-block section-sm grey-bg">
        <div class="container">
            <div class="owl-carousel owl-theme clients clients-carousel">
               @foreach($category->products as $product)
                <div class="item">
                    <img src="{{url('/storage/'.$product->partner->image_path)}}" alt="partner-image">
                </div>
                   @endforeach
            </div>
        </div>
    </div>
    <!-- Clients Carousel END -->

    @endsection
