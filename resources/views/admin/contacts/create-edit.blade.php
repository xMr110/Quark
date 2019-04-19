@extends('admin.layouts.app')

@section('title')
{{isset($contact)?'Edit':'Create'}} Contact Card
    @endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">{{isset($contact)?'Edit':'Create'}} Contact Card    </h4>
                    <form class="form-material" enctype="multipart/form-data"
                          action="{{ isset($contact) ? action('Admin\ContactController@update', $contact) : action('Admin\ContactController@store') }}"
                          method="post">
    {{ csrf_field() }}

    @if(isset($contact))
        {{ method_field('PATCH') }}
    @endif

                        <div class="row p-t-20">

                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">1</span>
                                    Card Title *
                                </h3>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title"> Title </label>
                                    <input type="text" class="form-control form-control-line"
                                           name="title"
                                           placeholder="Title.. "
                                           value="{{ isset($contact) ? isset($contact->title) ? $contact->title : old("title") ?? '' : old("title") ?? '' }} "/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Subtitle"> SubTitle </label>
                                    <input type="text" class="form-control form-control-line"
                                           name="Subtitle"
                                           placeholder="Subtitle.. "
                                           value="{{ isset($contact) ? isset($contact->title) ? $contact->title : old("Subtitle") ?? '' : old("Subtitle") ?? '' }} "/>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <h3>
                                    <span class="label label-info">2</span>
                                    Card Information *
                                </h3>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Email </label>
                                    <input type="email" class="form-control form-control-line"
                                           name="email"
                                           placeholder="email.. "
                                           value="{{ isset($contact) ? isset($contact->email) ? $contact->email : old("email") ?? '' : old("email") ?? '' }} "/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Address </label>
                                    <input type="text" class="form-control form-control-line"
                                           name="address"
                                           placeholder="address.. "
                                           value="{{ isset($contact) ? isset($contact->address) ? $contact->address : old("address") ?? '' : old("address") ?? '' }} "/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone </label>
                                    <input type="text" class="form-control form-control-line"
                                           name="phone"
                                           placeholder="phone.. "
                                           value="{{ isset($contact) ? isset($contact->phone) ? $contact->phone : old("phone") ?? '' : old("phone") ?? '' }} "/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile">Mobile </label>
                                    <input type="text" class="form-control form-control-line"
                                           name="mobile"
                                           placeholder="mobile.. "
                                           value="{{ isset($contact) ? isset($contact->mobile) ? $contact->mobile : old("mobile") ?? '' : old("mobile") ?? '' }} "/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fax">Fax (Optional)</label>
                                    <input type="text" class="form-control form-control-line"
                                           name="fax"
                                           placeholder="fax.. "
                                           value="{{ isset($contact) ? isset($contact->fax) ? $contact->fax : old("fax") ?? '' : old("fax") ?? '' }} "/>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="whatsapp">Whatsapp (Optional)</label>
                                    <input type="text" class="form-control form-control-line"
                                           name="whatsapp"
                                           placeholder="whatsapp.. "
                                           value="{{ isset($contact) ? isset($contact->whatsapp) ? $contact->whatsapp : old("whatsapp") ?? '' : old("whatsapp") ?? '' }} "/>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <br>
                            <div class="form-group">
                                <button class="btn btn-success btn-rounded" type="submit">SUBMIT</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>


    @endsection
