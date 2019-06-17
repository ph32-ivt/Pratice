<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
</head>
<body>

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <div class="container">
        @yield('content')
        </div>
        
    </div>

    @yield('script')
    <!-- //Main wrapper -->

    <!-- JS Files -->

</body>
</html>
