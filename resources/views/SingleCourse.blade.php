@extends('layouts.app')

@section('title')
    {{$course->title}}
    @endsection

@section('content')

    <!--Breadcrumb START-->
    <div style="@if(isset($settings->Partners_Background)) background: url({{'/storage/' .$settings->Partners_Background}}) fixed;@endif " class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
        <div class="container text-center">
            <h1>{{$course->title}}</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/partner/{{$course->id}}/information">{{$course->title}}</a></li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb END-->

    <!--Portfolio Single START-->
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-12">
                    <img src="{{url('/storage/'.$course->image_path)}}" class="rounded-border shadow-light" alt="">
                </div>
                <div class="col-md-7 col-sm-7 col-12">
                    <div class="pl-30-md">
                        <div class="portfolio-single">
                            <h6 class="portfolio-single-title mt-30-xs">{{$course->title}}</h6>
                            <h6 class="mt-30">Course Description :</h6>
                            <div style="font-size: large!important;" class="mt-5">{!! $course->description !!}</div>
                            <h6>Duration :</h6>
                            <h6 class="mt-1">From : </h6><span>{{$course->start}}</span>
                            <h6 class="mt-1">To : </h6><span>{{$course->end}}</span>
                            <p class="portfolio-single-text"></p>
                            <ul class="mt-10">
                                <li><strong>Price:</strong><span><a href="{{$course->price}}">{{$course->price}}</a></span></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Portfolio Single END-->





    @endsection
