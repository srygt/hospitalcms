<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Matgis" />
        <link rel="icon" href="{{asset('yonetici/images/favicon.png')}}" type="image/x-icon" />
        <link rel="shortcut icon" href="{{asset('yonetici/images/favicon.png')}}" type="image/x-icon" />
        <title>@yield('title')</title>
        <!-- Google font-->
        <link href="{{asset('yonetici/css/style.css')}}" rel="stylesheet">
    </head>
    <body>
        <!-- Loader starts-->
        <div class="loader-wrapper">
            <div class="theme-loader">
                <div class="loader-p"></div>
            </div>
        </div>
        <!-- Loader ends-->
        <!-- error page start //-->
        @yield('content')
        <!-- error page end //-->
        <!-- latest jquery-->
        <script src="{{asset('yonetici/vendor/global/global.min.js')}}"></script>
        <script src="{{asset('yonetici/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
        <script src="{{asset('yonetici/js/custom.min.js')}}"></script>
        <script src="{{asset('yonetici/js/deznav-init.js')}}"></script>	
    </body>
</html>



