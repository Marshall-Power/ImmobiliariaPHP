@extends('layouts.app')

@section('content')
<div class="container">
    @include('includes.adminNav')
    <div class="mb-4">
        <h2>
            {{ trans('messages.provinces_title') }}
            <a class="btn btn-success mb-4" href="{{ route('provinces.create') }}"><i class="fas fa-user-plus"></i></a>

        </h2>
        
    </div>
    <div>
    </div>
    <table class="table">
       
        <thead>
            <tr>
                <th scope="col">{{ trans('messages.name') }}:</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
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
                    <div>
                        <a class="btn btn-block btn-secondary" href="{{ route('provinces.edit', $province) }}">
                            {{ trans('messages.edit_province') }}
                            <i class="fas fa-user-edit"></i>
                        </a>
                </td>
                <td>
                        <a class="btn btn-block btn-danger" onclick="event.preventDefault();document.getElementById('delete-province-{{ $province->id }}').submit();">
                            {{ trans('messages.delete_province') }}
                            <i class="fas fa-user-times"></i>
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
