@extends('admin.layouts.app')
@section('title')
    Industries
@endsection

@section('bread')
    <li class="breadcrumb-item active">Industries</li>
@endsection


@section('content')

    @if(!count($industries))
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-danger">You didn't Add Any Industries.. <i class="mdi mdi-emoticon-neutral"></i>
                        </h1><br>
                        <a href="{{ action('Admin\IndustryController@create') }}"><h4><i class="mdi mdi-plus"></i> Add
                            </h4></a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row el-element-overlay">
            @foreach($industries as $industry)
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1">
                                <img src="{{ '/storage/'. $industry->image_path }}" alt="{{ $industry->title }}"/>
                                <div class="el-overlay">
                                    <ul class="el-info">
                                        <li><a target="_blank" class="btn default btn-outline image-popup-vertical-fit"
                                               href="{{ '/storage/'. $industry->image_path }}"><i
                                                    class="icon-magnifier"></i></a></li>
                                        <li><a class="btn default btn-outline"
                                               href="{{ action('Admin\IndustryController@edit', $industry) }}"><i
                                                    class="icon-pencil"></i></a></li>
                                        <li><a class="btn default btn-outline" data-delete href="javascript:void(0);"><i
                                                    class="icon-trash"></i></a>
                                            <form action="{{ action('Admin\IndustryController@destroy', $industry) }}"
                                                  method="post" id="delete">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h3 class="box-title">{{ $industry->title }}</h3>
                                <h5 class="box-title">{{ str_limit(strip_tags($industry->description),20) }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
