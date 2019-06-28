@extends('admin.layouts.app')

@section('title')
   Image Settings
@endsection

@section('bread')
    <li class="breadcrumb-item active">Image Management</li>

@endsection

@section('style')
    <link href="/assets/backend/css/pages/user-card.css" rel="stylesheet">
@endsection

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{  action('Admin\BackgroundController@store') }}" method="post" enctype="multipart/form-data" class="form-material">
                        {{csrf_field()}}
                        <div class="form-body">
                            <h3 class="card-title">Image Management</h3>

                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a  class="nav-link active" data-toggle="tab" href="#HomePageBackGround" role="tab"> <span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Pages Images</span></a></li>
                            </ul>
                            <div class="tab-content tabcontent-border">
                                <div class="tab-pane active" id="HomePageBackGround" role="tabpanel">
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('About_Background') ? 'has-danger' : '' }}">
                                                <label class="control-label">About Us Image</label>
                                                <input type="file" name="About_Background" class="form-control">
                                                @if ($errors->has('About_Background'))
                                                    <small class="form-control-feedback">{{ $errors->first('About_Background') }}</small>
                                                @endif

                                                @if(isset($settings->About_Background) && $settings->About_Background != "")
                                                    <div class="col-md-12" style="margin: 10px">
                                                        <div class="row el-element-overlay">
                                                            <div class="el-card-item">
                                                                <div class="el-card-avatar el-overlay-1">
                                                                    <img src="{{ url('/storage/' . $settings->About_Background) }}" alt="About" style="background-color: black; max-width: 150px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('Industry_Background') ? 'has-danger' : '' }}">
                                                <label class="control-label">Industry Image</label>
                                                <input type="file" name="Industry_Background" class="form-control">
                                                @if ($errors->has('Industry_Background'))
                                                    <small class="form-control-feedback">{{ $errors->first('Industry_Background') }}</small>
                                                @endif
                                                @if(isset($settings->Industry_Background) && $settings->Industry_Background != "")
                                                    <div class="col-md-12" style="margin: 10px">
                                                        <div class="row el-element-overlay">
                                                            <div class="el-card-item">
                                                                <div class="el-card-avatar el-overlay-1">
                                                                    <img src="{{ url('/storage/' . $settings->Industry_Background) }}" alt="Industry" style="background-color: black; max-width: 150px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('Products_Background') ? 'has-danger' : '' }}">
                                                <label class="control-label">Products Image</label>
                                                <input type="file" name="Products_Background" class="form-control">
                                                @if ($errors->has('Products_Background'))
                                                    <small class="form-control-feedback">{{ $errors->first('Products_Background') }}</small>
                                                @endif
                                                @if(isset($settings->Products_Background) && $settings->Products_Background != "")
                                                    <div class="col-md-12" style="margin: 10px">
                                                        <div class="row el-element-overlay">
                                                            <div class="el-card-item">
                                                                <div class="el-card-avatar el-overlay-1">
                                                                    <img src="{{ url('/storage/' . $settings->Products_Background) }}" alt="Products" style="background-color: black; max-width: 150px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('Partners_Background') ? 'has-danger' : '' }}">
                                                <label class="control-label">Partners</label>
                                                <input type="file" name="Partners_Background" class="form-control">
                                                @if ($errors->has('Partners_Background'))
                                                    <small class="form-control-feedback">{{ $errors->first('Partners_Background') }}</small>
                                                @endif
                                                @if(isset($settings->Partners_Background) && $settings->Partners_Background != "")
                                                    <div class="col-md-12" style="margin: 10px">
                                                        <div class="row el-element-overlay">
                                                            <div class="el-card-item">
                                                                <div class="el-card-avatar el-overlay-1">
                                                                    <img src="{{ url('/storage/' . $settings->Partners_Background) }}" alt="Partners" style="background-color: black; max-width: 150px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('Literature_Background') ? 'has-danger' : '' }}">
                                                <label class="control-label">Literature Image</label>
                                                <input type="file" name="Literature_Background" class="form-control">
                                                @if ($errors->has('Literature_Background'))
                                                    <small class="form-control-feedback">{{ $errors->first('Literature_Background') }}</small>
                                                @endif
                                                @if(isset($settings->Literature_Background) && $settings->Literature_Background != "")
                                                    <div class="col-md-12" style="margin: 10px">
                                                        <div class="row el-element-overlay">
                                                            <div class="el-card-item">
                                                                <div class="el-card-avatar el-overlay-1">
                                                                    <img src="{{ url('/storage/' . $settings->Literature_Background) }}" alt="Literature" style="background-color: black; max-width: 150px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('Courses_Background') ? 'has-danger' : '' }}">
                                                <label class="control-label">Course Background</label>
                                                <input type="file" name="Courses_Background" class="form-control">
                                                @if ($errors->has('Courses_Background'))
                                                    <small class="form-control-feedback">{{ $errors->first('Courses_Background') }}</small>
                                                @endif
                                                @if(isset($settings->Courses_Background) && $settings->Courses_Background != "")
                                                    <div class="col-md-12" style="margin: 10px">
                                                        <div class="row el-element-overlay">
                                                            <div class="el-card-item">
                                                                <div class="el-card-avatar el-overlay-1">
                                                                    <img src="{{ url('/storage/' . $settings->Courses_Background) }}" alt="Course" style="background-color: black; max-width: 150px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('Contact_Background') ? 'has-danger' : '' }}">
                                                <label class="control-label">Contact Image</label>
                                                <input type="file" name="Contact_Background" class="form-control">
                                                @if ($errors->has('Contact_Background'))
                                                    <small class="form-control-feedback">{{ $errors->first('Contact_Background') }}</small>
                                                @endif
                                                @if(isset($settings->Contact_Background) && $settings->Contact_Background != "")
                                                    <div class="col-md-12" style="margin: 10px">
                                                        <div class="row el-element-overlay">
                                                            <div class="el-card-item">
                                                                <div class="el-card-avatar el-overlay-1">
                                                                    <img src="{{ url('/storage/' . $settings->Contact_Background) }}" alt="Contact" style="background-color: black; max-width: 150px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> SUBMIT</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
