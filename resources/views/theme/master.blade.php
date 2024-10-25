<!DOCTYPE html>
<html lang="en">
@include('theme.partial.head')

<body>
    <!--================Header Menu Area =================-->
    @include('theme.partial.header')
    <!--================Header Menu Area =================-->


    @yield('content')

    <!--================ Start Footer Area =================-->
    @include('theme.partial.footer')
    <!--================ End Footer Area =================-->
    @include('theme.partial.scripts')


</body>

</html>
