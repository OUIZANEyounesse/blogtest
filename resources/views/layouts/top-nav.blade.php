<div id="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7">
                <div class="left">
                    <ul class="list-unstyled m-b-0">
                        <li><a href="javascript:void(0);" class="btn btn-link"><i class="zmdi zmdi-email m-r-5"></i>pentest@gmail.com</a>
                            <a href="javascript:void(0);" class="btn btn-link"><i class="zmdi zmdi-phone m-r-5"></i>+212 5 35 57 44 97/84</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="text-right">
                    <ul class="list-unstyled m-b-0">
                        @if (Auth::user())
                        <li>
                            <a href="{{route('visiteur.login')}}" class="btn btn-link">
                                <img   src="{{ Auth::user()->url() }}" alt="" width="30"  />
                            {{ Auth::user()->name }}
                        </a>
                        <a class="btn btn-link" href="{{ route('visiteur.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        se déconnecter
                                    </a>

                                    <form id="logout-form" action="{{ route('visiteur.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                        @else
                            <li>
                                <a href="{{route('visiteur.login')}}" class="btn btn-link">Se Connecter</a>
                                <a href="{{route('visiteur.register')}}" class="btn btn-link">inscription</a>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
