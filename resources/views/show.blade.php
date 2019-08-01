@extends('layouts.app')
@section('css')
<style type="text/css">
    /* Set the size of the div element that contains the map */
    #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
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

        <div class="col-lg-8 ml-3 card" style="padding:0;">



            <div id="carouselShow" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselShow" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselShow" data-slide-to="1"></li>
                    <li data-target="#carouselShow" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @forelse ($house->photos as $key => $image)
                    <div class="carousel-item @if($key == 0) active @endif">
                        <img class="d-block w-100" height="400" style="object-fit:cover;"
                            src="{{ url('storage/' . $image->path) }}" alt="{{ $image->name }}">
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


            <div class="card mx-auto" style="max-height: 1000px;">

                <div class="card-body details_show">
                    <h5 class="card-title font-weight-bold">{{ number_format($house->price,0, ',','.') }} €</h5>
                    <div>
                        <h3 class="d-inline">{{ $house->name }}</h3>
                        <button type="button" class="btn btn-success d-inline-flex p-2 ml-2 mb-1" data-toggle="modal"
                            data-target="#modalmap">
                            <i style="vertical-align: middle;" class="fas fa-map-marker-alt"></i>
                        </button>
                    </div>
                    <h4 class="card-text">{{ $house->zone->name }} </h4>
                    <div class="row">
                        <div class="col-lg-2">
                            <p><i class="fas fa-home fa-2x"></i> {{ $house->size }} m²</p>
                        </div>
                        <div class="col-lg-3">
                            <p><i class="fas fa-bed fa-2x"></i> {{ $house->rooms }} {{trans('messages.rooms')}}</p>
                        </div>
                        <div class="col-lg-2 text-center">
                            <p><i class="fas fa-toilet fa-2x"></i> {{ $house->bathrooms }}
                                {{trans('messages.bathrooms')}}</p>
                        </div>
                    </div>
                    <hr style="border-color: black; border-width: 2px;">

                    <div class="details_show" style="border-top:2px">
                        <h3>{{trans('messages.desc')}}</h3>

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
                            <h4 class="font-weight-bold">{{trans('messages.details')}}</h4>
                        </div>
                        <div class="col-md-3">
                            <p> {{ $house->rooms }} {{trans('messages.rooms')}}</p>
                            <p>{{{trans('messages.size')}}} {{ $house->size }} m²</p>
                            <p> {{ $house->bathrooms }} {{trans('messages.bathrooms')}}</p>
                        </div>
                        <div class="col-md-3">
                            @if ($house->furnished == true)
                            <p>{{trans('messages.furnished')}}: {{trans('messages.yes')}}</p>
                            @else
                            <p>{{trans('messages.furnished')}}: {{trans('messages.no')}}</p>
                            @endif

                            @if ($house->elevator == true)
                            <p>{{trans('messages.elevator')}}: {{trans('messages.yes')}}</p>
                            @else
                            <p>{{trans('messages.elevator')}}: {{trans('messages.no')}}</p>
                            @endif


                            @if ($house->parking == true)
                            <p>Parking: {{trans('messages.yes')}}</p>
                            @else
                            <p>Parking: {{trans('messages.no')}}</p>
                            @endif

                        </div>
                        <div class="col-md-3">
                            @if ($house->air_conditioner == true)
                            <p>{{trans('messages.air_conditioner')}}: {{trans('messages.yes')}}</p>
                            @else
                            <p>{{trans('messages.air_conditioner')}}: {{trans('messages.no')}}</p>
                            @endif

                            <p>{{trans('messages.climate')}}: {{ $house->climate->name }}</p>

                            <p> {{ $house->housetype->name }}</p>

                        </div>
                    </div>
                    @auth
                    <div class="row">
                        <div class="col">
                            <div class="d-flex mt-2 justify-content-end">
                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                data-target="#eventModal">@lang('messages.booking')</button>
                            </div>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>

                @include('includes.suggestion')
        </div>
    </div>
        <!-- Modal -->
        <div class="modal fade" id="modalmap" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
            aria-hidden="true">
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
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">@lang('messages.close')</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal --}}
        <div id="eventModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">@lang('messages.add_event')</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body d-flex flex-column align-items-center">
                        <h3>@lang('messages.select_day')</h3>
                        <div id="datepicker"></div>
                        <div id="hoursWrapper">
                            <div class="row justify-content-center mt-2">
                                <div class="col-12 text-center">
                                    <h3>@lang('messages.avail_hours')</h3>
                                </div>
                                <div class="col-12">
                                    <div id="availHours" class="d-flex flex-wrap justify-content-center">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="eventDialog" title="@lang('messages.event_added')">
        </div>
        @endsection

        @section('js')

        <script>
            $( function() {
            $('#eventDialog').dialog({
                autoOpen: false,
            });
            $('#hoursWrapper').fadeOut();
            $( "#datepicker" ).datepicker({
                onSelect: function (date, obj) {
                    businessHours = _.range(10, 20);
                    axios.get('{{ url('/api/events') . '/' . $house->employee->id }}', {
                        params: {
                            start_date: moment(date).format('YYYY-MM-DD')
                        }
                    }).then(data => {
                        for (let event of data.data) {
                            var index = businessHours.indexOf(moment(event.start_date).hour());
                            if (index >= 0) {
                                businessHours.splice(index, 1)
                            }
                        }
                        var  html = "";
                        if (businessHours.length > 0) {
                            businessHours.forEach(hour => {
                                html += `
                                    <a data-hour="${hour}" data-date="${moment(date).format('YYYY-MM-DD')}" href="javascript:void(0);" class="btn btn-primary m-2 btn-hour">
                                    ${hour}
                                    </a>
                                `
                            });
                        } else {
                            html += `<p>@lang('messages.empty.hours')</p>`;
                        }

                        $('#availHours').html(html);
                        $('#hoursWrapper').fadeIn();
                        $('#eventModal').modal();

                    })
                    .catch(e => console.log(e));

                }
            });

            $(document).on('click', '.btn-hour', function() {
                let hour = $(this).attr('data-hour');
                let date = $(this).attr('data-date');

                let event = {
                    "house_id": '{{ $house->id }}',
                    "employee_id": '{{ $house->employee->id }}',
                    "client_id": '{{ auth()->user()->id }}',
                    "start_date": moment(date).hour(hour).format(),
                    "end_date": moment(date).hour(hour).add(1, 'hours').format(),
                }

                $.ajax({
                    url: '{{ route('events.store') }}',
                    method: 'POST',
                    data: {
                        ...event
                    },
                    success: function(data) {
                        $('#hoursWrapper').fadeOut();
                        $('#eventModal').modal('toggle');
                        $('#eventDialog').html(`<p> @lang('messages.new_event_added') ${data.event.start_date} @lang('messages.to') ${data.event.end_date}`);
                        $('#eventDialog').dialog("open");

                    },
                    error: function(err) {
                        console.log(err);
                    }
                })
            });
        });
        </script>

        <script>
            // Initialize and add the map
  function initMap() {
    // The location of the house
    var pislat = parseFloat('{{$house->latitude}}');
    var pislng = parseFloat('{{$house->longitude}}');
    var pis = {lat: pislat, lng: pislng};
    // The map, centered at the house
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 16, center: pis});
    // The marker, positioned at the house
      var marker = new google.maps.Marker({
        position: pis,
        map: map,
        animation: google.maps.Animation.BOUNCE,
        });
  }
        </script>
        @endsection
