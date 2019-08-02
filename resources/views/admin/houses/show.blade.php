{{ $house->name }}
<a href="{{ route('admin.houses.edit', $house->id) }}">{{ trans('messages.edit_house') }}</a>
@extends('layouts.app')

@section('css')
<style>
    :root {
        --background: #fff;
        --color-primary: magenta;
        --color: #333;
    }

    .house-features {
        display: flex;
        flex-wrap: wrap;
    }

    .house-feature {
        box-sizing: border-box;
        background-color: var(--background);
        color: var(--color);
        display: block;
        flex: 50%;
        padding: 1em;
    }

    .response {
        color: var(--color-primary);
        text-transform: uppercase;
    }
</style>
@stop

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="title d-inline">{{ $house->name }}</h1>
            <a href="{{ route('admin.houses.index') }}" class="btn btn-secondary float-right">{{ trans('messages.back') }}</a>
            <div class="clearfix"></div>
            <hr>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                        @foreach ($house->photos as $key => $image)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" @if($key == 0) class="active" @endif></li>
                        @endforeach
                </ol>
                <div class="carousel-inner" style="height:600px;">
                    @foreach ($house->photos as $key => $image)
                    <div class="carousel-item @if($key == 0) active @endif">
                        <img class="d-block w-100" height="600"
                            style="object-fit:cover;"
                            src="{{ $image->path }}"
                            alt="{{ $image->name }}">
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="mt-4">
                <h2 class="text-uppercase d-2">{{ trans('messages.description.title') }}</h2>
                @if(app()->getLocale() == 'ca')
                <p>{{ $house->description_ca }}</p>
                @else
                <p>{{ $house->description_es }}</p>
                @endif
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong>{{ trans('messages.address') }}:</strong> {{ $house->address }}
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <strong>{{ trans('messages.employee') }}:</strong> {{ $house->employee->name }}
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <strong>{{ trans('messages.price') }}:</strong> {{ $house->price }}€
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong>{{ trans('messages.size') }}:</strong> {{ $house->size }} m²
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <strong>{{ trans('messages.rooms') }}:</strong> {{ $house->rooms }}
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <strong>{{ trans('messages.bathrooms') }}:</strong> {{ $house->bathrooms }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong>{{ trans('messages.zone') }}:</strong> {{ $house->zone->name }}
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <strong>{{ trans('messages.climate') }}:</strong> {{ $house->climate->name }}
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <strong>{{ trans('messages.housetype') }}:</strong> {{ $house->housetype->name }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong>{{ trans('messages.contract') }}:</strong> {{ $house->contract->name }}
                    </p>
                </div>
            </div>
            <h2 class="text-uppercase d-2 my-4">{{ trans('messages.features') }}</h2>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong>{{ trans('messages.available') }}:</strong> <span
                            class="response">@if($house->available){{ trans('messages.yes') }}@else{{ trans('messages.no') }}@endif</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <strong>{{ trans('messages.furnished') }}:</strong> <span
                            class="response">@if($house->furnished){{ trans('messages.yes') }}@else{{ trans('messages.no') }}@endif</span>
                    </p>
                </div>

                <div class="col-md-4">
                    <p>
                        <strong>{{ trans('messages.elevator') }}:</strong> <span class="response">@if($house->elevator){{ trans('messages.yes') }}@else{{ trans('messages.no') }}@endif</span>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong>{{ trans('messages.air_conditioner') }}:</strong> <span class="response">@if($house->air_conditioner){{ trans('messages.yes') }}@else{{ trans('messages.no') }}@endif</span>
                    </p>
                </div>

                <div class="col-md-4">
                    <p>
                        <strong>{{ trans('messages.parking') }}:</strong> <span class="response">@if($house->available){{ trans('messages.yes') }}@else{{ trans('messages.no') }}@endif</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
