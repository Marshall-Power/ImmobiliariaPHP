@extends('layouts.app')

@section('content')

@forelse ($users as $user)
{{trans('messages.name')}}: {{$user->name}}<br>
{{trans('messages.email')}}: {{$user->email}}<br>
{{trans('messages.user_type')}}: {{$user->usertype->type}} <br>
@empty
{{trans('messages.no_users')}}
    
@endforelse
@endsection