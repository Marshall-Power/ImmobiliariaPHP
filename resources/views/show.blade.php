@extends('layouts.app')
@section('css')
<style type="text/css">
    /* Set the size of the div element that contains the map */
    #map {
      height: 400px;  /* The height is 400 pixels */
      width: 100%;  /* The width is the width of the web page */
      background-color: grey;
     }
     
  </style>
@endsection 

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
                    <h3>{{ $house->name }} <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalmap"><i class="fas fa-map-marker-alt"></i></button> </h3>
                    <h4 class="card-text">{{ $house->zone->name }} </h4>
                    <div class="row">
                        <div class="col-lg-2">
                          <p><i class="fas fa-home fa-2x"></i> {{ $house->size }} m²</p>
                        </div>
                        <div class="col-lg-3">
                          <p><i class="fas fa-bed fa-2x"></i>     {{ $house->rooms }}   {{trans('messages.rooms')}}</p>
                        </div>
                        <div class="col-lg-2 text-center">
                          <p><i class="fas fa-toilet fa-2x"></i>     {{ $house->bathrooms }}    {{trans('messages.bathrooms')}}</p>
                        </div>
                    </div>
                    <hr style="border-color: black; border-width: 2px;">
                    <div style="border-top:2px">
                    <h3>{{trans('messages.desc')}}</h3>
                        <p class="card-text">{{ $house->description_es }}</p>
                        <a class="btn btn-primary" style="" href="tel:+34{{ $house->employee->phone }}"> <i
                                class="fas fa-phone-square-alt fa-2x" style="vertical-align: bottom;"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalmap" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalLabel">{{trans('messages.location')}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div id="map"></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('messages.close')}}</button>
            </div>
          </div>
        </div>
      </div>
      
@endsection('content')
@section('js')
<script defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_usw0PXe09QidUHvTnTYhQJWCIaj64CU&callback=initMap">
</script>
<script>
  // Initialize and add the map
  function initMap() {
    // The location of the house
    var pislat = parseFloat('{{$house->latitude}}'); console.log(pislat);
    var pislng = parseFloat('{{$house->longitude}}');console.log(pislng);
    var pis = {lat: pislat, lng: pislng}; console.log(pis);
    // The map, centered at the house
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 14, center: pis}); console.log(map);
    // The marker, positioned at the house
      var marker = new google.maps.Marker({position: pis, map: map}); console.log(marker);
  }
</script>
 
      
    
@endsection
