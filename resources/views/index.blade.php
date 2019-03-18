@extends('layouts.app')
@section('title')
    Quark - HomePage
    @endsection

@section('content')
    <!-- Preloader Start-->
    <div id="preloader">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>
    <!-- Preloader End -->


    <!-- Start revolution slider -->
    <div class="rev_slider_wrapper fs-slider-wrap bg-arrows">
        <div id="rev_slider" class="rev_slider fullscreenbanner">
            <ul>
                <!-- Slide 1 -->
                <li  data-delay="5000" data-transition="parallaxtotop" data-slotamount="7" data-masterspeed="2500" data-fsmasterspeed="1000">

                    <!-- Main image-->
                    <img src="/frontEnd/img/content/slider/slide19.jpg"  alt="" data-bgposition="right center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                    <!-- Layer 1 -->
                    <div class="slide-title tp-caption tp-resizeme text-left text-center-sm"
                         data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20', '-150', '-350']"
                         data-fontsize="['70','60', '60', '125']"
                         data-fontweight="600"
                         data-lineheight="['80','70', '70', '135']"
                         data-width="['700','700','650']"
                         data-height="none"
                         data-color="#fff"
                         data-whitespace="normal"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-start="500"
                         data-responsive_offset="on"
                         data-elementdelay="0.05">Raise your business above the rest
                    </div>

                    <!-- Layer 2 -->
                    <div class="slide-subtitle tp-caption tp-resizeme text-left text-center-sm"
                         data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['90','90', '15', '15']"
                         data-fontsize="['18', '18', '18', '18']"
                         data-fontweight="300"
                         data-lineheight="['30']"
                         data-width="['1200','1000','550']"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                         data-transform_out="opacity:0;s:1000;s:1000;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-start="1500"
                         data-color="#fff"
                         data-splitin="none"
                         data-splitout="none">Brand marketing that puts your vision into action! Putting vision into action. <br> Accurate data for precision marketing. Your outsourced marketing team.
                    </div>

                    <!-- Layer 3 -->
                    <div class="tp-caption rev-btn tp-resizeme slider-btn button-primary"
                         id="slide-1081-layer-13"
                         data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['160','160','160','30']"
                         data-fontsize="['15','15','15','15']"
                         data-fontweight="600"
                         data-lineheight="['50','50','50','50']"
                         data-width="['200','200','200','200']"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-start="1500"
                         data-type="button"
                         data-actions='[{"event":"click","action":"scrollbelow","offset":"-70px","delay":"","speed":"2500","ease":"Power1.easeInOut"}]'
                         data-responsive_offset="on"
                         data-splitin="none"
                         data-splitout="none"
                         data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;fbr:100;","to":"o:1;fb:0;fbr:100;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;fbr:100;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;fbr:110%;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="">Learn More
                    </div>
                </li>

                <!-- Slide 2 -->
                <li  data-delay="5000" data-transition="parallaxhorizontal" data-slotamount="7" data-masterspeed="2500" data-fsmasterspeed="1000">

                    <!-- Main image-->
                    <img src="/frontEnd/img/content/slider/slide24.jpg"  alt="" data-bgposition="center right" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                    <!-- Layer 1 -->
                    <div class="slide-title tp-caption tp-resizeme text-center"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-150', '-350']"
                         data-fontsize="['70','60', '60', '125']"
                         data-fontweight="600"
                         data-lineheight="['80','70', '70', '135']"
                         data-width="['800','700','650']"
                         data-height="none"
                         data-color="#fff"
                         data-whitespace="normal"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-start="500"
                         data-responsive_offset="on"
                         data-elementdelay="0.05">A marketing company focused on results
                    </div>

                    <!-- Layer 2 -->
                    <div class="slide-subtitle tp-caption tp-resizeme text-center"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['75','75', '15', '15']"
                         data-fontsize="['18', '18', '18', '18']"
                         data-fontweight="300"
                         data-lineheight="['30']"
                         data-width="['1200','1000','550']"
                         data-whitespace="nowrap"
                         data-color="#fff"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                         data-transform_out="opacity:0;s:1000;s:1000;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-start="1500"
                         data-splitin="none"
                         data-splitout="none">Brand marketing that puts your vision into action! Putting vision into action. <br> Accurate data for precision marketing. Your outsourced marketing team.
                    </div>

                    <!-- Layer 3 -->
                    <div class="tp-caption rev-btn tp-resizeme slider-btn button-primary"
                         id="slide-1081-layer-14"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['150','150','160','30']"
                         data-fontsize="['15','15','15','15']"
                         data-fontweight="600"
                         data-lineheight="['50','50','50','50']"
                         data-width="['200','200','200','200']"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-start="1500"
                         data-type="button"
                         data-actions='[{"event":"click","action":"scrollbelow","offset":"-70px","delay":"","speed":"2500","ease":"Power1.easeInOut"}]'
                         data-responsive_offset="on"
                         data-splitin="none"
                         data-splitout="none"
                         data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;fbr:100;","to":"o:1;fb:0;fbr:100;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;fbr:100;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;fbr:110%;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="">Learn More
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- End revolution slider -->


    <!--Info Section START-->
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <img src="/frontEnd/img/content/about/about-3.jpg" class="rounded-border shadow-primary" alt="">
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="pl-30-md">
                        <div class="section-heading text-left mt-5">
                            <small class="uppercase">Who we are</small>
                            <h3 class="semi-bold font-size-32">All-in-One Professional Solution for <span class="primary-color">Your Business</span></h3>
                            <div class="section-heading-line line-thin"></div>
                            <div class="text-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor.</p>
                            </div>
                        </div>
                        <div class="primary-list mt-25">
                            <ul>
                                <li><i class="fas fa-check-circle"></i>Vision, passion and marketing excellence.</li>
                                <li><i class="fas fa-check-circle"></i>Growing your brand through health education.</li>
                                <li><i class="fas fa-check-circle"></i>Get answers and advices from Professionals.</li>
                            </ul>
                        </div>
                        <div class="mt-40">
                            <a href="#" class="button-primary button-md">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Info section END-->

    <!--Industries START-->
    <div class="section-block">
        <div class="container">
            <div class="section-heading text-left">
                <h4 class="semi-bold">Industries</h4>
                <div class="section-heading-line line-thin"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br>ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <div class="row mt-30">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="service-box-2">
                        <div class="service-box-2-icon">
                            <a href="#"> <i class="fas fa-arrow-right"></i> </a>
                        </div>
                        <img src="/frontEnd/img/content/cases/c-1.jpg" alt="img">
                        <div class="service-box-2-overlay">
                            <div class="service-box-2-text">
                                <h6><a href="#">Customer Products</a></h6>
                                <h4>We're knowledgeable about making benefits.</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="service-box-2">
                        <div class="service-box-2-icon">
                            <a href="#"> <i class="fas fa-arrow-right"></i> </a>
                        </div>
                        <img src="/frontEnd/img/content/cases/c-2.jpg" alt="img">
                        <div class="service-box-2-overlay">
                            <div class="service-box-2-text">
                                <h6><a href="#">Financial Services</a></h6>
                                <h4>We're knowledgeable about making benefits.</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="service-box-2">
                        <div class="service-box-2-icon">
                            <a href="#"> <i class="fas fa-arrow-right"></i> </a>
                        </div>
                        <img src="/frontEnd/img/content/cases/c-3.jpg" alt="img">
                        <div class="service-box-2-overlay">
                            <div class="service-box-2-text">
                                <h6><a href="#">Business Services</a></h6>
                                <h4>We're knowledgeable about making benefits.</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="service-box-2">
                        <div class="service-box-2-icon">
                            <a href="#"> <i class="fas fa-arrow-right"></i> </a>
                        </div>
                        <img src="/frontEnd/img/content/cases/c-4.jpg" alt="img">
                        <div class="service-box-2-overlay">
                            <div class="service-box-2-text">
                                <h6><a href="#">Sensitivity Analysis</a></h6>
                                <h4>We're knowledgeable about making benefits.</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="service-box-2">
                        <div class="service-box-2-icon">
                            <a href="#"> <i class="fas fa-arrow-right"></i> </a>
                        </div>
                        <img src="/frontEnd/img/content/cases/c-5.jpg" alt="img">
                        <div class="service-box-2-overlay">
                            <div class="service-box-2-text">
                                <h6><a href="#">Customer Products</a></h6>
                                <h4>We're knowledgeable about making benefits.</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="service-box-2">
                        <div class="service-box-2-icon">
                            <a href="#"> <i class="fas fa-arrow-right"></i> </a>
                        </div>
                        <img src="/frontEnd/img/content/cases/c-6.jpg" alt="img">
                        <div class="service-box-2-overlay">
                            <div class="service-box-2-text">
                                <h6><a href="#">Financial Services</a></h6>
                                <h4>We're knowledgeable about making benefits.</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="service-box-2">
                        <div class="service-box-2-icon">
                            <a href="#"> <i class="fas fa-arrow-right"></i> </a>
                        </div>
                        <img src="/frontEnd/img/content/business/service-3-3.jpg" alt="img">
                        <div class="service-box-2-overlay">
                            <div class="service-box-2-text">
                                <h6><a href="#">Business Services</a></h6>
                                <h4>We're knowledgeable about making benefits.</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="service-box-2">
                        <div class="service-box-2-icon">
                            <a href="#"> <i class="fas fa-arrow-right"></i> </a>
                        </div>
                        <img src="/frontEnd/img/content/business/service-4-3.jpg" alt="img">
                        <div class="service-box-2-overlay">
                            <div class="service-box-2-text">
                                <h6><a href="#">Sensitivity Analysis</a></h6>
                                <h4>We're knowledgeable about making benefits.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Industries END-->



    <!-- Parallax Section START -->
    <div class="section-block-parallax jarallax black-overlay-70" data-jarallax data-speed="0.6" style="background-image: url('/frontEnd/img/content/bgs/bg6.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-12">
                    <div class="large-heading text-left">
                        <small class="semi-bold primary-color">Making sense of global markets</small>
                        <h4 class="semi-bold white-color">Knowing more about business, consumers and society. The compass for the market place.</h4>
                        <p class="white-color">Knowledge. Identified & delivered. Your single source for buying market research.</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-12">
                    <!-- Video Button Start -->
                    <div class="video-button center-holder mt-30">
                        <button class="video-video-play-icon pulsebox-2" data-izimodal-open=".izimodal">
                            <i class="fa fa-play"></i>
                        </button>
                    </div>
                    <!-- Video Button End -->

                    <!-- Modal Start -->
                    <div class="izimodal" data-iziModal-width="800px" data-iziModal-fullscreen="true">
                        <iframe height="415" src="https://www.youtube.com/embed/nrJtHemSPW4" class="full-width shadow-primary"></iframe>
                    </div>
                    <!-- Modal End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Parallax Section END -->



    <!--Literatures START-->

    <div class="section-block-bg">
        <div class="container">
            <div class="section-heading text-center">
                <h3 class="semi-bold font-size-35">Achieving marketing superiority</h3>
                <div class="section-heading-line line-thin"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br>ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <div class="row mt-50">
                <div class="col-md-3 col-sm-12 col-12">
                    <div class="service-block">
                        <img src="/frontEnd/img/content/business/service-4.jpg" alt="img">
                        <div class="service-block-content">
                            <h4>Business Development</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed.</p>
                            <a href="#" class="service-block-content-button"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-12">
                    <div class="service-block">
                        <img src="/frontEnd/img/content/business/service-5.jpg" alt="img">
                        <div class="service-block-content">
                            <h4>Risk Management</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed.</p>
                            <a href="#" class="service-block-content-button"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-12">
                    <div class="service-block">
                        <img src="/frontEnd/img/content/business/service-3.jpg" alt="img">
                        <div class="service-block-content">
                            <h4>Business Accounting</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed.</p>
                            <a href="#" class="service-block-content-button"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-12">
                    <div class="service-block">
                        <img src="/frontEnd/img/content/business/service-4.jpg" alt="img">
                        <div class="service-block-content">
                            <h4>Business Accounting</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed.</p>
                            <a href="#" class="service-block-content-button"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Literatures END-->




    <!--Contact START-->
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="section-heading">
                        <h6 class="semi-bold">Visit our office at</h6>
                        <ul class="grey-list mt-15">
                            <li><i class="fa fa-map-marker-alt"></i> 2018 New Yourk Sheram 113 Apt. 55, USA</li>
                        </ul>
                        <div class="mt-40">
                            <h6 class="semi-bold">Contact us</h6>
                            <ul class="grey-list mt-15">
                                <li><i class="fa fa-phone"></i> +11 (0) 123 456 7890</li>
                                <li><i class="fa fa-envelope-open"></i> specthemes@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-12">
                    <div class="section-heading">
                        <h6 class="semi-bold">Write us a message</h6>
                    </div>
                    <form class="contact-form-2 mt-15" method="post">
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <input type="text" name="name" placeholder="First Name*">
                            </div>
                            <div class="col-sm-6 col-12">
                                <input type="text" name="name" placeholder="Lasts Name*">
                            </div>
                            <div class="col-12">
                                <textarea placeholder="Your Message*"></textarea>
                            </div>
                        </div>
                        <div class="row mt-15">
                            <div class="col-sm-8">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox_3">
                                    <label for="checkbox_3">I’m available for commissions and collaborations, and i’m excited to hear from you about new projects.</label>
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <button class="button-md button-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Contact END-->



@endsection
