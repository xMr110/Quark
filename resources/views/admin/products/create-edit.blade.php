@extends('admin.layouts.app')

@section('title')
 {{isset($product)? 'Edit Product':'Create Product'}}
@endsection


@section('bread')
    <li class="breadcrumb-item"><a href="{{ action('Admin\ProductController@index') }}">All Products</a></li>
    <li class="breadcrumb-item active">Create Product</li>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Product</h4>
                    <form class="form-material" enctype="multipart/form-data"
                          action="{{ isset($product) ? action('Admin\ProductController@update', $product) : action('Admin\ProductController@store') }}"
                          method="post">
                            {{ csrf_field() }}

                            @if(isset($product))
                                {{ method_field('PATCH') }}
                            @endif

                        <div class="row p-t-20">
                                <div class="col-md-12">
                                    <h3>
                                        <span class="label label-info">1</span>
                                        Title *
                                    </h3>
                                </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title"> Title </label>
                                            <input type="text" class="form-control form-control-line"
                                                   name="title"
                                                   placeholder="Title.. "
                                                   value="{{ isset($product) ? isset($product->title) ? $product->title : old("title") ?? '' : old("title") ?? '' }} "/>
                                        </div>
                                    </div>

                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">2</span>
                                    Product Information *
                                </h3>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">
                                        Description
                                    </label>
                                    <textarea
                                        class="form-control form-control-line mymce"
                                        rows="5"
                                        name="description"
                                        placeholder="Description ... ">{{ isset($product) ? isset($product->description) ? $product->description : old('description') ?? '' : old('description') ?? '' }}</textarea>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="techInfo">
                                        Tech Info
                                    </label>
                                    <textarea
                                        class="form-control form-control-line mymce"
                                        rows="5"
                                        name="techInfo"
                                        placeholder="Description ... ">{{ isset($product) ? isset($product->techInfo) ? $product->techInfo : old('techInfo') ?? '' : old('techInfo') ?? '' }}</textarea>

                                </div>
                            </div>


                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">3</span>
                                    Other Info (Optional)
                                </h3>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Video">Video Link (YouTube)</label>
                                    <input type="text" class="form-control form-control-line"
                                           name="video_path"
                                           placeholder="video path (YouTube).. "
                                           value="{{ isset($product) ? isset($product->video_path) ? $product->video_path : old("video_path") ?? '' : old("video_path") ?? '' }} "/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Pdf">
                                            Pdf File {{ isset($product) ? '' : '*' }}
                                    </label>
                                    <input type="file" name="pdf_path" class="form-control form-control-line">
                                    @if(isset($product) && $product->pdf_path != "")
                                        <div class="col-md-12" style="margin: 10px">
                                            <div class="row el-element-overlay">
                                                <div class="el-card-item">
                                                    <div class="el-card-avatar el-overlay-1">
                                                        <img src="{{ url('/storage/' . $product->pdf_path) }}"
                                                             alt="Pdf File"
                                                             style="background-color: black; max-width: 150px"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image">
                                        <h3>
                                            <span class="label label-info">4</span>
                                            Image {{ isset($product) ? '' : '*' }} (1200*1000)
                                        </h3>
                                    </label>
                                    <input type="file" name="image_path" class="form-control form-control-line">
                                    @if(isset($product) && $product->image_path != "")
                                        <div class="col-md-12" style="margin: 10px">
                                            <div class="row el-element-overlay">
                                                <div class="el-card-item">
                                                    <div class="el-card-avatar el-overlay-1">
                                                        <img src="{{ url('/storage/' . $product->image_path) }}"
                                                             alt="industry Image"
                                                             style="background-color: black; max-width: 150px"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">3</span>
                                    Category *
                                </h3>
                            </div>

                            <div class="col-md-12">
                                <div  class="form-group">
                                    <label for="category_id">Category *</label>
                                    <select name="category_id" id="" class="form-control">
                                        <option value="">Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ isset($product) ? $category->id == $product->category_id ? 'selected' : '' : '' }}>{{ $category->title }}</option>
                                        @endforeach
                                        <option @if(count($categories)) style="display: none;" @endif value="" @if(!count($categories)) selected @endif @if(count($categories)) disabled @endif>No Categories Added</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">3</span>
                                    Producer *
                                </h3>
                            </div>
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <select onchange="showDiv(this)" name="partner_id" id="" class="form-control">
                                            <option selected disabled value="">Type Of Producer</option>
                                            <option @if(isset($product)&&$product->company!=null) selected @endif value="1">Company</option>
                                            <option @if(isset($product)&&$product->partner_id!=null) selected @endif value="2">Partner</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="col-md-12">
                                <div style="@if(isset($product) && $product->company != null) display: block; @else display: none; @endif  " id="company" class="form-group">
                                    <h3><span class="label label-info">
                                    <label for="Company">Company Name*</label>
                                    </span></h3>
                                    <input  type="text" class="form-control form-control-line"
                                           name="company"
                                           placeholder="Company Name.. "
                                           value="{{ isset($product) ? isset($product->company) ? $product->company : old("company") ?? '' : old("company") ?? '' }} "/>
                                </div>
                                <div style="@if(isset($product) && $product->partner_id != null) display: block; @else display: none; @endif " id="partner" class="form-group">
                                 <h3><span class="label label-info">
                                    <label for="Partner">Partner *</label>
                                     </span></h3>
                                    <select  name="partner_id" id="" class="form-control">
                                        <option value="">Partner</option>
                                        @foreach($partners as $partner)
                                            <option value="{{ $partner->id }}" {{ isset($product) ? $partner->id == $product->partner_id ? 'selected' : '' : '' }}>{{ $partner->title }}</option>
                                        @endforeach
                                        <option @if(count($partners)) style="display: none;" @endif value="" @if(!count($partners)) selected @endif @if(count($partners)) disabled @endif>No Partners Added</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <br>
                                <div class="form-group">
                                    <button class="btn btn-success btn-rounded" type="submit">SUBMIT</button>
                                </div>
                            </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('script')

    <script>
        function showDiv(elem){
            if(elem.value == 1) {
                document.getElementById('company').style.display = "block";
                document.getElementById('partner').style.display = "none";
            }
            else if (elem.value == 2) {
                document.getElementById('company').style.display = "none";
                document.getElementById('partner').style.display = "block";
            }
        }

    </script>


@endsection
