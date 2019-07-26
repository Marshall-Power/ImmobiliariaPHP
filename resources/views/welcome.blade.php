@extends('layouts.app')

@section('content')
  <div id="welcome" class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
            @include('includes.filter')
                    </div>
                <div class="col-lg-8 col-md-8 col-sm-4">
                @forelse ($houses as $house)
                    <div id="houses_row" class="row-fluid">

                            <div class="col-lg-10 offset-lg-1">
                                    <div class="row house_card">
                                        <div class="col-lg-6 house_card">
                                             <img src="{{ $house->photos->first()->path }}" alt="{{ $house->name }}">
                                        </div>
                                        <div class="col-lg-4 house_card">
                                             <h2>{{ $house->name }}</h2>
                                             <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, fuga.</p>
                                            <ul>
                                                <li>Direccion: {{ $house->address }}</li>
                                                <li>Precio: {{ $house->price }}</li>
                                                <li>N. Habitaciones: {{ $house->rooms }}</li>
                                            </ul>

                                        </div>
                                    </div>
                            </div>
                    </div>
                        @empty

                        @endforelse
                </div>
            </div>
    </div>

@endsection('content')
