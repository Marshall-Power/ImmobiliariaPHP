@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{route('zones.store')}}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{trans('messages.name')}}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="postal_code" class="col-md-4 col-form-label text-md-right">{{trans('messages.cp')}}</label>

            <div class="col-md-6">
                <input id="postal_code" type="text" name="postal_code" class="form-control" value="{{ old('postal_code') }}">

            </div>
        </div>

        <div class="form-group row">
            <label for="provinceSelect" class="col-md-4 col-form-label text-md-right">{{trans('messages.province')}}</label>

            <div class="col-md-6">
                <select class="form-control" name='province'>
                    @forelse ($provinces as $province)
                    <option value={{ $province->id }} @if($province->id == old('province')) selected @endif>
                        {{ $province->name }}
                    </option>
                    @empty
                    <option value="">
                        {{ trans('province_empty') }}
                    </option>
                    @endforelse
                </select>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{trans('messages.save')}}
                </button>
                <a class="btn btn-secondary" href="{{ url('/admin/zones') }}">{{trans('messages.back')}}</a>
            </div>
        </div>
    </form>
</div>
@endsection
