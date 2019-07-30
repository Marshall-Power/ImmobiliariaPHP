@extends('layouts.app')

@section('content')

<div id="welcome" class="container">
    <div class="row">
        <div class="col-lg-3">
            @include('includes.filter')
        </div>

        <div class="col-lg-8 ml-3 card" style="max-height: 2000px;padding:0;">
            <img class="card-img-top" style="max-height:300px;object-fit:cover;"
                    src="{{ $house->photos()->first()->path }}" alt="{{ $house->name }}">
            <div class="card mx-auto" style="max-height: 2000px;">

                <div class="card-body">
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
                    <div style="border-top:2px">
                        <h3>Descripcion</h3>
                        <p class="card-text">{{ $house->description_es }}</p>
                        <a class="btn btn-primary" style="" href="tel:+34{{ $house->employee->phone }}"> <i
                                class="fas fa-phone-square-alt fa-2x" style="vertical-align: bottom;"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
