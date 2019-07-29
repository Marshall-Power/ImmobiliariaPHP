@extends('layouts.app')
@include('cookieConsent::index')

@section('content')
<div id="welcome" class="container">
    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3">
            @include('includes.filter')
        </div>
        <div class="col-lg-10 col-md-10 col-sm-4">
            <div class="btn btn-primary offset-lg-1">
                Comprar
            </div>
            <div class="btn btn-primary">
                Alquilar
            </div>
            <hr class="offset-lg-1">

            <div class="row">
                @forelse ($houses as $house)

                <div class="col-md-6 my-2" style="max-height: 500px;">
                    <div class="card mx-auto" style="">
                        <img class="card-img-top" style="max-height:300px;object-fit:cover;"
                            src="{{ $house->photos()->first()->path }}" alt="{{ $house->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $house->name }}</h5>
                            <p class="card-text">{{ str_limit($house->description_es, $limit = 150, $end = '...') }}</p>
                            <a href="tel:+34{{$house->employee->phone}}"> <i class="fas fa-phone-square-alt fa-2x"></i></a>
                            <a href="#" class="btn btn-primary">Detalles</a>

                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
            <div id="pagination">
                {{ $houses->links() }}
            </div>
        </div>
    </div>

</div>

@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('#send_filters').click(function(){
            var form = new FormData();

            var filter_data = {!! json_encode($request->toArray()) !!};

            $('#slider-range-rooms').slider("option", "values")[0] = filter_data.room_min;
            $('#slider-range-rooms').slider("option", "values")[1] = filter_data.room_max;

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
