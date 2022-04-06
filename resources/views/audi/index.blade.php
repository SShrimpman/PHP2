@extends('master.main')

@section('content')
    @component('components.carousel.carousels',[
    'carouselImages'=> $carouselImages
    ])
    @endcomponent
    @component('components.cards.cards')
    @endcomponent
    <div class="container">
        <div class="row">
    @component('components.text.texts', [
    'images'=> $imagesText
])
    @endcomponent
        </div>
    </div>
@endsection
