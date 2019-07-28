@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-4">
        <h1>
            {{ trans('messages.provinces_title') }}
        </h1>
    </div>
    <div>
        <a class="btn btn-lg btn-primary my-4" href="{{ route('provinces.create') }}">{{ trans('messages.add_province') }}</a>
    </div>
    <table class="table table-hover">
        <colgroup>
            <col style="width: 50%">
        </colgroup>
        <thead class="thead-dark">
            <tr>
                <th>{{ trans('messages.name') }}:</th>
                <th>{{ trans('messages.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($provinces as $province)
            <tr>
                <td>
                    <a href="{{ route('provinces.show', $province) }}">
                        <h4>
                            {{ $province->name }}
                        </h4>
                    </a>
                </td>
                <td>
                    <div class="float-right">
                        <a class="btn btn-secondary mr-2" href="{{ route('provinces.edit', $province) }}">
                            {{ trans('messages.edit_province') }}
                        </a>
                        <a class="btn btn-danger text-white" onclick="event.preventDefault();document.getElementById('delete-province-{{ $province->id }}').submit();">
                            {{ trans('messages.delete_province') }}
                        </a>
                        <form method="POST" action="{{ route('provinces.destroy', $province) }}" id="delete-province-{{ $province->id }}">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </td>
            </tr>

            @empty
            <tr>
                <td>
                    {{ trans('messages.empty_provinces') }}
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
