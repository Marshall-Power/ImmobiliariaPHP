@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <h1>Editar Provincia</h1>
            <form action="{{ route('provinces.update', $province) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="form-label text-right">
                        {{ trans('messages.name') }}
                    </label>
                    <input name="name" type="text" class="form-control" value="{{ $province->name }}">
                </div>

                <div class="form-group row">
                    <div class="col">
                        <a class="btn btn-block btn-secondary" href="{{ route('provinces.index') }}">
                            {{ trans('messages.back') }}
                        </a>
                    </div>
                    <div class="col">
                        <button class="btn btn-block btn-success" type="submit">
                            {{ trans('messages.send') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
