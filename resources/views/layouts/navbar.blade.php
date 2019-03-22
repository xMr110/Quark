
<!-- Navbar START -->
<header @if(Request::path() != 'about')id="nav-transparent"@endif>
    <nav id="navigation4" class="container navigation">
        <div class="nav-header">
            <a class="nav-brand" href="/">
                @if(Request::path() === 'contact' || Request::path() === '/' )
                <img src="{{isset($settings)?$settings->logo!=''?url('/storage/'.$settings->logo):'':''}}" alt="logo"  class="main-logo" id="light_logo">
            @endif
                <img src="{{isset($settings)?$settings->logo!=''?url('/storage/'.$settings->logo):'':''}}" alt="logo" class="main-logo" id="main_logo">
            </a>
            <div class="nav-toggle"></div>
        </div>
        <div class="nav-menus-wrapper">
            <ul class="nav-menu align-to-right">
                <li><a href="/">@lang('navbar.home')</a></li>
                <li><a href="/about">@lang('navbar.about')</a></li>
                <li><a href="/">@lang('navbar.industries')</a></li>
                <li><a href="/">@lang('navbar.products')</a></li>
                <li><a href="/">@lang('navbar.globalPartners')</a></li>
                <li><a href="/">@lang('navbar.literature')</a></li>
                <li><a href="/contact">@lang('navbar.contactUs')</a></li>

            </ul>
        </div>
    </nav>
</header>
<!-- Navbar END -->
