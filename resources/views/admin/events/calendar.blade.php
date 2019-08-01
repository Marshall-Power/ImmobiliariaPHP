@extends('layouts.admin')

@section('css')
@endsection

@section('admin')
<div class="container">
    <div class="card h-50">
        <div class="card-header bg-primary">
            Calendario
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal --}}
<div id="eventModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<script>
    var locale = "";
    @if(app()->getLocale() == "es")
        locale = "es";
    @else
        locale = "ca";
    @endif

    var events = [
        @foreach($events as $event)
        {
            start: '{{ $event->start_date }}',
            end: '{{ $event->start_date }}',
        },
        @endforeach
    ];

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'timeGrid', 'bootstrap', 'interaction' ],
          locale: locale,
          slotDuration: '01:00:00',
          height: 400,
          minTime: '10:00:00',
          maxTime: '20:00:00',
          scrollTime: moment(),
          dateClick: function (info) {
              console.log(info);
          }
        });

        for (event of events) {
            calendar.addEvent(event);
        }


        calendar.render();
      });
</script>
@endsection
