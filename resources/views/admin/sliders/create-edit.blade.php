@extends('admin.layouts.app')
@section('title')
    {{ isset($slide) ? 'Edit Slide' : 'Add Slide' }}
@endsection

@section('bread')
    <li class="breadcrumb-item"><a href="{{ action('Admin\SliderController@index') }}">Slider</a></li>
    <li class="breadcrumb-item active">{{ isset($slide) ? 'Edit Slide' : 'Add Slide' }}</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ isset($slide) ? 'Edit Slide' : 'Add Slide' }}</h4>

                    <form class="form-material" enctype="multipart/form-data"
                          action="{{ isset($slide) ? action('Admin\SliderController@update', $slide) : action('Admin\SliderController@store') }}"
                          method="post">
                        {{ csrf_field() }}

                        @if(isset($slide))
                            {{ method_field('PATCH') }}
                        @endif

                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">1</span>
                                    Information (Optional) *
                                </h3>
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description"> Title </label>
                                        <input type="text" class="form-control form-control-line"
                                               name="title"
                                               placeholder="title for Slide.. "
                                               value="{{ isset($slide) ? isset($slide->title) ? $slide->title : old("title") ?? '' : old("title") ?? '' }} "/>
                                    </div>
                                </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description"> Description </label>
                                        <input type="text" class="form-control form-control-line"
                                               name="description"
                                               placeholder="Description for Slide.. "
                                               value="{{ isset($slide) ? isset($slide->description) ? $slide->description : old("description") ?? '' : old("description") ?? '' }} "/>
                                    </div>
                                </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">
                                        <h3>
                                            <span class="label label-info">1</span>
                                            Image (1920 * 940) {{ isset($slide) ? '' : '*' }}
                                        </h3>
                                    </label>
                                    <input type="file" name="image_path" class="form-control form-control-line">
                                    @if(isset($slide) && $slide->image_path != "")
                                        <div class="col-md-12" style="margin: 10px">
                                            <div class="row el-element-overlay">
                                                <div class="el-card-item">
                                                    <div class="el-card-avatar el-overlay-1">
                                                        <img src="{{ url('/storage/' . $slide->image_path) }}"
                                                             alt="Slide Image"
                                                             style="background-color: black; max-width: 150px"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">
                                        <h3>
                                            <span class="label label-info">2</span>
                                          Mobile  Image (1000 * 700) {{ isset($slide) ? '' : '*' }}
                                        </h3>
                                    </label>
                                    <input type="file" name="mobile_image_path" class="form-control form-control-line">
                                    @if(isset($slide) && $slide->mobile_image_path != "")
                                        <div class="col-md-12" style="margin: 10px">
                                            <div class="row el-element-overlay">
                                                <div class="el-card-item">
                                                    <div class="el-card-avatar el-overlay-1">
                                                        <img src="{{ url('/storage/' . $slide->mobile_image_path) }}"
                                                             alt="Slide Image"
                                                             style="background-color: black; max-width: 150px"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
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
