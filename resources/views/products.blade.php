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
                <h3 class="semi-bold font-size-35">@lang('homepage.productsTitle')</h3>
                <div class="section-heading-line line-thin"></div>
            </div>
            <div class="row mt-5 mb-5" style="display: block">
                <div class="form-group mr-4" style="display: inline-block;">
                    <h6 class="">Select Industry</h6>
                    <select  name="industry" id="industry" class="form-control input-lg dynamic" >
                        <option value="" selected>Industry</option>
                        <option value="A1">All</option>
                        @foreach($industries as $industry)
                            <option value="{{ $industry->id}}">{{ $industry->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group" style="display: inline-block;">
                    <h6>Select Category</h6>
                    <select name="category"   id="category" class="form-control input-lg dynamic ">
                        <option value="" selected>Category</option>
                        <option value="B1"  >All</option>
                    </select>
                </div>
                {{csrf_field()}}
            </div>
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

            <div id="myproducts" class="row mt-40">


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


@section('script')
    <script>
        $('#industry').change(function(){
            var industryID = $(this).val();
            if(industryID){
                $.ajax({
                    type:"GET",
                    url:"{{url('get-category-list')}}?industry_id="+industryID,
                    success:function(res){
                        if(res){
                            $("#category").empty();
                            $("#category").append(' <option value="" selected>Category</option><option value="B1">All</option>');
                            $.each(res,function(key,value){
                                $("#category").append('<option value="'+key+'">'+value+'</option>');
                            });

                        }else{
                            $("#category").empty();
                            $("#category").append(' <option value="" selected>Category</option><option value="B1">All</option>');
                        }
                    }
                });
            }else{
                $("#category").empty();
                $("#category").append(' <option value="" selected>Category</option><option value="B1">All</option>');
            }
        });
        $('#category').on('change',function(){
            var categoryID = $(this).val();
            var IndustrAll = $('#industry').val();
            if(categoryID){
                $.ajax({
                    type:"GET",
                    url:"{{url('get-product-list')}}?category_id="+categoryID+"&industry_id="+IndustrAll,
                    success:function(res){
                        if(res){
                            $("#myproducts").empty();
                            $("#myproducts").html(res);
                        }else{
                            $("#myproducts").empty();
                            $("#myproducts").append('<h3>Sorry we did,t find a Match..!!</h3>');
                        }
                    }
                });
            }else{
                $("#myproducts").append('<h3>Sorry we did,t find a Match..!!</h3>');
            }

        });
    </script>
    @endsection
