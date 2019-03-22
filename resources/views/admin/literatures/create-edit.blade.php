@extends('admin.layouts.app')
@section('title')
    {{ isset($literature) ? 'Edit' : 'Create Literatures' }}
@endsection
@section('bread')
    <li class="breadcrumb-item"><a href="{{ action('Admin\LiteratureController@index') }}">All Literatures</a></li>
    <li class="breadcrumb-item active">Literature Create</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Literature Create</h4>
                    <form class="form-material" enctype="multipart/form-data"
                          action="{{ isset($literature) ? action('Admin\LiteratureController@update', $literature) : action('Admin\LiteratureController@store') }}"
                          method="post">
                        {{ csrf_field() }}

                        @if(isset($literature))
                            {{ method_field('PATCH') }}
                        @endif

                        <div class="row p-t-20">

                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">1</span>
                                    Literature Title *
                                </h3>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title"> Title </label>
                                    <input type="text" class="form-control form-control-line"
                                           name="title"
                                           placeholder="Title.. "
                                           value="{{ isset($literature) ? isset($literature->title) ? $literature->title : old("title") ?? '' : old("title") ?? '' }} "/>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">2</span>
                                    Literature Information *
                                </h3>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">
                                        Literature Description
                                    </label>
                                    <textarea
                                        class="form-control form-control-line mymce"
                                        rows="5"
                                        name="description"
                                        placeholder="Description ... ">{{ isset($literature) ? isset($literature->description) ? $literature->description : old('description') ?? '' : old('description') ?? '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">3</span>
                                    Industry *
                                </h3>
                            </div>

                            <div class="col-md-12">
                                <div  class="form-group">
                                    <label for="industry_id">Industry *</label>
                                    <select name="industry_id" id="" class="form-control">
                                        <option value="">Industry</option>
                                        @foreach($industries as $industry)
                                            <option value="{{ $industry->id }}" {{ isset($literature) ? $industry->id == $literature->industry_id ? 'selected' : '' : '' }}>{{ $industry->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">
                                        <h3>
                                            <span class="label label-info">4</span>
                                            Attachment {{ isset($literature) ? '' : '*' }}
                                        </h3>
                                    </label>
                                    <input type="file" name="attachment" class="form-control form-control-line">
                                    @if(isset($literature) && $literature->attachment != "")
                                        <div  class="col-md-12" style="margin: 10px">
                                            <div class="row el-element-overlay">
                                                <div class="el-card-item">
                                                    <div class="el-card-avatar el-overlay-1">
                                                        <a href="{{url('/storage/'.$literature->attachment)}}"><h3 style="color: Red;">Download File</h3></a>
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
                                            <span class="label label-info">5</span>
                                            Image {{ isset($literature) ? '' : '*' }}
                                        </h3>
                                    </label>
                                    <input type="file" name="image_path" class="form-control form-control-line">
                                    @if(isset($literature) && $literature->image_path != "")
                                        <div  class="col-md-12" style="margin: 10px">
                                            <div class="row el-element-overlay">
                                                <div class="el-card-item">
                                                    <div class="el-card-avatar el-overlay-1">
                                                        <img src="{{ url('/storage/' . $literature->image_path) }}"
                                                             alt="Image"
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


