@extends('layouts.app')

@section('content')
<div class="container">
    @include('includes.adminNav')
    <div class="row">
<h2>{{trans('messages.houses')}}
            <a class="btn btn-success mb-4" href="{{ route('houses.create')}}"><i class="fa fa-plus"></i></a>

</h2>

</div>

<div class="row">
    <input style="width:100%;margin:1%;" type="text" name="search_house" placeholder="{{trans('messages.search_house')}}">
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
                 <a class="btn btn-block btn-danger" style="color:white;" onclick="event.preventDefault();document.getElementById('delete-house-{{ $house->id }}');">
                            {{ trans('messages.delete_house') }}
                            <i class="fas fa-user-times"></i>
                 </a>
                 <form action="{{ route('houses.destroy', $house) }}" id="delete-house-{{ $house->id }}">
                    @csrf
                    @method('DELETE')
                 </form>
            </td>
        @endforeach

        </tbody>
        </table>
    </div>
</div>
@endsection
