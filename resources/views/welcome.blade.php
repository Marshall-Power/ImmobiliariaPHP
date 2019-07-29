@extends('layouts.app')
@include('cookieConsent::index')
@section('css')
<style>
    /* Set the size of the div element that contains the map */
    #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
    }
</style>
@endsection
@section('content')
<div id="welcome" class="container">
    <div class="row">
        <div class="col-lg-3">
            @include('includes.filter')
        </div>
        <div class="col-lg-9">
            <button class="btn btn-primary mr-2" onclick="toggleList()">
                <i class="fas fa-list"></i> {{trans('messages.list')}}
            </button>
            <button class="btn btn-primary" onclick="toggleMap();">
                <i class="fas fa-map-marker-alt"></i> {{trans('messages.map')}}
            </button>
            <hr>

            <div class="map-wrapper">
                <h3>Habitatges a Girona</h3> <!-- Esto con el sistema de traducción -->
                <div id="map"></div>
            </div>
            <!--The div element for the map -->

            <div class="list-wrapper">
                <div class="row">
                    @forelse ($houses as $house)

                    <div class="col-md-6 py-2">
                        <div class="card mx-auto" style="max-height: 500px;">
                            <img class="card-img-top" style="max-height:300px;object-fit:cover;"
                                src="{{ $house->photos()->first()->path }}" alt="{{ $house->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $house->name }}</h5>
                                <p class="card-text">{{ str_limit($house->description_es, $limit = 150, $end = '...') }}</p>
                                <a href="#" style="font-size: 1rem;" class="btn btn-primary btn-lg">Detalles</a>
                                <a class="btn btn-primary" style="" href="tel:+34{{ $house->employee->phone }}"> <i
                                        class="fas fa-phone-square-alt fa-2x" style="vertical-align: bottom;"></i> </a>
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

</div>

@endsection

@section('js')
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_usw0PXe09QidUHvTnTYhQJWCIaj64CU&callback=initMap">
</script>
<script>
    function initMap(){
        $.ajax({
          url:'{{url('/api/houses')}}',
          method:"POST",
          dataType:"JSON",
          success:function(result){
            // The location of Girona
            var girona = {lat: 41.983333, lng: 2.816667};
            // The map, centered at Girona
            var map = new google.maps.Map(document.getElementById('map'), {zoom: 12, center: girona});

            result.forEach(function(item, index){
              var casa = {lat: parseFloat(item.latitude), lng: parseFloat(item.longitude)};
              if(item.contract_id==1){
                var contr = "€/"+'{{trans('messages.month')}}';
              }else{
                var contr = "€";
              }
              var contentString = "<div class='card' style='width: 15rem; margin-top:0'>"+
                "<img class='card-img-top' src='https://img3.idealista.com/blur/WEB_DETAIL_TOP-XL-L/0/id.pro.es.image.master/2c/33/75/693467457.jpg' alt='Card image cap'>"+
                "<div class='card-body'>"+
                  "<h5 class='card-title'>"+item.name+"</h5>"+
                  "<h6 class='card-subtitle mb-2 text-muted'>"+item.address+"</h6>"+
                  "<p class='card-text'>"+parseInt(item.price)+" "+contr+"</p>"+
                  "<p class='card-text'>"+item.rooms+" "+'{{trans('messages.rooms')}}'+" </p>"+
                  "<p class='card-text'>"+item.size+" m²</p>"+
                  "<a href='#' class='btn btn-primary'>"+'{{trans('messages.details')}}'+"</a>"+
                "</div>"+
              "</div>";

              var infowindow = new google.maps.InfoWindow({
                content: contentString
              });
              var marker = new google.maps.Marker({position: casa,
                                                    map: map,
                                                    title: item.name});
              marker.addListener('click', function() {
                infowindow.open(map, marker);
              });
              marker.setMap(map);
            });
          console.log();
          }
        });
        }
</script>


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




            // var xhr = new XMLHttpRequest;
            // xhr.open('GET', '/', true);
            // xhr.send(form);
            window.location.href = "/"+$params_GET;
        });
});
</script>

<script>
    function toggleList() {
        $('.list-wrapper').fadeIn()
        $('.map-wrapper').fadeOut()
    }

    function toggleMap() {
        $('.map-wrapper').fadeIn()
        $('.list-wrapper').fadeOut()
    }
    $(function() {
        toggleList();
    })
</script>
@endsection
