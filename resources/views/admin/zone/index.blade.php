@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md offset-5">
    @include('includes.adminNav')
      </div>
    </div>
    <h2>{{trans('messages.zones')}}</h2>
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">{{trans('messages.name')}}</th>
      <th scope="col">{{trans('messages.cp')}}</th>
      <th scope="col">{{trans('messages.province')}}</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
@forelse ($zones as $zone)
   
    <tr>
      <td>
        {{$zone->name}}
      </td>
      <td>    
        {{$zone->postal_code}}
      </td>
      <td>
        {{$zone->province->name}}
      </td>
      <td>
      <a class="btn btn-info" href="">Editar</a>
      </td>
    </tr>
    @empty
    @endforelse

    </table>

    </div>




</div>
@endsection('content')