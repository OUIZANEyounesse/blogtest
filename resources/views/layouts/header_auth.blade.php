<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit." />

        <title>.:: Authentication :: PFE ::.</title>
        <!-- Favicon-->
        <link rel="icon" href="{{asset('assets\images\favicon.ico')}}" type="image/x-icon" />
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{asset('assets\plugins\bootstrap\css\bootstrap.min.css')}}" />
        {{--
        <link rel="stylesheet" href="{{asset('assets\css\main.css')}}" />
        <link rel="stylesheet" href="{{asset('assets\css\authentication.css')}}" />

        --}}
       {{--  <link rel="stylesheet" href="{{asset('assets\css\main.css')}}" /> --}}
    {{--     <link rel="stylesheet" href="{{asset('assets\css\color_skins.css')}}" /> --}}

    </head>

    <body style="background-image:url({{asset('assets/images/login.jpg')}})">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a href="{{route('home')}}" class="navbar-brand">
                        <img src="{{asset('assets\images\logod.png')}}" height="28" alt="FSTE" />
                    </a>
                    {{--
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    --}}
                </div>
            </nav>
            @include('layouts.notify')
            <main class="py-4">
                @yield('auth_etudiant')


            </main>
        </div>
        <!-- Jquery Core Js -->
        <script src="{{asset('assets\bundles\libscripts.bundle.js')}}"></script>
        <script src="{{asset('assets\bundles\vendorscripts.bundle.js')}}"></script>

        <script src="{{asset('\assets\plugins\bootstrap-notify\bootstrap-notify.js')}}"></script>
        <script src="{{asset('\assets\bundles\mainscripts.bundle.js')}}"></script>
        <script src="{{asset('\assets\js\pages\ui\notifications.js')}}"></script>
        <!-- Lib Scripts Plugin Js -->

        <script>
            $(".navbar-toggler").on("click", function () {
                $("html").toggleClass("nav-open");
            });
            //=============================================================================
            $(".form-control")
                .on("focus", function () {
                    $(this).parent(".input-group").addClass("input-group-focus");
                })
                .on("blur", function () {
                    $(this).parent(".input-group").removeClass("input-group-focus");
                });
        </script>

    </body>
</html>
