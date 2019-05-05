
<!-- Navbar START -->
<style>
    #nav-transparent .navigation-fixed-wrapper {
        border-bottom: none!important;
    }
</style>
<header @if(Request::path() == '/')id="nav-transparent"  @endif>
    <nav id="navigation4" class="container navigation">
        <div class="nav-header">
            <a class="nav-brand" href="/">
                @if(Request::path() === '/' )
                <img style="width: 235px!important; margin-bottom: 5px; max-width: 60%!important;" src="{{isset($settings)?$settings->logo!=''?url('/storage/'.$settings->logo):'':''}}"  alt="logo"  class="main-logo" id="light_logo">
            @endif
                <img style="width: 100px!important;  margin-bottom: 5px;  max-width: 60%!important;" src="{{isset($settings)?$settings->logo!=''?url('/storage/'.$settings->logo):'':''}}" alt="logo" class="main-logo" id="main_logo">
            </a>
            <div class="nav-toggle"></div>
            <script>
                window.onscroll = function() {
                    growShrinkLogo();

                    function growShrinkLogo() {
                        var Logo = document.getElementById("light_logo");

                        if (document.body.scrollTop > 3 || document.documentElement.scrollTop > 3) {

                            Logo.style.width = '100px';
                            Logo.setAttribute('src', '{{url('/storage/' . $settings->logo)}}');

                        } else {
                            Logo.style.width = '235px';
                            Logo.setAttribute('src', '{{ url('/storage/' . $settings->logo) }}');
                        }
                    }
                }
            </script>

        </div>
        <div class="nav-menus-wrapper">
            <ul class="nav-menu align-to-right">
                <li><a href="/">@lang('navbar.home')</a></li>
                <li><a href="/about">@lang('navbar.about')</a></li>
                <li><a href="/industries">@lang('navbar.industries')</a></li>
                <li><a href="/products">@lang('navbar.products')</a></li>
                <li><a href="/partners">@lang('navbar.globalPartners')</a></li>
                <li><a href="/literatures">@lang('navbar.literature')</a></li>
                <li><a href="/contact">@lang('navbar.contactUs')</a></li>

            </ul>
        </div>
    </nav>
</header>
<!-- Navbar END -->
