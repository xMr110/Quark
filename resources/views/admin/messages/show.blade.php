@extends('admin.layouts.app')

@section('title')
    {{isset($msg)?$msg->name:''}}-Message
@endsection


@section('bread')
    <li class="breadcrumb-item active">{{isset($msg)?$msg->name:''}}-Message</li>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{isset($msg)?'Message Information':''}}</h4>

                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <h3>
                                <span class="label label-info">1</span>
                                Message Information
                            </h3>
                        </div>
                        <div class="col-md-4">
                            <label for="name">Name</label>
                            <textarea class="form-control form-control-line" rows="1"
                                      name="name"
                                      placeholder="Name ..." readonly>{{isset($msg)?$msg->name:old('name')??''}}</textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="phone">Phone</label>
                            <textarea class="form-control form-control-line" rows="1"
                                      name="phone"
                                      placeholder="Phone ..." readonly>{{isset($msg)?$msg->phone:old('phone')??''}}</textarea>
                            <br>
                            <br>
                        </div>
                        <div class="col-md-4">
                            <label for="email">Email</label>
                            <textarea class="form-control form-control-line" rows="1"
                                      name="email"
                                      placeholder="Email ..." readonly>{{isset($msg)?$msg->email:old('email')??''}}</textarea>
                            <br>
                            <br>
                        </div>
                        <div class="col-md-4">
                            <label for="date">Message Date</label>
                            <textarea class="form-control form-control-line" rows="1"
                                      name="date"
                                      placeholder="date ..." readonly>{{isset($msg)?$msg->created_at:old('date')??''}}</textarea>
                            <br>
                            <br>
                        </div>
                        <div class="col-md-12">
                            <label for="description">Message</label>
                            <textarea class="form-control form-control-line" rows="5"
                                      name="description"
                                      placeholder="Description ..." readonly>{{isset($msg)?$msg->message:old('message')??'Empty'}}</textarea>
                            <br>
                            <br>
                        </div>
                        <div class="col-md-4">
                            <label for="adminName">Admin Name</label>
                            <textarea class="form-control form-control-line" rows="3"
                                      name="adminName"
                                      placeholder="admin ..." readonly>{{isset($msg)?$msg->user->name:old('adminName')??''}}</textarea>
                            <br>
                            <br>
                        </div>
                        <div class="col-md-12">
                            <br>

                            <div class="form-group">
                                <a href="{{ URL::previous() }}"><button class="btn btn-success btn-rounded"  type="button"> BACK</button></a>
                            </div>


                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>



@endsection
