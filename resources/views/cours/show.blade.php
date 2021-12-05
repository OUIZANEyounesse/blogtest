@extends('layouts.app')
@section('home')
<section id="hero">
    <div class="inner-banner" style="background-image:url(..\assets/images/banner-blog.jpg)">
        <div class="container">
            <h3 class="title">Detail <br><big><strong>Cours</strong></big></h3>
        </div>
    </div>
    <div class="container-fluid">
    <div class="row clearfix">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="body">
                    <h6>Date debut et fin de Cours</h6>
                    <div class="table-responsive">
                        <table class="table table-hover m-t-20">
                            <tbody>
                                <tr>
                                    <td>Debut</td>
                                    <td>{{ $cour->date_debut }}</td>
                                </tr>
                                <tr>
                                    <td>Fin</td>
                                    <td>{{ $cour->date_fin }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <h6>Participant</h6>
                    @foreach($cour->paragraphs as $para)

                    <p>{{html_entity_decode($para->contenu)}}</p>
                    @if($para->image!=NULL)
                    <img class="img-fluid rounded m-b-20" src="{{$para->url()}}" alt="chaian" >



                    <!-- @endif -->
                    <!-- <a href="http://google.com" target="_blank" rel="noopener noreferrer">google</a>
                 -->


                    @Endforeach


                </div>
            </div>
        </div>


    </div>
</div>
</section>





@endsection
