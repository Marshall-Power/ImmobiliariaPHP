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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ lang('messages.houses') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('houses.store') }}">
                        @csrf

                        {{-- Name --}}
                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{trans('messages.name')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Address --}}
                        <div class="form-group row">
                            <label for="address"
                                class="col-md-4 col-form-label text-md-right">{{trans('messages.address')}}</label>

                            <div class="col-md-6">
                                <input id="address" type="text"
                                    class="form-control @error('address') is-invalid @enderror" name="address"
                                    value="{{ old('address') }}" required autocomplete="address">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Zone id --}}
                        <div class="form-group row">
                            <label for="zone_id"
                                class="col-md-4 col-form-label text-md-right">{{trans('messages.zone')}}</label>

                            <div class="col-md-6">
                                <select name="zone_id" id="zone_id" class="form-control">
                                    @forelse ($zones as $zone)
                                    <option value="{{ $zone->id }}">
                                        {{ $zone->name }}
                                    </option>
                                    @empty
                                    <option value="">{{ trans('messages.empty.zones') }}</option>
                                    @endforelse
                                </select>
                                @error('zone_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Latitude --}}
                        <div class="form-group row">
                            <label for="latitude"
                                class="col-md-4 col-form-label text-md-right">{{ trans('messages.latitude') }}</label>

                            <div class="col-md-6">
                                <input id="latitude" type="text"
                                    class="form-control @error('latitude') is-invalid @enderror" name="latitude"
                                    required autocomplete="latitude">

                                @error('latitude')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Longitude --}}
                        <div class="form-group row">
                            <label for="longitude"
                                class="col-md-4 col-form-label text-md-right">{{trans('messages.longitude')}}</label>

                            <div class="col-md-6">
                                <input id="longitude" type="text"
                                    class="form-control @error('longitude') is-invalid @enderror" name="longitude"
                                    required autocomplete="longitude">

                                @error('longitude')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Price --}}
                        <div class="form-group row">
                            <label for="price"
                                class="col-md-4 col-form-label text-md-right">{{trans('messages.price')}}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror"
                                    name="price" value="{{ old('price') }}" required autocomplete="price">

                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Size --}}
                        <div class="form-group row">
                            <label for="size"
                                class="col-md-4 col-form-label text-md-right">{{trans('messages.size')}}</label>

                            <div class="col-md-6">
                                <input id="size" type="number" class="form-control @error('size') is-invalid @enderror"
                                    name="size" value="{{ old('size') }}" required autocomplete="size">

                                @error('size')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Rooms --}}
                        <div class="form-group row">
                            <label for="rooms"
                                class="col-md-4 col-form-label text-md-right">{{trans('messages.rooms')}}</label>

                            <div class="col-md-6">
                                <input id="rooms" type="number"
                                    class="form-control @error('rooms') is-invalid @enderror" name="rooms"
                                    value="{{ old('rooms') }}" required autocomplete="rooms">

                                @error('rooms')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Bathrooms --}}
                        <div class="form-group row">
                            <label for="bathrooms"
                                class="col-md-4 col-form-label text-md-right">{{ trans('messages.bathrooms') }}</label>

                            <div class="col-md-6">
                                <input id="bathrooms" type="number"
                                    class="form-control @error('bathrooms') is-invalid @enderror" name="bathrooms"
                                    value="{{ old('bathrooms') }}" required autocomplete="bathrooms">

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
                                class="col-md-4 col-form-label text-md-right">{{ trans('messages.climate') }}</label>

                            <div class="col-md-6">

                                <select name="climate_id" id="climate_id" class="form-control">
                                    @forelse ($climates as $climate)
                                    <option value="{{ $climate->id }}">
                                        {{ $climate->name }}
                                    </option>
                                    @empty
                                    <option value="">{{ trans('messages.empty.climates') }}</option>
                                    @endforelse
                                </select>

                                @error('climate_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- employee_id --}}
                        <div class="form-group row">
                            <label for="employee_id"
                                class="col-md-4 col-form-label text-md-right">{{ trans('messages.employee') }}</label>

                            <div class="col-md-6">

                                <select name="employee_id" id="employee_id" class="form-control">
                                    @if ($user && $user->usertype_id === 1)
                                    @forelse ($employees as $employee)
                                    <option value="{{ $employee->id }}">
                                        {{ $employee->name }}
                                    </option>
                                    @empty
                                    <option value="">{{ trans('messages.empty.employees') }}</option>
                                    @endforelse
                                    @else
                                    @auth
                                    <option value="{{ $user->id }}">
                                        {{ $user->name }}
                                    </option>
                                    @endauth
                                    @endif
                                </select>

                                @error('employee_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- housetype_id --}}
                        <div class="form-group row">
                            <label for="housetype_id"
                                class="col-md-4 col-form-label text-md-right">{{ trans('messages.housetype') }}</label>

                            <div class="col-md-6">

                                <select name="housetype_id" id="housetype_id" class="form-control">
                                    @forelse ($housetypes as $housetype)
                                    <option value="{{ $housetype->id }}">
                                        {{ $housetype->name }}
                                    </option>
                                    @empty
                                    <option value="">{{ trans('messages.empty.housetypes') }}</option>
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
                                class="col-md-4 col-form-label text-md-right">{{ trans('messages.contract') }}</label>

                            <div class="col-md-6">

                                <select name="contract_id" id="contract_id" class="form-control">
                                    @forelse ($contracts as $contract)
                                    <option value="{{ $contract->id }}">
                                        {{ $contract->name }}
                                    </option>
                                    @empty
                                    <option value="">{{ trans('messages.empty.contracts') }}</option>
                                    @endforelse
                                </select>

                                @error('contract_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- date_published  *por ahora la dejo asi* --}}

                        {{-- Elevator --}}
                        <div class="form-group row">
                            <label for="elevator"
                                class="col-md-4 form-check-label text-md-right">{{ trans('messages.elevator') }}</label>

                            <div class="col-md-6 form-check">
                                <input id="elevator" type="checkbox"
                                    class="form-check-input @error('elevator') is-invalid @enderror" name="elevator"
                                    value="{{ old('elevator') }}">

                                @error('elevator')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Parking --}}
                        <div class="form-group row">
                            <label for="parking"
                                class="col-md-4 form-check-label text-md-right">{{ trans('messages.parking') }}</label>

                            <div class="col-md-6 form-check">
                                <input id="parking" type="checkbox"
                                    class="form-check-input @error('parking') is-invalid @enderror" name="parking"
                                    value="{{ old('parking') }}">

                                @error('parking')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Air_conditioning --}}
                        <div class="form-group row">
                            <label for="air_conditioner"
                                class="col-md-4 form-check-label text-md-right">{{ trans('messages.air_conditioner') }}</label>

                            <div class="col-md-6 form-check">
                                <input id="air_conditioner" type="checkbox"
                                    class="form-check-input @error('air_conditioner') is-invalid @enderror"
                                    name="air_conditioner" value="{{ old('air_condiotioner') }}"
                                    autocomplete="air_conditioner">

                                @error('air_conditioner')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- available --}}
                        <div class="form-group row">
                            <label for="available"
                                class="col-md-4 form-check-label text-md-right">{{ trans('messages.available') }}</label>

                            <div class="col-md-6 form-check">
                                <input id="available" type="checkbox"
                                    class="form-check-input @error('available') is-invalid @enderror" name="available"
                                    value="{{ old('available') }}">

                                @error('available')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-4 offset-8">
                                <button type="submit" class="btn btn-primary">
                                    {{trans('messages.save')}}
                                </button>
                                <a class="btn btn-secondary" href="{{ url('/') }}">{{trans('messages.back')}}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
