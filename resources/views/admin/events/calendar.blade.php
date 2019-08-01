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


    console.log(events);

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'timeGrid' ],
          locale: locale,
        });

        for (event of events) {
            console.log(event)
            calendar.addEvent(event);
        }

        calendar.render();
      });
</script>
@endsection
