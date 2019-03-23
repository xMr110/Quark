<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">

            <ul id="sidebarnav">


                <li class="nav-small-cap">Personal</li>
                @if(Auth::user()->role == 1)
                    <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="mdi mdi-settings"></i>
                            <span class="hide-menu">
                        Settings
                    </span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{action('Admin\SettingController@index')}}">Manage</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                            <i
                                    class="mdi mdi-account"></i>
                            <span class="hide-menu">
                        Users
                    </span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{action('Admin\UserController@index')}}">All </a></li>
                            <li><a href="{{action('Admin\UserController@create')}}">New</a></li>
                        </ul>
                    </li>
                @endif

                <li class="nav-devider"></li>
                <li class="nav-small-cap">Content Management</li>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i
                                class="mdi mdi-account"></i>
                        <span class="hide-menu">
                        Slider
                    </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{action('Admin\SliderController@index')}}">All </a></li>
                        <li><a href="{{action('Admin\SliderController@create')}}">New</a></li>
                    </ul>
                </li>

                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i
                                class="mdi mdi-account"></i>
                        <span class="hide-menu">
                        Industries
                    </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{action('Admin\IndustryController@index')}}">All</a></li>
                        <li><a href="{{action('Admin\IndustryController@create')}}">New</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i
                            class="mdi mdi-account"></i>
                        <span class="hide-menu">
                        Categories
                    </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{action('Admin\CategoryController@index')}}">All</a></li>
                        <li><a href="{{action('Admin\CategoryController@create')}}">New</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i
                            class="mdi mdi-account"></i>
                        <span class="hide-menu">
                        Partners
                    </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{action('Admin\PartnerController@index')}}">All</a></li>
                        <li><a href="{{action('Admin\PartnerController@create')}}">New</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i
                            class="mdi mdi-account"></i>
                        <span class="hide-menu">
                        Products
                    </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{action('Admin\ProductController@index')}}">All</a></li>
                        <li><a href="{{action('Admin\ProductController@create')}}">New</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i
                            class="mdi mdi-account"></i>
                        <span class="hide-menu">
                        Literatures
                    </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{action('Admin\LiteratureController@index')}}">All</a></li>
                        <li><a href="{{action('Admin\LiteratureController@create')}}">New</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i
                                class="mdi mdi-account"></i>
                        <span class="hide-menu">
                        About Us
                    </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{action('Admin\SettingController@about')}}">Manage</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i
                            class="mdi mdi-account"></i>
                        <span class="hide-menu">
                        Messages
                    </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{action('Admin\MessageController@index')}}">All</a></li>
                    </ul>
                </li>
                <li><a class="waves-effect waves-dark" href="/admin/translations" aria-expanded="false"><i
                            class="mdi mdi-google-translate"></i>
                        <span class="hide-menu">
                        Website Words
                    </span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
