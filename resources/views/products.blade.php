@extends('layouts.app')

@section('title')
    Products
    @endsection


@section('content')


    <!--Breadcrumb START-->
    <div class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
        <div class="container text-center">
            <h1>Products</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/Products">Products</a></li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb END-->



    <!--Services Section START-->
    <div class="section-block grey-bg">
        <div class="background-shape bs-right"></div>
        <div class="container">
            <div class="section-heading text-center">
                <h3 class="semi-bold font-size-35">Market your business to own your market</h3>
                <div class="section-heading-line line-thin"></div>
            </div>
            <div class="row mt-40">
                <style>
                    @media (min-width: 768px) {
                        .col-md-4 {
                            -webkit-box-flex: 0;
                            -ms-flex: 0 0 33.333333%;
                            flex: 0 0 33.333333%;
                            max-width: 30.333333%;
                        }
                    }
                </style>
                @foreach($products as $product)
                    <div class="p-0  col-md-4 col-xs-12 col-sm-12 service-block-2 mr-2 ml-2">
                        <img  src="{{url('/storage/'.$product->image_path)}}" alt="img">
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


@endsection
