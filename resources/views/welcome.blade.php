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

    .hide {
        display: none;
    }

    .font_house_title
    {
        font-family: 'Ubuntu', sans-serif;
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
            </div>
            <!--The div element for the map -->

            <div class="list-wrapper">
                <div class="row">
                    @forelse ($houses as $house)
                    <div class="col-md-6">
                        <div class="card mb-4" style="min-height: 500px;">
                            <img class="card-img-top" style="max-height:250px;object-fit:cover;"
                                src="{{ url('storage/' . $house->photos()->first()->path) }}" alt="{{ $house->name }}">
                            <div class="card-body">
                                <h5 class="font_house_title card-title">{{ $house->name }}</h5>
                                <p class="card-text">
                                    {{ str_limit($house->description_es, $limit = 150, $end = '...') }}
                                </p>
                                <div class="position-absolute p-4" style="bottom: 0; right: 0;">
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
<script>
    function initMap(){
        $.ajax({
            url:'{{url('/api/houses')}}',
            method:"POST",
            dataType:"JSON",
            success: function(result){
                // The location of Girona
                var girona = {lat: 41.983333, lng: 2.816667};
                // The map, centered at Girona
                var map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 12, center: girona});

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
                    <div class='container text-center'>
                        <h5><u>${item.name}</u></h5>
                        <h6 class='text-muted'>${item.address}</h6>
                        <p class="mb-1">${parseInt(item.price)} ${contr} ${item.size} m²</p>
                        <p class="mb-1">${item.rooms} {{ trans('messages.rooms') }}</p>
                        <a href='/show/${item.id}' class='btn btn-primary'>{{ trans('messages.details') }}</a>
                    </div>`

                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    var marker = new google.maps.Marker({
                        position: casa,
                        map: map,
                        title: item.name
                    });

                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                    });

                    marker.setMap(map);
                });

            }
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
</script>
@endsection
