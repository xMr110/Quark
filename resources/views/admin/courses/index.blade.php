@extends('admin.layouts.app')
@section('title')
    Courses
@endsection

@section('bread')
    <li class="breadcrumb-item active">Courses</li>
@endsection


@section('content')

    @if(!count($courses))
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-danger">You didn't Add Any Courses.. <i class="mdi mdi-emoticon-neutral"></i>
                        </h1><br>
                        <a href="{{ action('Admin\CourseController@create') }}"><h4><i class="mdi mdi-plus"></i> Add
                            </h4></a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row el-element-overlay">
            @foreach($courses as $course)
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1">
                                <img src="{{ '/storage/'. $course->image_path }}" alt="{{ $course->title }}"/>
                                <div class="el-overlay">
                                    <ul class="el-info">
                                        <li><a target="_blank" class="btn default btn-outline image-popup-vertical-fit"
                                               href="{{ '/storage/'. $course->image_path }}"><i
                                                    class="icon-magnifier"></i></a></li>
                                        <li><a class="btn default btn-outline"
                                               href="{{ action('Admin\CourseController@edit', $course) }}"><i
                                                    class="icon-pencil"></i></a></li>
                                        <li><a class="btn default btn-outline" data-delete href="javascript:void(0);"><i
                                                    class="icon-trash"></i></a>
                                            <form action="{{ action('Admin\CourseController@destroy', $course) }}"
                                                  method="post" id="delete">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h3 class="box-title">{{ $course->title }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
