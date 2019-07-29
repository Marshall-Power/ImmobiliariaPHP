@extends('layouts.app')
@include('cookieConsent::index')

@section('content')
<div id="welcome" class="container">
    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3">
            @include('includes.filter')
        </div>
        <div class="col-lg-9 col-md-9 col-sm-4 houses_div">
            <div class="btn btn-primary offset-lg-1">
                Comprar
            </div>
            <div class="btn btn-primary">
                Alquilar
            </div>
            <hr class="offset-lg-1">

            <div class="row houses_row">
                @forelse ($houses as $house)


                <div class="col-lg-12 offset-lg-1 house_card_main">
                    <div class="row house_card">
                        <div class="col-lg-4 house_card_img">
                            @if(!empty($house->photos))
                            <img src="{{ $house->photos()->first()->path }}" alt="{{ $house->name }}">
                            @endif
                        </div>
                        <div class="col-lg-4 offset-lg-2 house_card_info">
                            <h2 class="house_title_info">{{ $house->name }}</h2>
                            <p>{{ $house->description_es }}.</p>
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

@endsection

@section('form_filter')
<script>

    $(document).ready(function(){
        $('#send_filters').click(function(){
            var form = new FormData();

            var room_min = $('#slider-range-rooms').slider("option", "values")[0];
            var room_max = $('#slider-range-rooms').slider("option", "values")[1];

            var wc_min = $('#slider-range-bathroom').slider("option", "values")[0];
            var wc_max = $('#slider-range-bathroom').slider("option", "values")[1];

            var price_min = $('#slider-range-price').slider("option", "values")[0];
            var price_max = $('#slider-range-price').slider("option", "values")[1];

            var size_min = $('#slider-range-size').slider("option", "values")[0];
            var size_max = $('#slider-range-size').slider("option", "values")[1];




            form.append('room_min', room_min);
            form.append('room_max', room_max);

            form.append('wc_min', wc_min);
            form.append('wc_max', wc_max);

            form.append('price_min', price_min);
            form.append('price_max', price_max);

            form.append('size_min', size_min);
            form.append('size_max', size_max);

            alert(room_max);

            $params_GET = '?rooms_min='+ room_min +'&rooms_max='+ room_max + '&bathrooms_min=' + wc_min +
                        '&bathrooms_max=' + wc_max + '&price_min='+ price_min + '&price_max=' + price_max +
                        '&size_min=' + size_min+'&size_max=' + size_max;




            var xhr = new XMLHttpRequest;
            xhr.open('GET', '/', true);
            xhr.send(form);
            window.location.href = "/"+$params_GET;
        });
});
</script>
@endsection
