
<!--Footer START-->
<footer>
    <div class="footer-1">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <a href="#"><img src="{{isset($settings)?$settings->logo!=''?url('/storage/'.$settings->logo):'':''}}" id="footer_logo" alt="logo"></a>
                    <p class="mt-20">@lang('footer.description')</p>
                    <ul class="social-links-footer">
                        <li><a href="{{isset($settings)?$settings->facebook:''}}"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="{{isset($settings)?$settings->twitter:''}}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{isset($settings)?$settings->instagram:''}}"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <h2>Extra Links</h2>
                    <div class="row mt-25">
                        <div class="col-md-6 col-sm-6">
                            <ul class="footer-nav">
                                <li><a href="/about">About Us</a></li>
                                <li><a href="#">Our Products</a></li>
                                <li><a href="#">Our Industries</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <ul class="footer-nav">
                                <li><a href="#">Our Literatures</a></li>
                                <li><a href="#">Our Partners</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <h2>Recent Literatures</h2>
                    <ul class="footer-news mt-25">
                        @foreach($footerLits as $key=>$footerLit)
                        <li>
                            <a data-izimodal-open="#modal{{$key}}"  href="">{{$footerLit->title}}</a>
                            <strong><i class="fa fa-calendar"></i> {{$footerLit->created_at}}</strong>
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
                    <h2>Contact Us</h2>
                    <h6 class="semi-bold">@lang('homepage.contactContactTitle')</h6>
                    <ul class="grey-list mt-15">
                        <li><i class="fa fa-phone"></i>{{isset($settings->phone)?$settings->phone:''}}</li>
                        <li><i class="fa fa-envelope-open"></i>{{isset($settings->email)?$settings->email:''}}</li>
                    </ul>
                </div>
            </div>
            <div class="footer-1-bar">
                <p>DirectGroup © 2019. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!--Footer END-->

<!-- Scroll to top button Start -->
<a href="#" class="scroll-to-top"><i class="fas fa-chevron-up"></i></a>
<!-- Scroll to top button End -->

