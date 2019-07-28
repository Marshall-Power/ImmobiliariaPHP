@extends('layouts.app')

@section('content')
<form action="{{route('zones.update', $zone->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{trans('messages.name')}}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ $zone->name }}" required autofocus>


        </div>
    </div>

    <div class="form-group row">
        <label for="postal_code" class="col-md-4 col-form-label text-md-right">{{ trans('messages.cp') }}</label>

        <div class="col-md-6">
            <input id="postal_code" type="text" name="postal_code" value="{{ $zone->postal_code }}" required>

        </div>
    </div>

    <div class="form-group row">
        <label for="provinceSelect"
            class="col-md-4 col-form-label text-md-right">{{ trans('messages.province') }}</label>

        <div class="col-md-6">
            <select class="form-control" name='province'>
                @forelse ($provinces as $province)
                <option value="{{ $province->id }}" @if($zone->province_id == $province->id) selected @endif>
                    {{ $province->name }}
                </option>
                @empty
                <option value="">{{ trans('empty_province') }}</option>
                @endforelse
            </select>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{trans('messages.update')}}
            </button>
            <a class="btn btn-secondary" href="{{ url('/admin/zones') }}">{{trans('messages.back')}}</a>
        </div>
    </div>
</form>
@endsection
