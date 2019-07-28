@extends('layouts.app')

@section('content')
<div id="welcome" class="container">
    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3">
            @include('includes.filter')
        </div>
        <div class="col-lg-9 col-md-9 col-sm-4 houses_div">
            <div class="btn btn-primary offset-lg-1">
                <p>Comprar</p>
            </div>
            <div class="btn btn-primary">
                <p>Alquilar</p>
            </div>
            <hr class="offset-lg-1">

            <div class="row houses_row">
                @forelse ($houses as $house)


                <div class="col-lg-12 offset-lg-1 house_card_main">
                    <div class="row house_card">
                        <div class="col-lg-4 house_card_img">
                            <img src="{{ $house->photos()->first()->path }}" alt="{{ $house->name }}">
                        </div>
                        <div class="col-lg-4 offset-lg-2 house_card_info">
                            <h2 class="house_title_info">{{ $house->name }}</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, fuga.</p>
                            <ul class="house_list_info">
                                <li>Direccion: {{ $house->address }}</li>
                                <li>Precio: <strong>{{ $house->price }}</strong></li>
                                <li>N. Habitaciones: {{ $house->rooms }}</li>
                            </ul>

                            <div class="row">
                                <div class="col-lg-1">
                                    <i class="fas fa-phone-square-alt fa-2x"></i>
                                </div>
                                <div class="col-lg-3 offset-lg-2">
                                    <div class="btn btn-primary details_btn">Detalles</div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 pull-lg-1 card_div">
                            <div class="card">
                                <img class="card-img-top"
                                    src="https://inmobiliarialowcostalbacete.com/wp-content/uploads/2017/07/inmobiliaria-low-cost-tu-gran-acierto-1.png"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary">Reserva Visita</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @empty
                @endforelse
            </div>
        </div>

    </div>

@endsection('content')
