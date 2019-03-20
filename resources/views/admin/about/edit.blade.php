@extends('admin.layouts.app')

@section('title')
    About Us Management
    @endsection

@section('bread')
    <li class="breadcrumb-item active">About Us Managements</li>
@endsection


@section('content')
 <div class="row">
     <div class="col-md-12">
         <div class="card">
             <div class="card-body">
                 <h4 class="card-title">About Us Managements</h4>
                 <form action="{{route('admin.settings.store')}}" method="post" enctype="multipart/form-data" class="form-material">
                     {{csrf_field()}}
                     <div class="form-body">
                         <h3 class="card-title">Modify About Page</h3>

                         <ul class="nav nav-tabs" role="tablist">
                             <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#first"
                                                     role="tab"><span class="hidden-sm-up"><i
                                             class="ti-home"></i></span> <span
                                         class="hidden-xs-down">First Section</span></a></li>
                             <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#second"
                                                     role="tab"><span class="hidden-sm-up"><i
                                             class="ti-user"></i></span> <span class="hidden-xs-down">Second Section</span></a>
                             </li>
                             <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#third"
                                                     role="tab"><span class="hidden-sm-up"><i
                                             class="ti-user"></i></span> <span
                                         class="hidden-xs-down">Third Section</span></a></li>
                         </ul>

                         <div class="tab-content tabcontent-border">
                             <div class="tab-pane active" id="first" role="tabpanel">
                                 <div class="row p-t-20">
                                     <div class="col-md-6">
                                         <div class="form-group {{$errors->has('HeaderTitle') ? 'has-danger' : ''}}">
                                             <label for="" class="control-label">Header Title</label>
                                             <input type="text" name="HeaderTitle" class="form-control" value="{{$settings->HeaderTitle ?? ''}}">
                                             @if($errors->has('HeaderTitle'))
                                                 <small class="form-control-feedback">{{$errors->first('HeaderTitle')}}</small>
                                             @endif
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group {{$errors->has('aboutTitle') ? 'has-danger' : ''}}">
                                             <label for="" class="control-label">Title</label>
                                             <input type="text" name="aboutTitle" class="form-control" value="{{$settings->aboutTitle ?? ''}}">
                                             @if($errors->has('aboutTitle'))
                                                 <small class="form-control-feedback">{{$errors->first('aboutTitle')}}</small>
                                             @endif
                                         </div>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="form-group {{$errors->has('aboutDescription') ? 'has-danger' : ''}}">
                                             <label for="" class="control-label">Description English</label>
                                             <textarea
                                                 class="form-control form-control-line mymce"
                                                 rows="5"
                                                 name="aboutDescription"
                                                 placeholder="about Description.. ">{{ isset($settings) ? isset($settings->aboutDescription) ? $settings->aboutDescription : old('aboutDescription') ?? '' : old('aboutDescription') ?? '' }}</textarea>
                                         </div>
                                         @if($errors->has('aboutDescription'))
                                             <small class="form-control-feedback">{{$errors->first('aboutDescription')}}</small>
                                         @endif
                                     </div>

                                     <div class="col-md-6">
                                         <div class="form-group {{ $errors->has('aboutImage') ? 'has-danger' : '' }}">
                                             <label class="control-label">About Image</label>
                                             <input type="file" name="aboutImage" class="form-control">

                                             @if ($errors->has('aboutImage'))
                                                 <small class="form-control-feedback">{{ $errors->first('aboutImage') }}</small>
                                             @endif

                                             @if(isset($settings->aboutImage) && $settings->aboutImage != "")
                                                 <div class="col-md-12" style="margin: 10px">
                                                     <div class="row el-element-overlay">
                                                         <div class="el-card-item">
                                                             <div class="el-card-avatar el-overlay-1"><img
                                                                     src="{{ '/storage/'. $settings->aboutImage }}"
                                                                     alt="Main Page"
                                                                     style="background-color: black; max-width: 150px">
                                                                 <div class="el-overlay">
                                                                     <ul class="el-info">
                                                                         <li>
                                                                             <a class="btn default btn-outline image-popup-vertical-fit"
                                                                                href="{{ '/storage/'. $settings->aboutImage }}"
                                                                                target="_blank"><i
                                                                                     class="icon-magnifier"></i></a>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             @endif
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group {{$errors->has('about_video_link') ? 'has-danger' : ''}}">
                                             <label for="" class="control-label">Youtube Video link</label>
                                             <input type="text" name="about_video_link" class="form-control" value="{{$settings->about_video_link ?? ''}}">
                                             @if($errors->has('about_video_link'))
                                                 <small class="form-control-feedback">{{$errors->first('about_video_link')}}</small>
                                             @endif
                                         </div>
                                     </div>
                                 </div>
                             </div>

                            <div class="tab-pane" id="second" role="tabpanel">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group {{$errors->has('HeaderTitle2') ? 'has-danger' : ''}}">
                                            <label for="" class="control-label">Header Title 2</label>
                                            <input type="text" name="HeaderTitle2" class="form-control" value="{{$settings->HeaderTitle2 ?? ''}}">
                                            @if($errors->has('HeaderTitle2'))
                                                <small class="form-control-feedback">{{$errors->first('HeaderTitle2')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{$errors->has('aboutTitle2') ? 'has-danger' : ''}}">
                                            <label for="" class="control-label">Title 2</label>
                                            <input type="text" name="aboutTitle2" class="form-control" value="{{$settings->aboutTitle2 ?? ''}}">
                                            @if($errors->has('aboutTitle2'))
                                                <small class="form-control-feedback">{{$errors->first('aboutTitle2')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group {{$errors->has('aboutDescription2') ? 'has-danger' : ''}}">
                                            <label for="" class="control-label">Description English 2</label>
                                            <textarea
                                                class="form-control form-control-line mymce"
                                                rows="5"
                                                name="aboutDescription2"
                                                placeholder="about Description.. ">{{ isset($settings) ? isset($settings->aboutDescription2) ? $settings->aboutDescription2 : old('aboutDescription2') ?? '' : old('aboutDescription2') ?? '' }}</textarea>
                                        </div>
                                        @if($errors->has('aboutDescription2'))
                                            <small class="form-control-feedback">{{$errors->first('aboutDescription2')}}</small>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('aboutImage2') ? 'has-danger' : '' }}">
                                            <label class="control-label">About Image 2</label>
                                            <input type="file" name="aboutImage2" class="form-control">

                                            @if ($errors->has('aboutImage2'))
                                                <small class="form-control-feedback">{{ $errors->first('aboutImage2') }}</small>
                                            @endif

                                            @if(isset($settings->aboutImage2) && $settings->aboutImage2 != "")
                                                <div class="col-md-12" style="margin: 10px">
                                                    <div class="row el-element-overlay">
                                                        <div class="el-card-item">
                                                            <div class="el-card-avatar el-overlay-1"><img
                                                                    src="{{ '/storage/'. $settings->aboutImage2 }}"
                                                                    alt="Main Page"
                                                                    style="background-color: black; max-width: 150px">
                                                                <div class="el-overlay">
                                                                    <ul class="el-info">
                                                                        <li>
                                                                            <a class="btn default btn-outline image-popup-vertical-fit"
                                                                               href="{{ '/storage/'. $settings->aboutImage2 }}"
                                                                               target="_blank"><i
                                                                                    class="icon-magnifier"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="third" role="tabpanel">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group {{$errors->has('aboutTitle3') ? 'has-danger' : ''}}">
                                            <label for="" class="control-label">Title 3</label>
                                            <input type="text" name="aboutTitle3" class="form-control" value="{{$settings->aboutTitle3 ?? ''}}">
                                            @if($errors->has('aboutTitle3'))
                                                <small class="form-control-feedback">{{$errors->first('aboutTitle3')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group {{$errors->has('aboutDescription3') ? 'has-danger' : ''}}">
                                            <label for="" class="control-label">Description English 3</label>
                                            <textarea
                                                class="form-control form-control-line mymce"
                                                rows="5"
                                                name="aboutDescription3"
                                                placeholder="about aboutDescription3.. ">{{ isset($settings) ? isset($settings->aboutDescription3) ? $settings->aboutDescription3 : old('aboutDescription3') ?? '' : old('aboutDescription3') ?? '' }}</textarea>
                                        </div>
                                        @if($errors->has('aboutDescription3'))
                                            <small class="form-control-feedback">{{$errors->first('aboutDescription3')}}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                     </div>
                     <div class="form-actions">
                         <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Save</button>
                     </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>

    @endsection
