@extends('layouts.app')

@section('content')
<div class="container">
    @include('includes.adminNav')
    <div class="mb-4">
<h2>{{trans('messages.houses')}}
            <a class="btn btn-success mb-4" href="{{ route('houses.create')}}"><i class="fas fa-user-plus"></i></a>

</h2>
</div>
  <table class="table">
      <thead>
      <th scope="col">{{trans('messages.name')}}</th>
      <th scope="col">{{trans('messages.address')}}</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </thead>
    </tbody>
        @foreach ($houses as $house)
        <tr>
            <td>
                 {{ $house->name }}
            </td>
            <td>
                {{$house->address}}
            </td>
             <td>
                <a class="btn btn-block btn-secondary" href="{{ route('houses.edit', $house->id) }}">
                            {{ trans('messages.edit_house') }}
                            <i class="fas fa-user-edit"></i>
                        </a>
            </td>
             <td>
                 <a class="btn btn-block btn-danger">
                            {{ trans('messages.delete_house') }}
                            <i class="fas fa-user-times"></i>
                        </a>
            </td>
        @endforeach

        </tbody>
        </table>
</div>
@endsection
