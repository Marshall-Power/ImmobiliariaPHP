@extends('layouts.app')
@section('css')

<style>
    /* Set the size of the div element that contains the map */
    #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
    }

    #legend {
        font-family: Arial, sans-serif;
        background: #fff;
        padding: 10px;
        margin: 10px;
        border: 3px solid #000;

      }
      #legend h3 {
        margin-top: 0;
      }
      #legend img {
        vertical-align: middle;
      }

      .markerimg{
        width:30%;
      }
    .hide {
        display: none;
    }

    .font_house_title {
        font-family: 'Ubuntu', sans-serif;
    }

    .card #detailsPhone
    {
        opacity: 0;
        transition: opacity 200ms;

    }

    .card:hover #detailsPhone
    {
        opacity: 1;
    }


</style>

@endsection
@section('content')
<div class="container">
    <div class="row">

        <div class="col-lg-3 mb-4">
            @include('includes.filter')
        </div>

        <div class="col-lg-9">
            <button class="btn btn-primary mr-2" onclick="toggleList()">
                <i class="fas fa-list"></i> @lang('messages.list')
            </button>

            <button class="btn btn-primary" onclick="toggleMap();">
                <i class="fas fa-map-marker-alt"></i> @lang('messages.map')
            </button>

              </li>
            <hr>

            <div class="map-wrapper hide">
                <h3>{{trans('messages.houses_map')}}</h3>
                <div id="map"></div>
                <div id='legend'></div>
            </div>
            <!--The div element for the map -->

            <div class="list-wrapper">
                <div class="row">
                    @forelse ($houses as $house)
                    <div class="col-md-6">
                        <div class="card mb-4" style="min-height: 500px;">
                            <a class="card-link" href="{{ route('show', $house->id) }}">
                                <img class="card-img-top" style="max-height:250px;object-fit:cover;"
                                    src="{{ $house->photos()->first()->path }}" alt="{{ $house->name }}">
                            </a>
                            <div class="card-body" id="card-body">
                                <h5 class="font_house_title card-title">{{ $house->name }}</h5>
                                <p class="card-text">
                                    @if(app()->getLocale() == "es")
                                    {{ str_limit($house->description_es, $limit = 150, $end = '...') }}
                                    @else
                                    {{ str_limit($house->description_ca, $limit = 150, $end = '...') }}
                                    @endif
                                </p>
                                <div id="detailsPhone" class="position-absolute p-4" style="bottom: 0; right: 0;">
                                    <a href="{{ route('show', $house->id) }}" style="font-size: 1rem;" class="btn btn-primary btn-lg">
                                        {{trans('messages.details')}}</a>
                                    <a class="btn btn-info text-white" href="tel:+34{{ $house->employee->phone }}">
                                        <i class="fas fa-phone-square-alt fa-2x" style="vertical-align: bottom;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col text-center mt-4">
                        <p>@lang('messages.not_found')</p>
                    </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    function initMap(){

                // The location of Girona
                var girona = {lat: 41.983333, lng: 2.816667};
                // The map, centered at Girona
                var map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 12, center: girona});
                var result = [];

                @foreach($houses as $house)
                var obj = {
                  id: '{{ $house->id }}',
                  name: '{{ $house->name }}',
                  address: '{{ $house->address }}',
                  latitude: '{{ $house->latitude }}',
                  longitude: '{{ $house->longitude }}',
                  price: '{{ $house->price }}',
                  rooms: '{{ $house->rooms }}',
                  size: '{{ $house->size }}',
                  contract_id: '{{ $house->contract_id}}',
                }
                result.push(obj);
                @endforeach

                result.forEach(function(item, index) {
                    var casa = {
                        lat: parseFloat(item.latitude),
                        lng: parseFloat(item.longitude)
                    };

                    if(item.contract_id==1){
                        var contr = "€/"+'{{trans('messages.month')}}';
                    } else{
                        var contr = "€";
                    }

                    var contentString = `
                    <div class='container text-align-left'>
                        <h5><u>${item.name}</u></h5>
                        <h6 class='text-muted'>${item.address}</h6>
                        <p class="mb-1"><b style="color:red">${parseInt(item.price)}</b> ${contr} ${item.size} m²</p>
                        <p class="mb-1">${item.rooms} {{ trans('messages.rooms') }}</p>
                        <a href='/show/${item.id}' class='btn btn-primary'>{{ trans('messages.details') }}</a>
                    </div>`

                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    var icon1 = {
                        url: "http://maps.google.com/mapfiles/kml/paddle/red-circle.png", // url
                        scaledSize: new google.maps.Size(40, 40), // scaled size
                        origin: new google.maps.Point(0,0), // origin
                        anchor: new google.maps.Point(0, 0) // anchor
                    };

                    var icon2 = {
                        url: "http://maps.google.com/mapfiles/kml/paddle/blu-circle.png", // url
                        scaledSize: new google.maps.Size(40, 40), // scaled size
                        origin: new google.maps.Point(0,0), // origin
                        anchor: new google.maps.Point(0, 0) // anchor
                    };
                    var icon = "";
                    if (item.contract_id == 1){
                      var marker = new google.maps.Marker({
                        position: casa,
                        map: map,
                        icon: icon1,
                        title: item.name
                    });
                    }else{
                      var marker = new google.maps.Marker({
                        position: casa,
                        map: map,
                        icon: icon2,
                        title: item.name
                    });
                    }

                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                    });

                    marker.setMap(map);


                    var legend = document.getElementById('legend');
                    legend.innerHTML = "<img class='markerimg' src='http://maps.google.com/mapfiles/kml/paddle/red-circle.png'> "  + '{{trans('messages.rent')}}' + "<br>";
                    legend.innerHTML += "<img class='markerimg' src='http://maps.google.com/mapfiles/kml/paddle/blu-circle.png'> "  + '{{trans('messages.buy')}}' ;
                    map.controls[google.maps.ControlPosition.TOP_CENTER].push(legend);

                });


      }



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

$(document).ready(function(){
    $("#card-body").mouseenter(function(){

        $("#detailsPhone").addClass("show");

    });
    $("#card-body").mouseleave(function(){

        $("#detailsPhone").removeClass("show");
    });
});


</script>
@endsection
