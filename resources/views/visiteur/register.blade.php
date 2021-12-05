<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit." />

        <title>.:: Authentication :: Pentesting Now ::.</title>
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
                        <img src="{{asset('assets\images\logod.png')}}" height="28" alt="pentesting" />
                    </a>
                    {{--
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    --}}
                </div>
            </nav>
            <main class="py-4">

                <div class="container col-md-6 col-sm-12">
                    <div class="card" style="background-color: rgba(36, 36, 39, 0.596);">
                        <h5 class="card-header text-center text-white">Inscription </h5>
                        <div class="card-body">
                            <form class="clear-both" method="POST" enctype="multipart/form-data" action="{{ route('visiteur.register') }}">
                                @csrf

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="username">Nom Utilisateur<sup class="text-danger">*</sup></label>
                                        <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required  autocomplete="username" autofocus />
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                     <div class="form-group col-md-6">
                                        <label for="email">{{ __('Email') }}<sup class="text-danger">*</sup></label>
                                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="avatar">{{ __('Image') }}<sup class="text-danger">*</sup></label>
                                        <input type="file" class="form-control-file @error('avatar') is-invalid @enderror" id="avatar" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus />
                                        @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div> --}}

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="password">{{ __('password') }}<sup class="text-danger">*</sup></label>
                                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required  autocomplete="password" autofocus />
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                     <div class="form-group col-md-6">
                                        <label for="repPassword">Repeter password<sup class="text-danger">*</sup></label>
                                        <input type="password" id="repPassword" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" required autocomplete="new-password" autofocus />
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <hr />
                                <div class="form-row">
                                    <div class="form-group col-md-4 ">
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <button type="submit" class="btn btn-primary">{{ __('Inscrire') }}</button>
                                    </div>
                                    <div class="form-group col-md-4 ">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <style>
                    label {
                        color: white;
                    }
                </style>

            </main>
        </div>
        <!-- Jquery Core Js -->
        <script src="{{asset('assets\bundles\libscripts.bundle.js')}}"></script>
        <script src="{{asset('assets\bundles\vendorscripts.bundle.js')}}"></script>


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
