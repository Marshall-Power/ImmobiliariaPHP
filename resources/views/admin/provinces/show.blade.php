@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div>
                <h1 class="card-title">{{ $province->name }}</h1>
            </div>
            <div>
                <a class="btn btn-primary mb-4" href="{{ route('admin.provinces.index') }}">
                    {{ trans('messages.back') }}
                </a>
            </div>
            <div>
                <h2>{{trans('messages.zone')}}</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col">{{trans('messages.name')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($province->zones as $zone)
                        <tr>
                            <td>
                                        {{ $zone->name }}
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td>
                                {{ trans('messages.empty.zones') }}
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
