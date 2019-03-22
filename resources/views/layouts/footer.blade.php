
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
                        @foreach($footerLits as $footerLit)
                        <li>
                            <a href="#">{{$footerLit->title}}</a>
                            <strong><i class="fa fa-calendar"></i> {{$footerLit->created_at}}</strong>
                        </li>
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

