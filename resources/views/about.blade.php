@extends('layouts.app')
@section('home')
<!-- Content Area -->
<section class="main-section">
    <!-- About Us Section -->
    <div class="about-us-section">
        <div class="container">
            <div class="row">
                <div class="section-title col-12">
                    <h2><span>About </span> PentestNow</h2>
                    <p> Plateforme crée par ELIADINI Chaimae</p>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-12">
                    <div class="box-img  m-b-20">
                        <img src="{{ Storage::url('images\fste\university.jpg') }} " alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="page-text">
                        <div class="section-top">
                            <p><strong>PentestNow</strong>  </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="page-text">
                        <div class="section-top">
                        <p>Crée en 2021 ,PentestNow est une plateforme crée pour aider les personnes a s'initier a la sécurité informatique,elle vise des étudiants , des travailleurs et tout personnes intéresses par la cyber sécurité</p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection
