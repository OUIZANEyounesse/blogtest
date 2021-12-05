<div id="navbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-lg-2 col-3 mr-0">
                <a href="{{route('home')}}" class="navbar-brand"><img src="{{asset('assets\images\logo.png')}}" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item @if(\Request::route()->getName() == 'home') active @endif">
                        <a class="nav-link" href="{{route('home')}}">Acceuil</a>
                    </li>
                    <li class="nav-item {{ request()->segment(1) == 'actualite'  ? 'active ' : '' }}" >
                        <a class="nav-link" href="{{ route('actualite.index') }}">Actualite</a>
                    </li>
                    <li class="nav-item {{ request()->segment(1) == 'cours'  ? 'active ' : '' }}">
                        <a class="nav-link" href="{{ route('cours.index') }}">Cours</a>
                    </li>

                    
    
                    <li class="nav-item {{ request()->segment(1) == 'contact'  ? 'active ' : '' }}">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item {{ request()->segment(1) == 'about'  ? 'active ' : '' }}">
                        <a class="nav-link" href="{{route('about')}}">about</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
