@extends('layouts.app')

@section('content')
<div class="container">
    @if ($message = Session::get('flash'))
    <div class="row">
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">{{trans('messages.edit_house')}}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('houses.update', $house->id) }}">
                        @csrf
                        @method('PUT')

                        {{-- employee_id --}}
                        <div class="form-group row">
                            @if ($user && $user->usertype_id === 1)
                            <label for="employee_id"
                                class="col-lg-2 col-form-label">{{ trans('messages.employee') }}</label>

                            <div class="col-lg-10">

                                <select name="employee_id" id="employee_id" class="form-control">
                                    @forelse ($employees as $employee)
                                    <option value="{{ $employee->id }}">
                                        {{ $employee->name }}
                                    </option>
                                    @empty
                                    <option value="">{{ trans('messages.empty.employees') }}</option>
                                    @endforelse
                                </select>
                                @error('employee_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            @else
                            <input type="hidden" name="employee_id" value="{{ $user->id }}">
                            @endif

                        </div>

                        {{-- Name --}}
                        <div class="form-group row">
                            <label for="name" class="col-lg-2 col-form-label">{{trans('messages.name')}}</label>

                            <div class="col-lg-10">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ $house->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Address --}}
                        <div class="form-group row">
                            <label for="address" class="col-lg-2 col-form-label">{{trans('messages.address')}}</label>

                            <div class="col-lg-10">
                                <input id="address" type="text"
                                    class="form-control @error('address') is-invalid @enderror" name="address"
                                    value="{{ $house->address }}" required autocomplete="address">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Zone id --}}
                        <div class="form-group row">
                            <label for="zone_id" class="col-lg-2 col-form-label">{{trans('messages.zone')}}</label>

                            <div class="col-lg-10">
                                <select name="zone_id" id="zone_id" class="form-control">
                                    @forelse ($zones as $zone)
                                    <option value="{{ $zone->id }}" @if($house->zone_id == $zone->id) selected @endif>
                                        {{ $zone->name }}
                                    </option>
                                    @empty
                                    <option value="">No Zones avaliable</option>
                                    @endforelse
                                </select>
                                @error('zone_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{-- Latitude --}}
                            <label for="latitude"
                                class="col-lg-2 col-form-label">{{ trans('messages.latitude') }}</label>

                            <div class="col-lg-4">
                                <input id="latitude" type="text"
                                    class="form-control @error('latitude') is-invalid @enderror" name="latitude"
                                    required autocomplete="latitude" value="{{ $house->latitude }}">

                                @error('latitude')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            {{-- Longitude --}}
                            <label for="longitude"
                                class="col-lg-2 col-form-label">{{ trans('messages.longitude') }}</label>

                            <div class="col-lg-4">
                                <input id="longitude" type="text"
                                    class="form-control @error('longitude') is-invalid @enderror"
                                    value="{{ $house->longitude }}" name="longitude" required autocomplete="longitude">

                                @error('longitude')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Description ES --}}
                        <div class="form-group row">
                            <label for="description_es"
                                class="col-lg-12 col-form-label">{{ trans('messages.description.es')}}</label>

                            <div class="col-lg-12">
                                <textarea name="description_es" id="description_es"
                                    class="form-control @error('description_es') is-invalid @enderror" cols="30"
                                    rows="10">{{ $house->description_es }}</textarea>
                                @error('description_es')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Description CA --}}
                        <div class="form-group row">
                            <label for="description_ca"
                                class="col-lg-12 col-form-label">{{ trans('messages.description.ca')}}</label>

                            <div class="col-lg-12">
                                <textarea name="description_ca" id="description_ca"
                                    class="form-control @error('description_ca') is-invalid @enderror" cols="30"
                                    rows="10">{{ $house->description_ca }}</textarea>
                                @error('description_ca')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        {{-- Size --}}
                        <div class="form-group row">
                            <label for="size" class="col-lg-3 col-form-label">{{trans('messages.size')}}</label>

                            <div class="col-lg-3">
                                <input id="size" type="number" class="form-control @error('size') is-invalid @enderror"
                                    name="size" value="{{ $house->size }}" required autocomplete="size">

                                @error('size')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            {{-- Price --}}
                            <label for="price"
                                class="col-lg-2 col-form-label text-lg-right">{{trans('messages.price')}}</label>

                            <div class="col-lg-4">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror"
                                    name="price" value="{{ $house->price }}" required autocomplete="price">

                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{-- Rooms --}}
                            <label for="rooms" class="col-lg-3 col-form-label">{{trans('messages.rooms')}}</label>

                            <div class="col-lg-2">
                                <input id="rooms" type="number"
                                    class="form-control @error('rooms') is-invalid @enderror" name="rooms"
                                    value="{{ $house->rooms }}" required autocomplete="rooms">

                                @error('rooms')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            {{-- Bathrooms --}}
                            <label for="bathrooms"
                                class="col-lg-2 offset-1 col-form-label text-lg-right">{{ trans('messages.bathrooms') }}</label>

                            <div class="col-lg-2">
                                <input id="bathrooms" type="number"
                                    class="form-control @error('bathrooms') is-invalid @enderror" name="bathrooms"
                                    value="{{ $house->bathrooms }}" required autocomplete="bathrooms">

                                @error('bathrooms')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- climate_id --}}
                        <div class="form-group row">
                            <label for="climate_id"
                                class="col-lg-3 col-form-label text-lg-right">{{ trans('messages.climate') }}</label>

                            <div class="col-lg-9">

                                <select name="climate_id" id="climate_id" class="form-control">
                                    @forelse ($climates as $climate)
                                    <option value="{{ $climate->id }}" @if($house->climate_id == $climate->id) selected
                                        @endif>
                                        {{ $climate->name }}
                                    </option>
                                    @empty
                                    <option value="">{{ trans('messages.climates_empty') }}</option>
                                    @endforelse
                                </select>

                                @error('climate_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        {{-- housetype_id --}}
                        <div class="form-group row">
                            <label for="housetype_id"
                                class="col-lg-3 col-form-label text-lg-right">{{ trans('messages.housetype') }}</label>

                            <div class="col-lg-9">

                                <select name="housetype_id" id="housetype_id" class="form-control">
                                    @forelse ($housetypes as $housetype)
                                    <option value="{{ $housetype->id }}" @if($house->housetype_id == $housetype->id)
                                        selected @endif>
                                        {{ $housetype->name }}
                                    </option>
                                    @empty
                                    <option value="">{{ trans('messages.housetypes_empty') }}</option>
                                    @endforelse
                                </select>

                                @error('housetype_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- contract_id --}}
                        <div class="form-group row">
                            <label for="contract_id"
                                class="col-lg-3 col-form-label text-lg-right">{{ trans('messages.contract') }}</label>

                            <div class="col-lg-9">

                                <select name="contract_id" id="contract_id" class="form-control">
                                    @forelse ($contracts as $contract)
                                    <option value="{{ $contract->id }}" @if($contract->id == $house->contract_id)
                                        selected @endif>
                                        {{ $contract->name }}
                                    </option>
                                    @empty
                                    <option value="">{{ trans('messages.contracts_empty') }}</option>
                                    @endforelse
                                </select>

                                @error('contract_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Ckeckboxes --}}
                        <div class="form-group d-flex flex-wrap">

                            {{-- Available --}}
                            <div class="form-check mr-4">
                                <input type="checkbox" class="form-check-input" name="available" value="1"
                                    @if($house->available) checked @endif>
                                <label for="available" class="form-check-label">
                                    {{ trans('messages.available') }}
                                </label>
                            </div>

                            {{-- Furnished --}}
                            <div class="form-check mr-4">
                                <input type="checkbox" class="form-check-input" name="furnished" value="1"
                                    @if($house->furnished) checked @endif>
                                <label for="furnished" class="form-check-label">
                                    {{ trans('messages.furnished') }}
                                </label>
                            </div>

                            {{-- Elevator --}}
                            <div class="form-check mr-4">
                                <input type="checkbox" class="form-check-input" name="elevator" value="1"
                                    @if($house->elevator) checked @endif>
                                <label for="elevator" class="form-check-label">
                                    {{ trans('messages.elevator') }}
                                </label>

                            </div>

                            {{-- Air --}}
                            <div class="form-check mr-4">
                                <input type="checkbox" class="form-check-input" name="air_conditioner" value="1"
                                    @if($house->air_conditioner) checked @endif>
                                <label for="air_conditioner" class="form-check-label">
                                    {{ trans('messages.air_conditioner') }}
                                </label>
                            </div>

                            {{-- Parking --}}

                            <div class="form-check mr-4">
                                <input type="checkbox" class="form-check-input" name="parking" value="1"
                                    @if($house->parking) checked @endif>
                                <label for="parking" class="form-check-label">
                                    {{ trans('messages.parking') }}
                                </label>
                            </div>

                        </div>

                        <div class="form-group mb-0">
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('messages.send') }}
                                </button>
                                <a class="btn btn-secondary"
                                    href="{{ route('houses.index') }}">{{ trans('messages.back') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
