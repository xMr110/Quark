@extends('layouts.app')

@section('title')
    Partners
@endsection


@section('content')


    <!--Breadcrumb START-->
    <div style="@if(isset($settings->Partners_Background)) background: url({{'/storage/' .$settings->Partners_Background}}) fixed;@endif " class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
        <div class="container text-center">
            <h1>Partners</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/partners">Partners</a></li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb END-->

    <!--Portfolio START-->
    <div class="section-block grey-bg">
        <div class="container">
            <div class="row">

                @foreach($partners as $partner)
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="portolio-boxed-2">
                        <img src="{{url('/storage/'.$partner->image_path)}}" alt="" class="image">
                        <div class="portolio-boxed-content">
                            <div class="d-flex">
                                <div class="portfolio-title">
                                    <h3><a href="{{action('SiteController@partner',$partner)}}">{{$partner->title}}</a></h3>
                                </div>
                                <div class="portfolio-btn">
                                    <a href="{{action('SiteController@partner',$partner)}}"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--Portfolio END-->

@endsection
