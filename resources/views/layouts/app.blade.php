<!doctype html>
<html class="no-js " lang="fr">
@include('layouts.head')
<body>
@yield('loading')

<div class="wrapper">
    <div class="main_header">
        @include('layouts.top-nav')
        @if(session('status'))
    <div class="alert alert-success">
        {{ session('status')}}
    </div>
    @endif
        @include('layouts.header')
        @include('layouts.navbar')
    </div>

    @yield('home')
    @include('layouts.footer')
</div>
@include('layouts.script')
<livewire:scripts>
</body>
</html>
