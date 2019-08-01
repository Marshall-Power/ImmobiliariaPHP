@extends('layouts.admin')

@section('admin')
<div class="container">
    <div class="row justify-content-center">
        <h1>{{ trans('messages.houses') }}</h1>
    </div>

    <form class="row">
        <div class="col-md-10 mb-2">
            <input name="q" placeholder="{{ trans('messages.search_house') }}" type="text" class="form-control">
        </div>
        <div class="col">
            <button class="btn btn-block btn-success" type="submit">Buscar</button>
        </div>
    </form>

    <div class="row">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <th scope="col">{{trans('messages.name')}}</th>
                <th scope="col">{{trans('messages.address')}}</th>
                <th scope="col">@lang('messages.actions')</th>
                <th scope="col" class="text-right">
                    <a href="{{ route('admin.houses.create') }}" class="btn btn-success text-white">
                        <i class="fa fa-plus"></i>
                    </a>
                </th>
            </thead>
            </tbody>
            @forelse ($houses as $house)
            <tr>
                <td>
                    <a href="{{ route('admin.houses.show', $house) }}">
                        {{ $house->name }}
                    </a>
                </td>
                <td>
                    {{$house->address}}
                </td>
                <td>
                    <a class="btn btn-block btn-secondary" href="{{ route('admin.houses.edit', $house->id) }}">
                        {{ trans('messages.edit_house') }}
                        <i class="fas fa-user-edit"></i>
                    </a>
                </td>
                <td>
                    <a class="btn btn-block btn-danger text-white"
                        onclick="event.preventDefault();document.getElementById('delete-house-{{ $house->id }}').submit();">
                        {{ trans('messages.delete_house') }}
                        <i class="fas fa-user-times"></i>
                    </a>
                    <form method="POST" action="{{ route('admin.houses.destroy', $house->id) }}" class="d-none"
                        id="delete-house-{{ $house->id }}">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">@lang('messages.empty.users')</td>
            </tr>
            @endforelse

            </tbody>
        </table>
    </div>
</div>
@endsection
