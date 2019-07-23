
<!--Footer START-->
<footer>
    <div class="footer-1" style="background: #63666a45!important;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <a href="#"><img style=" max-width: 50%!important;" src="{{isset($settings->footerLogo)?$settings->footerLogo!=''?url('/storage/'.$settings->footerLogo):'':''}}" id="footer_logo" alt="logo"></a>
                    <p class="mt-20">@lang('footer.description')</p>
                    <ul class="social-links-footer">
                          @if(isset($settings->facebook)&&$settings->facebook!='') <li><a style="color: #001487;" href="{{isset($settings)?$settings->facebook:''}}"><i class="fab fa-facebook"></i></a></li>@endif
                           @if(isset($settings->twitter)&&$settings->twitter!='') <li><a style="color: #001487;" href="{{isset($settings)?$settings->twitter:''}}"><i class="fab fa-twitter"></i></a></li>@endif
                           @if(isset($settings->instagram)&&$settings->instagram!='') <li><a style="color: #001487;" href="{{isset($settings)?$settings->instagram:''}}"><i class="fab fa-instagram"></i></a></li>@endif
                           @if(isset($settings->linkedin)&&$settings->linkedin!='') <li><a style="color: #001487;" href="{{isset($settings)?$settings->linkedin:''}}"><i class="fab fa-linkedin"></i></a></li>@endif
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <h2>Extra Links</h2>
                    <div class="row mt-25">
                        <div class="col-md-6 col-sm-6">
                            <ul class="footer-nav">
                                <li><a href="/about" style="color: #999">About Us</a></li>
                                <li><a href="/products"  style="color: #999">Our Products</a></li>
                                <li><a href="/industries"  style="color: #999">Our Industries</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <ul class="footer-nav">
                                <li><a href="/literatures"  style="color: #999">Our Literatures</a></li>
                                <li><a href="/partners"  style="color: #999">Our Partners</a></li>
                                <li><a href="/contact"  style="color: #999">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <h2>Recent Literatures</h2>
                    <ul class="footer-news mt-25">
                        @foreach($footerLits as $key=>$footerLit)
                        <li>
                            <a data-izimodal-open="#modal{{$key}}"   style="color: #999" href="">{{$footerLit->title}}</a>
                            <strong  style="color: #999"><i class="fa fa-calendar"></i> {{$footerLit->created_at}}</strong>
                        </li>

                            <!-- Modal Start -->
                            <div class="izimodal" id="modal{{$key}}" data-iziModal-width="600px" data-iziModal-fullscreen="true" data-iziModal-transitionIn="fadeIn" data-iziModal-transitionOut="fadeOut">
                                <!-- Close Button Start -->
                                <div class="close-modal">
                                    <button class="close-modal" data-izimodal-close><i class="ti-close"></i></button>
                                </div>
                                <!-- Close Button Start -->
                                <!-- Modal Body Start -->
                                <div class="modal-inside inner-30 center-holder">
                                    <div  class="modal-heading">
                                        <h4>{{$footerLit->title}}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>{!! $footerLit->description !!}</p>
                                    </div>
                                    <a class="button-md button-dark m-5" href="{{'/storage/'.$footerLit->attachment}}">Download</a>

                                </div>
                                <!-- Modal Body End -->
                            </div>
                            <!-- Modal End -->
                            @endforeach
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <h2>@lang('homepage.contactContactTitle')</h2>
                    <ul class="grey-list mt-15">
                        <li><i class="fa fa-phone"></i>{{isset($settings->phone)?$settings->phone:''}}</li>
                        <li><i class="fa fa-envelope-open"></i>{{isset($settings->email)?$settings->email:''}}</li>
                    </ul>
                </div>
            </div>
            <div class="footer-1-bar">
                <a class="small-text" href="http://www.creativo-sy.com/" style="color: #999">CREATIVO © 2019. All Rights Reserved.</a>
            </div>
        </div>
    </div>
</footer>
<!--Footer END-->

<!-- Scroll to top button Start -->
<a href="#" class="scroll-to-top"><i class="fas fa-chevron-up"></i></a>
<!-- Scroll to top button End -->

