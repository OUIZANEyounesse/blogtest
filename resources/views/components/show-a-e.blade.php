<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card single_post">
                <div class="card-body">
                    <h3 class="m-t-0 m-b-5"><a href="">{{ $item->title }}</a></h3>
                    <ul class="meta">
                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Poste par : </a></li>
                        @if ($item->local)
                            <li class="">
                                <i class="zmdi zmdi-pin"></i> <span>{{ $item->local }}</span>
                            </li>
                            @endif
                             @if ($item->date_evenement)
                             <li class="">
                                 <i class="zmdi zmdi-calendar"></i> <span>{{ \Carbon\Carbon::parse($item->date_debut)->format('D M  Y') }}</span>
                             </li>
                             @endif
                    </ul>
                </div>
                <div class="card-body">
                    <x-image-or-plus :images=" $item->images" />
                    <p>{{ $item->contenu }}</p>
                </div>
            </div>
        </div>
        </div>
    </div>
