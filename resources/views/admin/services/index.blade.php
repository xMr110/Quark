@extends('admin.layouts.app')
@section('title')
    Service
@endsection

@section('bread')
    <li class="breadcrumb-item active">Services</li>
@endsection


@section('content')

    @if(!count($services))
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-danger">You didn't Add Any Service.. <i class="mdi mdi-emoticon-neutral"></i>
                        </h1><br>
                        <a href="{{ action('Admin\ServiceController@create') }}"><h4><i class="mdi mdi-plus"></i> Add
                            </h4></a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row el-element-overlay">
            @foreach($services as $service)
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1">
                                <img src="{{ '/storage/'. $service->image_path }}" alt="{{ $service->title }}"/>
                                <div class="el-overlay">
                                    <ul class="el-info">
                                        <li><a target="_blank" class="btn default btn-outline image-popup-vertical-fit"
                                               href="{{ '/storage/'. $service->image_path }}"><i
                                                        class="icon-magnifier"></i></a></li>
                                        <li><a class="btn default btn-outline"
                                               href="{{ action('Admin\ServiceController@edit', $service) }}"><i
                                                        class="icon-pencil"></i></a></li>
                                        <li><a class="btn default btn-outline" data-delete href="javascript:void(0);"><i
                                                        class="icon-trash"></i></a>
                                            <form action="{{ action('Admin\ServiceController@destroy', $service) }}"
                                                  method="post" id="delete">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                            </form>
                                        </li>
                                        <li><a class="btn default btn-outline"
                                               href="javascript:void(0);" data-editable
                                               data-action="{{ action('Admin\ServiceController@home', $service) }}"><i
                                                        class="mdi ' {{ $service->home ? 'mdi-star-off' : 'mdi-star' }}"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h3 class="box-title">{{ $service->translate('en')->title }}</h3>
                                <h5 class="box-title">{{ str_limit(strip_tags($service->translate('en')->description)) }}</h5>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection