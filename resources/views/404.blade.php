<!doctype html>
<html class="no-js " lang="fr">
@include('layouts.head')
<body>
@yield('loading')

<div class="wrapper">
    <div class="main_header">
      <!-- start hero -->

<!-- Content Area -->
<section class="container">
    <h3 class="title">PentestNow <br><big><strong>404</strong></big></h3>
   <!-- About Us Section -->
   <div class="page-not-found">
       <div class="container">
           <div class="row">
               <div class="col-12 text-center">
                   <h2 class="top-big">404</h2>
                   <h6>PAGE DÉSOLÉ INTROUVABLE</h6>
                   <p>La page que vous recherchez n’est pas disponible ou a été supprimée.<br> essayer d'aller au <strong>PAGE D'ACCEUIL </strong>en utilisant le bouton ci-dessous.</p>
                   <p><a class="btn btn-primary btn-round text-uppercase" href="{{ route('home') }}">allez sous Accueil</a></p>
               </div>
           </div>
       </div>
   </div>
</section>
</div>
@include('layouts.pfe.script')
</body>
</html>


