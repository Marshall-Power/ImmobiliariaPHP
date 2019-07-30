@extends('layouts.admin')

@section('admin')
<div class="container">
    <div class="mb-4">
        <h1 class="text-center">
            {{ trans('messages.provinces_title') }}
        </h1>
    </div>
    <table class="table table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">{{trans('messages.name')}}</th>
                <th scope="col">@lang('messages.actions')</th>
                <th scope="col" style="text-align: end;">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createProvince">
                        <i class="fa fa-plus"></i>
                    </button>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($provinces as $province)
            <tr>
                <td>
                    <a href="{{ route('provinces.show', $province) }}">
                        {{ $province->name }}
                    </a>
                </td>
                <td>

                    <a class="btn btn-block btn-secondary" href="{{ route('provinces.edit', $province) }}">
                        {{ trans('messages.edit_province') }}
                        <i class="fas fa-user-edit"></i>
                    </a>
                </td>
                <td>
                    <a class="btn btn-block btn-danger" style="color:white;"
                        onclick="event.preventDefault();document.getElementById('delete-province-{{ $province->id }}').submit();">
                        {{ trans('messages.delete_province') }}
                        <i class="fas fa-user-times"></i>
                    </a>
                    <form method="POST"
                        action="{{ route('provinces.destroy', $province) }}"
                        class="d-none"
                        id="delete-province-{{ $province->id }}">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td>
                    {{ trans('messages.empty.provinces') }}
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>



<!-- Modal -->
<div class="modal fade" id="createProvince" tabindex="-1" role="dialog" aria-labelledby="createProvinceLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createProvinceTitle">{{ trans('messages.create_province') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('provinces.store') }}">
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

                        <div class="d-inline float-rigt">
                            <button type="submit" class="btn btn-success">@lang('messages.send')</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
