@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div>
                <h1 class="card-title">{{ $province->name }}</h1>
            </div>
            <div>
                <a class="btn btn-primary mb-4" href="{{ route('provinces.index') }}">
                    {{ trans('messages.back') }}
                </a>
            </div>
            <div>
                <h2>Zonas</h2>
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($province->zones as $zone)
                        <tr>
                            <td>
                                <a href="{{ route('zones.show', $zone) }}">
                                        {{ $zone->name }}
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td>
                                {{ trans('messages.empty_zones') }}
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
