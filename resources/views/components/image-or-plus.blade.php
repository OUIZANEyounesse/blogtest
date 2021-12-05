@if($nbImage==1)
<div class="img-post m-b-15">
    <img src="{{ $images->first()->url() }}" alt="Awesome Image">
    <div class="social_share">
    </div>
</div>
@else
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            @foreach ($images as $image )
                <div class="carousel-item col-lg-8 {{ $loop->first ? 'active':'' }}">
                    <img class="d-block img-fluid" src="{{ $image->url() }}" alt="{{ $image->alt }}">
                </div>
            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endif
