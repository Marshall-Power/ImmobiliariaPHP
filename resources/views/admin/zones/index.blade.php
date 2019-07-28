@extends('layouts.app')


@section('content')

<div class="container">
    @include('includes.adminNav')

    <div>
        <h2>{{trans('messages.zones')}}
            <button type="button" class="btn btn-success mb-4" data-toggle="modal" data-target="#createZone">
                <i class="fas fa-user-plus"></i>
            </button>
        </h2>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{trans('messages.name')}}</th>
                    <th scope="col">{{trans('messages.cp')}}</th>
                    <th scope="col">{{trans('messages.province')}}</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @forelse ($zones as $zone)

            <tr>
                <td>
                    {{$zone->name}}
                </td>
                <td>
                    {{$zone->postal_code}}
                </td>
                <td>
                    {{$zone->province->name}}
                </td>
                <td>
                    <a class="btn btn-block btn-secondary" href="{{ route('zones.edit', $zone->id) }}">
                        {{ trans('messages.edit_zone') }}
                        <i class="fas fa-user-edit"></i>
                    </a>
                </td>
                <td>
                    <a class="btn btn-block btn-danger" href="{{ route('zones.index') }}"
                        onclick="event.preventDefault();document.getElementById('delete-zone-{{ $zone->id }}').submit();">
                        {{ trans('messages.delete_zone') }}
                        <i class="fas fa-user-times"></i>
                    </a>
                    <form action="{{ route('zones.destroy', $zone->id) }}" method="POST"
                        id="delete-zone-{{ $zone->id }}">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @empty
            @endforelse

        </table>

    </div>




</div>


<!-- Modal -->
<div class="modal fade" id="createZone" tabindex="-1" role="dialog" aria-labelledby="createZoneLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createZoneTitle">{{ trans('messages.create_zone') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    @csrf

                    <div class="form-group row">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-right">{{ trans('messages.name') }}</label>

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

                    <div class="form-group row">
                        <label for="postal"
                            class="col-md-4 col-form-label text-md-right">{{ trans('messages.cp') }}</label>

                        <div class="col-md-6">
                            <input id="posta_code" type="text"
                                class="form-control @error('postal_code') is-invalid @enderror" name="postal_code"
                                value="{{ old('posta_code') }}">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="provinceSelect"
                            class="col-md-4 col-form-label text-md-right">{{ trans('messages.province') }}</label>

                        <div class="col-md-6">
                            <select class="form-control" name='province'>
                                @forelse ($provinces as $province)
                                <option value={{ $province->id }}>{{ $province->name }}</option>
                                @empty

                                @endforelse
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ trans('messages.register') }}
                            </button>
                            <a class="btn btn-secondary" href="{{ route('zones.index') }}">
                                {{ trans('messages.back') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection('content')
