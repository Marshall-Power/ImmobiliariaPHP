@extends('layouts.app')

@section('content')
<div class="container">
    @include('includes.adminNav')
    <h1>Houses</h1>
    <div>
        @foreach ($houses as $house)
            <a href="{{ route('houses.show', $house->id) }}">
                {{ $house->name }}
            </a>
        @endforeach
    </div>

    <a href="{{ route('houses.create') }}">
        {{ trans('messages.create_house') }}
    </a>
</div>
@endsection
