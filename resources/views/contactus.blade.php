@extends('layouts.app')

@section('title')
    Contact Us
    @endsection


@section('content')


    <!--Breadcrumb START-->
    <div style="@if(isset($settings->Contact_Background)) background: url({{'/storage/' .$settings->Contact_Background}}) fixed;@endif " class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
        <div class="container text-center">
            <h1>Contact Us I</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="page-contact-1.html">Contact Us I</a></li>
            </ul>
        </div>
    </div>
    <!--Breadcrumb END-->

    <!-- Oficess Boxes Section START -->
    <div class="section-block grey-bg background-shape-3">
        <div class="container">
            <div class="row">
                @foreach($contacts as $contact)
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="contact-box-place-office">
                            <div class="row">
                                <div class="col-md-6 m-0" style="margin: 0!important;">
                                    <img  style="max-width: 100%!important;" src="{{url('/assets/backend/images/contact.png')}}" alt="">
                                </div>
                                <div class="col-md-6" style="margin: 0!important; padding: 0!important;">
                                    <h4 class="font-size-25" >{{$contact->title}}</h4>
                                    <h5 class="font-size-20" style="color: #63666A; font-weight: 500!important; ">{{$contact->Subtitle}}</h5>
                                </div>

                            </div>

                        <ul >
                                <li ><i class="fas fa-home "></i>{{$contact->address}}</li>
                                <li ><i class="fas fa-envelope-open "></i>{{$contact->email}}</li>
                                <li  style="display: inline-block" ><i class="fas fa-phone"></i>{{$contact->phone}}</li>
                               <li style="display: inline-block; margin-left: 5%;"><i class="fas fa-mobile"></i>{{$contact->mobile}}</li>
                            <br>
                              @if(isset($contact->fax)&&$contact->fax!='')<li  style="display: inline-block"><i class="fas fa-fax"></i>{{$contact->fax}}</li>@endif
                            @if(isset($contact->whatsapp)&&$contact->whatsapp!='')<li  style="display: inline-block;@if(isset($contact->fax)&&$contact->fax!='') margin-left: 5%;@endif>"> <i class="fab fa-whatsapp"></i>{{$contact->whatsapp}}</li>@endif
                        </ul>
                    </div>
                </div>
                    @endforeach


            </div>
        </div>
    </div>
    <!-- Oficess Boxes Section END -->

    <!--Contact Form and Map Section START-->
    <div class="container-fluid pl-0 pr-0">
        <div class="row no-gutters">
            <div class="col-md-6 col-sm-12 col-12">
                <div class="padding-10-perc">
                    <div class="section-heading text-left">
                        <h3 class="semi-bold font-size-32">Get In Touch</h3>
                        <div class="section-heading-line line-thin"></div>
                    </div>
                    @include('layouts.alerts')

                    <form method="post" action="{{action('SiteController@message')}}" enctype="multipart/form-data" class="primary-form-3 mt-45">
                        {{csrf_field()}}

                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <input type="text" name="name" placeholder="First Name*">
                            </div>
                            <div class="col-sm-6 col-12">
                                <input type="text" name="phone" placeholder="Phone*">
                            </div>
                            <div class="col-sm-6 col-12">
                                <input type="text" name="title" placeholder="Title*">
                            </div>
                            <div class="col-sm-6 col-12">
                                <input type="email" name="email" placeholder="Email*">
                            </div>
                            <div class="col-12">
                                <textarea name="message" placeholder="Your Message*"></textarea>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="button-md button-primary text-uppercase ml-0">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12">
                <div class="full-background min-350">
                    <iframe src="https://maps.google.com/maps?q=dubai&t=&z=13&ie=UTF8&iwloc=&output=embed"  class="full-width full-height"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--Contact Form and Map Section END-->


@endsection
