@extends('layouts.app')

@section('title')
    {{$partner->title}}
    @endsection

@section('content')

    <!--Breadcrumb START-->
    <div style="@if(isset($settings->Partners_Background)) background: url({{'/storage/' .$settings->Partners_Background}}) fixed;@endif " class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
        <div class="container text-center">
            <h1>{{$partner->title}}</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/partner/{{$partner->id}}/information">{{$partner->title}}</a></li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb END-->

    <!--Portfolio Single START-->
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-12">
                    <img src="{{url('/storage/'.$partner->image_path)}}" class="rounded-border shadow-light" alt="">
                </div>
                <div class="col-md-7 col-sm-7 col-12">
                    <div class="pl-30-md">
                        <div class="portfolio-single">
                            <h3 class="portfolio-single-title mt-30-xs">{{$partner->title}}</h3>
                            <h6 class="mt-30">About {{$partner->title}}</h6>
                            <p class="mt-10">{!! $partner->description !!}</p>
                            <p class="portfolio-single-text"></p>
                            <ul class="mt-10">
                                <li><strong>WebSite:</strong><span><a href="{{$partner->link}}">{{$partner->link}}</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Portfolio Single END-->





    @endsection
