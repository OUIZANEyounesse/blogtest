@extends('layouts.app')
@section('home')
     <!-- start hero -->
     <section id="hero">
        <div class="inner-banner" >
            <div class="container">
                <h3 class="title">List<br><big><strong>Cours</strong></big></h3>
            </div>
        </div>
    </section>
    <!-- Content Area -->
    <section class="main-section">
        <!-- Event -->
        <x-list-a-e :items="$cours" route="cours"/>
        <!-- FAQs -->
    </section>
@endsection
