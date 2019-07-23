@extends('admin.layouts.app')

@section('title')
    Contacts
@endsection

@section('bread')
    <li class="breadcrumb-item active">Contacts</li>
@endsection


@section('content')

    @if(!count($contacts))
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-danger">You didn't Add Any Contacts.. <i class="mdi mdi-emoticon-neutral"></i>
                        </h1><br>
                        <a href="{{ action('Admin\ContactController@create') }}"><h4><i class="mdi mdi-plus"></i> Add
                            </h4></a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row el-element-overlay">
            @foreach($contacts as $contact)
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1">
                                <img style="max-width: 60%; margin-top: 5%; margin-left: auto; margin-right: auto;" src="{{ '/storage/'. $contact->image_path }}" alt="{{ $contact->title }}"/>
                                <div class="el-overlay">
                                    <ul class="el-info">
                                        <li><a class="btn default btn-outline"
                                               href="{{ action('Admin\ContactController@edit', $contact) }}"><i
                                                    class="icon-pencil"></i></a></li>
                                        <li><a class="btn default btn-outline" data-delete href="javascript:void(0);"><i
                                                    class="icon-trash"></i></a>
                                            <form action="{{ action('Admin\ContactController@destroy', $contact) }}"
                                                  method="post" id="delete">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h3 class="box-title">Contact Card</h3>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
