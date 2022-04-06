<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($carouselImages as $carouselImage)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="@if ($loop->first) active @endif"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach($carouselImages as $carouselImage)
            <div class="carousel-item @if($loop->first) active @endif">
                <img src="{{$carouselImage}}" class="d-block w-100" alt="...">
            </div>
        @endforeach
        {{--<div class="carousel-item active">
            <img class="d-block w-100" src="https://wallpaperaccess.com/full/540880.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://cdn.wallpapersafari.com/4/30/BrdA3q.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://image.winudf.com/v2/image1/Y29tLmtvZ2kub2ZmaWNpYWxhcHBfc2NyZWVuXzBfMTU3MzQ4NTgxN18wNTM/screen-0.jpg?fakeurl=1&type=.jpg" alt="Third slide">
        </div>--}}
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
