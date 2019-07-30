@extends('layouts.app')
@section('content')

<div class="container">

    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors as $error)
            <p>$error</p>
        @endforeach
    </div>
    @endif

    @if (Session::has('message'))
    <div class="alert alert-info">
        <h4 class="m-0">
            {{ Session::get('message') }}
        </h4>
    </div>
    @endif

    <h1 class="my-2 text-center">{{ trans('messages.contact') }}</h1>

    <h2 class="text-center mb-2">@lang('messages.text_contact')</h2>

    <div class="row">

        <div class="col-md-6 offset-md-3">

            <form id="contact-form" name="contact-form" action="{{ route('contact') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name" class="">{{trans('messages.name')}}</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="email" class="">{{trans('messages.email')}}</label>
                    <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="phone" class="">{{trans('messages.phone')}}</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}">
                </div>
                <div class="form-group">
                    <label for="message">{{trans('messages.message')}}</label>
                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required>{{ old('message') }}</textarea>
                </div>
            </form>

            <div class="float-right mt-2">
                <a class="btn btn-secondary" href="{{ url('/') }}">
                    @lang('messages.back')
                </a>
                <button type="submit" class="btn btn-primary">
                    @lang('messages.send')
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
