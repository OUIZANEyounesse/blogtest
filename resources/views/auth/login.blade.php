@extends('layouts.header_auth')
 @section('auth_etudiant')


<div class="container col-md-3 col-sm-6">
    <div class="card" style="background-color: rgba(245, 245, 245, 0.1);">
        <h5 class="card-header text-center">Se Connecter</h5>
        <h3 class="card-title text-center"><img class="col-md-12" src="{{asset('assets\images\logo.png')}}" alt="" /></h3>
        <div class="card-body">
            <form method="POST" action="{{ route('visiteur.login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" placeholder="mon-nom@gmail.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Mot de Passe</label>
                    <a href="#" style="float: right; font-size: 12px;">Mot de passe oublié ?</a>
                    <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe" required autocomplete="current-password" />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="checkbox">
                    <input id="terms" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} >
                    <label for="terms">
                        Souviens-toi de moi
                    </label>
                </div>


                <button type="submit" class="btn btn-primary btn-block">Se Connecter</button>

                {{--
                <div class="sign-up">Don't have an account? <a href="#">Create One</a></div>
                --}}
            </form>
        </div>
    </div>
</div>
@endsection
