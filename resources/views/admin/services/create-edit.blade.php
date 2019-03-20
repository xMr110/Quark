@extends('admin.layouts.app')
@section('title')
    {{ isset($service) ? 'Edit' : 'Create Service' }}
@endsection
@section('bread')
    <li class="breadcrumb-item"><a href="{{ action('Admin\ServiceController@index') }}">All Services</a></li>
    <li class="breadcrumb-item active">Service Create</li>
@endsection
@section('style')
    <link href="/assets/backend/css/pages/user-card.css" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Service Create</h4>
                    <form class="form-material" enctype="multipart/form-data"
                          action="{{ isset($service) ? action('Admin\ServiceController@update', $service) : action('Admin\ServiceController@store') }}"
                          method="post">
                        {{ csrf_field() }}

                        @if(isset($service))
                            {{ method_field('PATCH') }}
                        @endif

                        <div class="row p-t-20">

                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">1</span>
                                    Title *
                                </h3>
                            </div>
                            @foreach(Localization::getSupportedLocales() as $key => $locale)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title_{{$key}}"> Title {{$locale->native()}}</label>
                                        <input type="text" class="form-control form-control-line"
                                               name="title_{{$key}}"
                                               placeholder="Title for {{$locale->native()}}.. "
                                               value="{{ isset($service) ? isset($service->translate($key)->title) ? $service->translate($key)->title : old("title_". $key) ?? '' : old("title_". $key) ?? '' }} "/>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">2</span>
                                    Service Description *
                                </h3>
                            </div>
                            @foreach(Localization::getSupportedLocales() as $key => $locale)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description_{{$key}}">

                                            Service Description ({{$locale->native()}})

                                        </label>

                                        <textarea
                                                class="form-control form-control-line mymce"
                                                rows="5"
                                                name="description_{{$key}}"
                                                placeholder="{{$locale->native()}}.. ">{{ isset($service) ? isset($service->translate($key)->description) ? $service->translate($key)->description : old('description_'. $key) ?? '' : old('description_'. $key) ?? '' }}</textarea>

                                    </div>
                                </div>
                            @endforeach


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image">
                                        <h3>
                                            <span class="label label-info">3</span>
                                            Image {{ isset($service) ? '' : '*' }} (1200*1000)
                                        </h3>
                                    </label>
                                    <input type="file" name="image_path" class="form-control form-control-line">
                                    @if(isset($service) && $service->image_path != "")
                                        <div class="col-md-12" style="margin: 10px">
                                            <div class="row el-element-overlay">
                                                <div class="el-card-item">
                                                    <div class="el-card-avatar el-overlay-1">
                                                        <img src="{{ url('/storage/' . $service->image_path) }}"
                                                             alt="Service Image"
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
                                    <span class="label label-info">4</span>
                                    Other Options
                                </h3>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="active"
                                           {{ isset($service) ? 'data-editable data-action=' . action('Admin\ServiceController@home', $service) : '' }} type="checkbox"
                                           id="home" {{ isset($service) ? $service->home ? 'checked' : '' : '' }} />
                                    <label for="home">Visible At HomePage</label>
                                    <br>
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


