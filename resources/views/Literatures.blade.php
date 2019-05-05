@extends('layouts.app')

@section('title')
    Literatures
    @endsection
@section('content')

    <!--Breadcrumb START-->
    <div style="@if(isset($settings->Literature_Background)) background: url({{'/storage/' .$settings->Literature_Background}}) fixed;@endif " class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
        <div class="container text-center">
            <h1>Literatures</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/literatures">Literatures</a></li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb END-->

    <div class="section-block">
        <div class="container">
            <div class="section-heading text-left">
                <h4 class="semi-bold">@lang('homepage.LiteraturesTitle')</h4>
                <div class="section-heading-line line-thin"></div>
            </div>
            <!-- Accordions Start -->
            <div id="accordion" role="tablist" class="mt-15">

                @foreach($literatures as $key=>$literature)
                <!-- Accordion Start -->
                <div class="card card-primary rey-bg " style="@if($key%2==0)background-color: #fafafa !important;@endif">
                    <div class="card-header card-header-primary" role="tab" id="headingOne">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
                                {{$key}}. {{$literature->title}}
                            </a>
                        </h5>
                    </div>

                    <div id="collapse{{$key}}" class=" p-2 collapse" role="tabpanel" aria-labelledby="heading{{$key}}" data-parent="#accordion">
                        <div class=" card-body card-body-primary">
                            <p>{!! $literature->description !!}</p>
                        </div>
                        <style>
                            .button-sm:after{
                                content: none!important;
                            }
                        </style>
                        <a style="content: none; display: inline-block; color:#fff;" class="button-sm button-dark" href="{{url('/storage/'.$literature->attachment)}}">Download</a>

                    </div>
                </div>
                <!-- Accordion End -->

                    @endforeach


            </div>
            <!-- Accordions End -->
        </div>
    </div>


@endsection
