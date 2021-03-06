@extends('layouts.admin')

@section('css')
<style>
    .box {
        display: flex;
        height: 200px;
        align-items: center;
        justify-content: center;
        background-color: #333;
        color: whitesmoke;
        text-decoration: none;
        transition: background-color 1s;
        font-weight: bolder;
    }

    .box:hover {
        background-color: #555;
        text-decoration: none;
        color: whitesmoke;
    }
</style>
@endsection

@section('admin')
<div class="container">
    @if ($message = Session::get('flash'))
    <div class="row">
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    </div>
    @endif
    <div class="mb-4">
        <h1 class="text-center">{{trans('messages.dashboard')}}</h1>
    </div>
    <div class="row">
        @if (auth()->user()->usertype_id == 1)
        <div class="col-md-4">
            <a class="box" href="{{ route('admin.users.index') }}">
                {{ count($users) }} {{ trans('messages.users') }}
            </a>
        </div>
        @else
        <div class="col-md-4">
            <a class="box" href="{{ route('admin.calendar') }}">
                {{ count([]) }} {{ trans('messages.calendar') }}
            </a>
        </div>
        @endif
        <div class="col-md-4">
            <a class="box" href="{{ route('admin.houses.index') }}">
                {{ count($houses) }} {{ trans('messages.houses') }}
            </a>
        </div>
        <div class="col-md-4">
            <a class="box" href="{{ route('admin.zones.index') }}">
                {{ count($zones) }} {{ trans('messages.zones') }}
            </a>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-md-4">
            <a class="box" href="{{ route('admin.provinces.index') }}">
                {{ count($provinces) }} {{ trans('messages.provinces') }}
            </a>
        </div>
        <div class="col-md-4">
            <a class="box" href="#">
                {{ $photos }} {{ trans('messages.photos') }}
            </a>
        </div>
        <div class="col-md-4">
          <a class="box" href="{{ route('admin.comments.index') }}">
              {{ count($comments) }} {{ trans('messages.comments') }}
          </a>
      </div>
    </div>
</div>
@endsection
