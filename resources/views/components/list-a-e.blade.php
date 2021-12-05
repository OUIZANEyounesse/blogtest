<div class="event-section section-65-50">
    <div class="container">
        <div class="row clearfix">
            <ul class="list-unstyled event-list col-12">
                @foreach ($items as $item)
                <li class="event-box ">
                    <div class="event-img col-lg-4">
                        @if ($route == "cours.show")
                            <img src="{{Storage::url($item->image)  }}">
                        @else
                            <img src="{{ $item->images->first()->url() }}">
                        @endif
                    </div>
                    <div class="event-dep">
                        <ul class="list-unstyled clearfix event-time-date">
                            <li class="float-left"><i class="zmdi zmdi-calendar">
                                </i> <span>{{ \Carbon\Carbon::parse($item->date_debut)->diffForHumans()}}</span>
                            </li>
                            @if ($item->local)
                            <li class="float-left">
                                <i class="zmdi zmdi-pin"></i> <span>{{ $item->local }}</span>
                            </li>
                            @endif
                             @if ($item->date_evenement)
                             <li class="float-left">
                                 <i class="zmdi zmdi-calendar"></i> <span>{{ \Carbon\Carbon::parse($item->date_debut)->format('D M  Y') }}</span>
                             </li>
                             @endif
                        </ul>
                        <h2 class="event-name">{{ $item->title }}</h2>
                        <p>{{ substr( $item->contenu ,0, 120) }} [...]</p>
                        <a class="btn btn-round btn-simple" href=" {{ route($route, $item->id) }}">plus</a>
                    </div>

                @endforeach
                </li>
            </ul>
        </div>
        <div class="m-5">

            {{ $items->links() }}
        </div>
    </div>
</div>
