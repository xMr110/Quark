
<!-- Navbar START -->
<header @if(Request::path() != 'about')id="nav-transparent"@endif>
    <nav id="navigation4" class="container navigation">
        <div class="nav-header">
            <a class="nav-brand" href="/">
                @if(Request::path() === 'contact' || Request::path() === '/' )
                <img src="/frontEnd/img/logos/logo2.png" alt="logo"  class="main-logo" id="light_logo">
            @endif
                <img src="/frontEnd/img/logos/logo2.png" alt="logo" class="main-logo" id="main_logo">
            </a>
            <div class="nav-toggle"></div>
        </div>
        <div class="nav-menus-wrapper">
            <ul class="nav-menu align-to-right">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Quark</a></li>
                <li><a href="#">Industries</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Global Partners</a></li>
                <li><a href="#">Literature</a></li>
                <li><a href="/contact">Contact us</a></li>

            </ul>
        </div>
    </nav>
</header>
<!-- Navbar END -->
