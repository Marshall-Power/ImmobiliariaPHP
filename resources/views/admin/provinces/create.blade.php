@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <h1>Nueva Provincia</h1>
            <form action="{{ route('provinces.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label text-right">
                        {{ trans('messages.name') }}
                    </label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>

                <div class="form-group row">
                    <div class="col">
                        <a class="btn btn-block btn-secondary" href="{{ route('provinces.index') }}">
                            {{ trans('messages.back') }}
                        </a>
                    </div>
                    <div class="col">
                        <button class="btn btn-block btn-success" type="submit">
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
