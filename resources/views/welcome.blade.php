@extends('layouts.app')
@include('cookieConsent::index')
@section('css')
<style>
  /* Set the size of the div element that contains the map */
  #map {
    height: 400px;  /* The height is 400 pixels */
    width: 100%;  /* The width is the width of the web page */
    }
</style>
@endsection
@section('content')
<div id="welcome" class="container">
    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3">
            @include('includes.filter')
        </div>
        <div class="col-lg-9 col-md-9 col-sm-4 houses_div">
            <div class="btn btn-primary offset-lg-1">
              <i class="fas fa-list"></i> {{trans('messages.list')}}
            </div>
            <div class="btn btn-primary">
              <i class="fas fa-map-marker-alt"></i> {{trans('messages.map')}}
            </div>
            <hr class="offset-lg-1">
            <h3>Habitatges a Girona</h3> <!-- Esto con el sistema de traducción -->
   
    <!--The div element for the map -->
    <div id="map"></div>
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
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_usw0PXe09QidUHvTnTYhQJWCIaj64CU&callback=initMap">
    </script>
    
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
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, fuga.</p>
                            <ul class="house_list_info">
                            <li>{{trans('messages.address')}}: {{ $house->address }}</li>
                                <li>{{trans('messages.price')}}: <strong>{{ $house->price }}</strong></li>
                                <li>N. {{trans('messages.rooms')}}: {{ $house->rooms }}</li>
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
