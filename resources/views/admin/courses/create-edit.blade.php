@extends('admin.layouts.app')
@section('title')
    {{ isset($course) ? 'Edit' : 'Create Course' }}
@endsection
@section('bread')
    <li class="breadcrumb-item"><a href="{{ action('Admin\CourseController@index') }}">All Courses</a></li>
    <li class="breadcrumb-item active">Course Create</li>
@endsection
@section('style')
    <link href="/assets/backend/css/pages/user-card.css" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Course Create</h4>
                    <form class="form-material" enctype="multipart/form-data"
                          action="{{ isset($course) ? action('Admin\CourseController@update', $course) : action('Admin\CourseController@store') }}"
                          method="post">
                        {{ csrf_field() }}

                        @if(isset($course))
                            {{ method_field('PATCH') }}
                        @endif

                        <div class="row p-t-20">

                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">1</span>
                                    Course Title *
                                </h3>
                            </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title"> Title </label>
                                        <input type="text" class="form-control form-control-line"
                                               name="title"
                                               placeholder="Title.. "
                                               value="{{ isset($course) ? isset($course->title) ? $course->title : old("title") ?? '' : old("title") ?? '' }} "/>
                                    </div>
                                </div>

                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">2</span>
                                    Course Information *
                                </h3>
                            </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">
                                            Course Description
                                        </label>
                                        <textarea
                                            class="form-control form-control-line mymce"
                                            rows="5"
                                            name="description"
                                            placeholder="Description ... ">{{ isset($course) ? isset($course->description) ? $course->description : old('description') ?? '' : old('description') ?? '' }}</textarea>

                                    </div>
                                </div>
                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">3</span>
                                    Price
                                </h3>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="price"> Price </label>
                                    <input type="text" class="form-control form-control-line"
                                           name="price"
                                           placeholder="price.. "
                                           value="{{ isset($course) ? isset($course->price) ? $course->price : old("price") ?? '' : old("price") ?? '' }} "/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">4</span>
                                    Duration
                                </h3>
                            </div>
                            <div class="col-md-6">
                                <label for="Date">Start In</label>
                                <input type="date" {{--id="date-format"--}} class="form-control"
                                       placeholder="Saturday 24 June 2019 - 21:44" name="start"
                                       value="{{ isset($course) ? $course->start ?? old('start') : old('start') ?? '' }}">

                            </div>

                            <div class="col-md-6">
                                <label for="Date">End in</label>
                                <input type="date" {{--id="date-format"--}} class="form-control"
                                       placeholder="Saturday 24 June 2019 - 21:44" name="end"
                                       value="{{ isset($course) ? $course->end ?? old('end') : old('end') ?? '' }}">
                                <br>
                                <br>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image">
                                        <h3>
                                            <span class="label label-info">5</span>
                                            Image {{ isset($course) ? '' : '*' }} (1200*1000)
                                        </h3>
                                    </label>
                                    <input type="file" name="image_path" class="form-control form-control-line">
                                    @if(isset($course) && $course->image_path != "")
                                        <div class="col-md-12" style="margin: 10px">
                                            <div class="row el-element-overlay">
                                                <div class="el-card-item">
                                                    <div class="el-card-avatar el-overlay-1">
                                                        <img src="{{ url('/storage/' . $course->image_path) }}"
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


