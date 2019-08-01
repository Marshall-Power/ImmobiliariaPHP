

 <h2 class="ml-4 mt-4">En la misma zona</h2>
 <div class="row">
    @foreach ($zones as $zone)

    <div class="card mt-3 mb-4 col-md-3 mx-auto">
        <img style="max-height:150px;" src="{{ url('storage/' . $zone->photos()->first()->path) }}" alt="">
        <h3>{{ $zone->name }}</h3>
        <h5>{{ $zone->zone->name }}</h5>
        <a href="{{ route('show', $house->id) }}" style="font-size: 1rem;" class="btn btn-primary btn-lg">
                {{ trans('messages.details')}}</a>
    </div>

 @endforeach
</div>


