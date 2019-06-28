@extends('layouts.app')

@section('title')
    Courses
@endsection


@section('content')
    <!--Breadcrumb START-->
    <div style="@if(isset($settings->Courses_Background)) background: url({{'/storage/' .$settings->Courses_Background}}) fixed;@endif " class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
        <div class="container text-center">
            <h1>Courses</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/courses">Courses</a></li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb END-->


    <!--Portfolio START-->
    <div class="section-block grey-bg">
        <div class="container">
            <div class="row">
                @if(!count($courses))
                    <div style="margin-left:auto; margin-right: auto;">
                        <h2 style="text-align: center;">Coming Soon...</h2>
                    </div>
                    @else
                @foreach($courses as $course)
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="portolio-boxed-2">
                            <img src="{{url('/storage/'.$course->image_path)}}" alt="" class="image">
                            <div class="portolio-boxed-content">
                                <div class="d-flex">
                                    <div class="portfolio-title">
                                        <h3><a href="{{action('SiteController@course',$course)}}">{{$course->title}}</a></h3>
                                    </div>
                                    <div class="portfolio-btn">
                                        <a href="{{action('SiteController@course',$course)}}"><i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    @endif
            </div>
        </div>
    </div>
    <!--Portfolio END-->



@endsection
