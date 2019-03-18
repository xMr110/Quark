@extends('layouts.app')

@section('title')
    Contact Us
    @endsection


@section('content')


    <!--Breadcrumb START-->
    <div class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
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
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="contact-box-place-office">
                        <i class="icon-office-building"></i>
                        <h4>New Yourk Office</h4>
                        <h6>Str. Charenc France / 109</h6>
                        <ul>
                            <li><i class="fas fa-envelope-open"></i>specthemes@mail.com</li>
                            <li><i class="fas fa-phone"></i>(+123) 123-456-789</li>
                            <li><i class="fas fa-fax"></i>(+123) 456-789</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 col-12">
                    <div class="contact-box-place-office">
                        <i class="icon-bank"></i>
                        <h4>London Office</h4>
                        <h6>Str. Sheram USA / 113</h6>
                        <ul>
                            <li><i class="fas fa-envelope-open"></i>specthemes@mail.com</li>
                            <li><i class="fas fa-phone"></i>(+987) 987-654-321</li>
                            <li><i class="fas fa-fax"></i>(+987) 123-456</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 col-12">
                    <div class="contact-box-place-office">
                        <i class="icon-store"></i>
                        <h4>France Office</h4>
                        <h6>Str. Sheram USA / 113</h6>
                        <ul>
                            <li><i class="fas fa-envelope-open"></i>specthemes@mail.com</li>
                            <li><i class="fas fa-phone"></i>(+987) 987-654-321</li>
                            <li><i class="fas fa-fax"></i>(+987) 123-456</li>
                        </ul>
                    </div>
                </div>
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
                        <small class="grey-color font-size-20 font-weight-normal">Get In Touch</small>
                        <h3 class="semi-bold font-size-32">Let's start a project together</h3>
                        <div class="section-heading-line line-thin"></div>
                    </div>
                    <form method="post" action="#" class="primary-form-3 mt-45">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-12">
                                <input type="text" name="name" placeholder="Name*">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <input type="text" name="phone" placeholder="Phone Number*">
                            </div>
                            <div class="col-12">
                                <select name="subject">
                                    <option>Subject</option>
                                    <option>Development Manager</option>
                                    <option>Project Lead</option>
                                    <option>Solutions Analyst</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea placeholder="Message*" name="message"></textarea>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.405250382651!2d-0.1264760844209047!3d51.50578081864282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604cf3bc8dc73%3A0x992d4348d17f21b6!2sThe+Royal+Horseguards!5e0!3m2!1sru!2s!4v1538901529585"  class="full-width full-height"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--Contact Form and Map Section END-->


@endsection
