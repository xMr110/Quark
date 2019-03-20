@extends('admin.layouts.app')
@section('title')
    {{ isset($industry) ? 'Edit' : 'Create Industry' }}
@endsection
@section('bread')
    <li class="breadcrumb-item"><a href="{{ action('Admin\IndustryController@index') }}">All Industries</a></li>
    <li class="breadcrumb-item active">Industry Create</li>
@endsection
@section('style')
    <link href="/assets/backend/css/pages/user-card.css" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Industry Create</h4>
                    <form class="form-material" enctype="multipart/form-data"
                          action="{{ isset($industry) ? action('Admin\IndustryController@update', $industry) : action('Admin\IndustryController@store') }}"
                          method="post">
                        {{ csrf_field() }}

                        @if(isset($industry))
                            {{ method_field('PATCH') }}
                        @endif

                        <div class="row p-t-20">

                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">1</span>
                                    Industry Title *
                                </h3>
                            </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title"> Title </label>
                                        <input type="text" class="form-control form-control-line"
                                               name="title"
                                               placeholder="Title.. "
                                               value="{{ isset($industry) ? isset($industry->title) ? $industry->title : old("title") ?? '' : old("title") ?? '' }} "/>
                                    </div>
                                </div>

                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">2</span>
                                    Industry Information *
                                </h3>
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">
                                            Industry Description
                                        </label>
                                        <textarea
                                            class="form-control form-control-line mymce"
                                            rows="5"
                                            name="description"
                                            placeholder="Description ... ">{{ isset($industry) ? isset($industry->description) ? $industry->description : old('description') ?? '' : old('description') ?? '' }}</textarea>

                                    </div>
                                </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">
                                        Industry Effect Area
                                    </label>
                                    <textarea
                                        class="form-control form-control-line mymce"
                                        rows="5"
                                        name="effectArea"
                                        placeholder="Description ... ">{{ isset($industry) ? isset($industry->effectArea) ? $industry->effectArea : old('effectArea') ?? '' : old('effectArea') ?? '' }}</textarea>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image">
                                        <h3>
                                            <span class="label label-info">3</span>
                                            Image {{ isset($industry) ? '' : '*' }} (1200*1000)
                                        </h3>
                                    </label>
                                    <input type="file" name="image_path" class="form-control form-control-line">
                                    @if(isset($industry) && $industry->image_path != "")
                                        <div class="col-md-12" style="margin: 10px">
                                            <div class="row el-element-overlay">
                                                <div class="el-card-item">
                                                    <div class="el-card-avatar el-overlay-1">
                                                        <img src="{{ url('/storage/' . $industry->image_path) }}"
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


