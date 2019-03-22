@extends('admin.layouts.app')
@section('title')
    Partners Settings
@endsection
@section('bread')
    <li class="breadcrumb-item"><a href="{{ action('Admin\PartnerController@index') }}">All Partners</a></li>
    <li class="breadcrumb-item active">Partner Create</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Partner Create</h4>
                    <form class="form-material" enctype="multipart/form-data"
                          action="{{ isset($partner) ? action('Admin\PartnerController@update', $partner) : action('Admin\PartnerController@store') }}"
                          method="post">
                        {{ csrf_field() }}

                        @if(isset($partner))
                            {{ method_field('PATCH') }}
                        @endif

                        <div class="row p-t-20">


                            <div class="col-md-6">
                                <div class="form-group">
                                    <h3><span class="label label-info">1</span>
                                    <label for="title">Title</label></h3>
                                    <input type="text" class="form-control form-control-line"
                                           name="title"
                                           placeholder="Title for Partner.. "
                                           value="{{isset($partner)?$partner->title:old('title')??''}} "/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h3><span class="label label-info">2</span>
                                    <label for="link">Link</label></h3>
                                    <input type="text" class="form-control form-control-line"
                                           name="link"
                                           placeholder="link for Partner.. "
                                           value="{{isset($partner)?$partner->link:old('link')??''}} "/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h3> <span class="label label-info">3</span>
                                    <label for="description">
                                        Description
                                    </label></h3>
                                    <textarea
                                        class="form-control form-control-line mymce"
                                        rows="5"
                                        name="description"
                                        placeholder="Description ... ">{{ isset($partner) ? isset($partner->description) ? $partner->description : old('description') ?? '' : old('description') ?? '' }}</textarea>

                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">
                                        <h3>
                                            <span class="label label-info">4</span>
                                            Image {{ isset($partner) ? '' : '*' }} (800*600)
                                        </h3>
                                    </label>
                                    <input type="file" name="image_path" class="form-control form-control-line">
                                    @if(isset($partner) && $partner->image_path != "")
                                        <div class="col-md-12" style="margin: 10px">
                                            <div class="row el-element-overlay">
                                                <div class="el-card-item">
                                                    <div class="el-card-avatar el-overlay-1">
                                                        <img src="{{ url('/storage/' . $partner->image_path) }}"
                                                             alt="partner Image"
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

