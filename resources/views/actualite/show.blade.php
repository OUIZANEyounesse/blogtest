@extends('layouts.app')
@section('home')
<section id="hero">
    <div class="inner-banner" style="background-image:url(..\assets/images/banner-blog.jpg)">
        <div class="container">
            <h3 class="title">Detail <br><big><strong>Actualite</strong></big></h3>
        </div>
    </div>
</section>

<!-- Content Area -->
<section class="main-section blog-page">
    <!-- actuialite -->
   <x-show-a-e :item="$annonce" />
    </div>

</section>

@endsection
