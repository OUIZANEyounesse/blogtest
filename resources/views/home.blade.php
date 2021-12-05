@extends('layouts.app')
@section('home')
{{--  slider  start --}}
<section id="hero">
<div  id="carouselExampleCaptions"   class="carousel slide"  data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    @for ($i =1 ; $i < $annonces->count() ; $i++)
    <li data-target="#carouselExampleCaptions" data-slide-to="{{ $i }}"></li>
    @endfor
  </ol>
  <div class="carousel-inner">
      @foreach ($annonces as $annonce )
      <div class="carousel-item {{ $loop->first ? 'active': '' }} ">
        {{-- {{ dd($annonce->images->first()->url())}} --}}
        <img src="{{ $annonce->images->first()->url()}}" class="d-block w-100 slideim" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>{{ $annonce->title}}</h5>
          <p>{{ $annonce->contenu}}</p>
          <p><a href="{{ route('actualite.show', $annonce->id) }}" class="btn btn-primary btn-round"> detail</a> </p>
        </div>
      </div>
      @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


{{-- slider end  --}}

</section>





    <!-- Home Fun Fact -->
    <div class="fun-fact">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="fun-fact-box text-center"> <i class="zmdi zmdi-account"></i> <span class="counter timer" data-from="0" data-to="652" data-speed="2500" data-fresh-interval="700">181</span>
                        <p>Visiteur</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="fun-fact-box text-center"> <i class="material-icons">school</i> <span class="counter timer" data-from="0" data-to="7652" data-speed="2500" data-fresh-interval="700">3000</span>
                        <p> Coures.</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="fun-fact-box text-center "> <i class="material-icons">account_balance</i> <span class="counter timer" data-from="0" data-to="8" data-speed="2500" data-fresh-interval="700">8</span>
                        <p>Départements</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="fun-fact-box text-center"><i class="material-icons">group</i> <span class="counter timer" data-from="0" data-to="52" data-speed="2500" data-fresh-interval="700">26</span>
                        <p>Étudiants</p>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- Home Support -->
    <div class="support-home text-center xl-darkblack">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>s'initier a la sécurité informatique</h4>
                     <a class="btn btn-primary btn-round" href="{{ route('visiteur.register') }}">inscription</a>
                </div>
            </div>
        </div>
    </div>


</section>

@endsection
