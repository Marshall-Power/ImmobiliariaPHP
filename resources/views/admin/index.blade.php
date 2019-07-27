@extends('layouts.app')


@section('content')

<div class="container">
<div class="row">
<div class="col-md offset-5">
@include('includes.adminNav')
</div>
</div>
<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12">
                @forelse ($houses as $house)
                    <div class="row-fluid houses_row" style="margin:2%; border:solid 1px;">

                            <div class="col-md-10">
                                  <a href="" value="{{$house->id}}">  <div class="row house_card">
                                        <div class="col-lg-4 house_card">
                                             <img src="{{ $house->photos->first()->path }}" alt="{{ $house->name }}" style="width:200px;height:200px;">
                                        </div>
                                        
                                        <div class="col-lg-6 house_card">
                                        <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                             <h2>{{ $house->name }}</h2>
                                             <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, fuga.</p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <ul>
                                                <li>Direccion: {{ $house->address }}</li>
                                                <li>Precio: {{ $house->price }}</li>
                                                <li>N. Habitaciones: {{ $house->rooms }}</li>
                                            </ul>
                                        </div>
                                         </div>
                                        </div>
                                    </div>
                                    </a>
                            </div>
                    </div>
                        @empty

                        @endforelse
                </div>


</div>
</div>




@endsection('content')