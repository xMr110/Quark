<!doctype html>
<html lang="en">
<head>
    @include('layouts.meta')
    <!-- Title -->
        <title>@yield('title') - {{isset($settings->title)?$settings->title:''}}</title>
</head>
<body>
@include('layouts.navbar')

@yield('content')



@include('layouts.footer')
@include('layouts.scripts')
@yield('script')
</body>
</html>
