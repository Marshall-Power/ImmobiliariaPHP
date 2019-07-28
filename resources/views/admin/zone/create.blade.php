
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{trans('messages.register')}}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('zone.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{trans('messages.name')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cp" class="col-md-4 col-form-label text-md-right">{{trans('messages.email')}}</label>

                            <div class="col-md-6">
                                <input id="cp" type="text" class="form-control @error('email') is-invalid @enderror" name="posta_code" value="{{ old('postal_code') }}">

                                @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="province_id" class="col-md-4 col-form-label text-md-right">
                                {{ trans('messages.province') }}
                            </label>

                            <div class="col-md-6">
                                <select name="province" id="province" class="form-control">
                                    @forelse ($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                    @empty
                                    <option value=""></option>
                                    @endforelse
                                </select>
                            </div>

                        </div>

                   

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{trans('messages.register')}}
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

