@extends('layouts.app')

@section('content')

<div id="welcome" class="container">
    <div class="row">
        <div class="col-lg-3">
            @include('includes.filter')
        </div>

        <div class="col-lg-8 ml-3 card" style="max-height: 2000px;padding:0;">



            <div id="carouselShow" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselShow" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselShow" data-slide-to="1"></li>
                            <li data-target="#carouselShow" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            @forelse ($house->photos as $key => $image)
                            <div class="carousel-item @if($key == 0) active @endif">
                                <img class="d-block w-100"
                                    src="{{ $image->path }}"
                                    alt="{{ $image->name }}">
                            </div>
                            @empty
                            <div class="carousel-item active">
                                <img src="" alt="{{ $image->name }}">
                            </div>
                            @endforelse
                        </div>
                        <a class="carousel-control-prev" href="#carouselShow" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselShow" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


            <div class="card mx-auto" style="max-height: 2000px;">

                <div class="card-body details_show">
                    <h5 class="card-title font-weight-bold">{{ $house->price }} €</h5>
                    <h3>{{ $house->name }}</h3>
                    <h4 class="card-text">{{ $house->zone->name }}</h4>
                    <div class="row">
                        <div class="col-lg-2">
                            <p>{{ $house->size }} m2</p>
                        </div>
                        <div class="col-lg-3">
                            <p><i class="fas fa-bed fa-2x"></i>     {{ $house->rooms }}    habitaciones</p>
                        </div>
                        <div class="col-lg-2 text-center">
                            <p><i class="fas fa-toilet fa-2x"></i>     {{ $house->bathrooms }}    baños</p>
                        </div>
                    </div>
                    <hr style="border-color: black; border-width: 2px;">
                    <div class="details_show" style="border-top:2px">
                        <h3>Descripcion</h3>
                        <p class="card-text">{{ $house->description_es }}</p>
                        <p>
                            <a class="btn btn-primary" href="tel:+34{{ $house->employee->phone }}">
                                <i class="fas fa-phone-square-alt fa-2x mr-2" style="vertical-align: bottom;"></i>
                                {{ $house->employee->phone }}
                            </a>

                        </p>
                    </div>
                    <hr style="border-color: black; border-width: 2px;">
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="font-weight-bold">Caracteristicas</h4>
                        </div>
                        <div class="col-md-3">
                            <p> {{ $house->rooms }} Habitaciones</p>
                            <p>Superficie {{ $house->size }} m2</p>
                            <p> {{ $house->bathrooms }} Baños</p>
                        </div>
                        <div class="col-md-3">
                            @if ($house->furnished == true)
                            <p>Amueblado: Si</p>
                            @else
                            <p>Amueblado: No</p>
                            @endif

                            @if ($house->elevator == true)
                            <p>Ascensor: Si</p>
                            @else
                            <p>Ascensor: No</p>
                            @endif


                            @if ($house->parking == true)
                            <p>Parking: Si</p>
                            @else
                            <p>Parking: No</p>
                            @endif

                    </div>
                    <div class="col-md-3">
                            @if ($house->air_conditioner == true)
                            <p>Aire acondicionado: Si</p>
                            @else
                            <p>Aire acondicionado: No</p>
                            @endif

                            <p>Calefaccion: {{ $house->climate->name }}</p>

                            <p> {{ $house->housetype->name }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
