@extends('layouts.app')
@section('home')
<!-- Content Area -->
<section class="main-section">

    <!-- Contact Section -->
    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="section-title col-12">
                    <h2><span>PentestNow </span>Contact</h2>
                    <p>Pour tout question </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    @livewire('contatct-form')
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="contact-sidebar">
                        <h4>contact rapide</h4>
                        <p>Si vous avez des questions, utilisez simplement les coordonnées suivantes</p>
                        <ul class="list-unstyled add-grp">
                            <li>
                                <i class="zmdi zmdi-pin"></i>
                                <p>BP 242 Av. de L'Université, Kénitra</p>
                            </li>
                            <li>
                                <i class="zmdi zmdi-phone"></i>
                                <p>212 5 35 57 44 97,<br>212 5 35 57 44 84</p>
                            </li>
                            <li>
                                <i class="zmdi zmdi-email"></i>
                                <p>pentest@gmail.com</p>
                            </li>
                        </ul>
                        <ul class="list-unstyled social-icon clearfix">
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook-box"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-google-plus-box"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter-box"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
