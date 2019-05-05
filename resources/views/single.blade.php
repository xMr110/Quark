@extends('layouts.app')

@section('title')
        {{$product->title}}
    @endsection


@section('content')
    <!--Breadcrumb START-->
    <div style="@if(isset($settings->Products_Background)) background: url({{'/storage/' .$settings->Products_Background}}) fixed;@endif " class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
        <div class="container text-center">
            <h1>{{$product->title}}</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/Product/{{$product->id}}/information">{{$product->title}}</a></li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb END-->

    <!-- Shop Single START -->
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <!-- Product Images & Alternates -->
                    <div class="product-images">
                        <!-- Begin Product Images Slider -->
                        <div class="main-img-slider">
                            <figure>
                                <a href="#" data-size="1400x1400">
                                    <img src="{{url('/storage/'.$product->image_path)}}"  alt="" />
                                </a>
                            </figure>
                        </div>
                        <!-- End Product Images Slider -->

                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="single-product">
                        <h2>{{$product->title}}</h2>

                        <p >{!! $product->description !!}</p>


                        <div class="product-categories p-2 " style="  background: #f9f9f9;">
                            <div class="display-b" >
                                <span>Category: </span>
                                <ul>
                                    @foreach($product->categories as $category)
                                    <li><a href="#">{{$category->title}}</a></li>
                                        @endforeach
                                </ul>
                            </div>
                            <div class="display-b">
                                <span>Producer: </span>
                                <ul>
                                    <li>{{isset($product)?$product->partner_id!=''?$product->partner->title:($product->company!=''?$product->company:''):''}}</li>
                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <!-- Middle Part START -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Tabs Start -->
                    <div class="shop-tabs">
                        <div class='tabs tabs_animate mt-70'>
                            <ul class="tab-menu left-holder">
                                <li><a href="#tab-1">Product Description</a></li>
                                @if($product->techInfo!='')<li><a href="#tab-2">Technical Information</a></li>@endif
                                @if($product->video_path!=''||$product->pdf_path!='')<li><a href="#tab-3">Attachment or Video</a></li>@endif
                            </ul>

                            <!-- Tab 1 Start -->
                            <div id='tab-1' class="clearfix product-tab-body">
                                <h3>Product Description</h3>
                               <p>{!!  $product->description  !!}</p>
                                  </div>
                            <!-- Tab 1 End -->

                            <!-- Tab 2 Start -->
                      <div id='tab-2' class="clearfix product-tab-body">
                          @if($product->techInfo!='')
                                <h3>Technical specifications</h3>
                              <p>{!! $product->techInfo !!}</p>
                                @endif

                            </div>
                            <!-- Tab 2 End -->

                            <!-- Tab 3 Start -->
                            <div id='tab-3' class="clearfix product-tab-body">
                               @if($product->video_path!='') <h3>Video</h3>
                                <div class="full-background background-right min-350" style="background-image: url({{'/storage/'.$product->image_path}});">
                                    <div class="video-video-box-overlay">
                                        <div class="video-video-box-button-sm">
                                            <button class="video-video-play-icon pulsebox-1" data-izimodal-open=".izimodal">
                                                <i class="fa fa-play"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Modal Start -->
                                    <div class="izimodal" data-iziModal-width="800px" data-iziModal-fullscreen="true">
                                        <iframe height="415" src="{{$product->video_path}}" class="full-width shadow-primary"></iframe>
                                    </div>
                                    <!-- Modal End -->
                                </div>
                            @endif
                               @if($product->pdf_path!='') <h3 class="mt-3">PDF</h3>
                                <a class="button-lg button-primary" href="{{url('/storage/'.$product->pdf_path)}}">Download PDF</a>
                                @endif

                            </div>
                            <!-- Tab 3 End -->
                        </div>
                    </div>
                    <!-- Tabs End -->
                </div>
            </div>
            <!-- Middle Part END -->
        </div>
    </div>
    <!-- Shop Single END -->

@endsection
