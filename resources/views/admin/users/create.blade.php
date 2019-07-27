@extends('layouts.app')

@section('content')

<div class="container">
  <h4><label for="row"><b><u>{{trans('messages.users')}}</b></u> <button type="button" class="btn" data-toggle="modal" data-target="#createUser"><i class="fas fa-user-plus"></i></button> <!-- <a title='{{trans('messages.createUser')}}' href=""><i class="fas fa-user-plus"></i></a>--></label></h4>
  <div class="row" id="row">
    @forelse ($users as $user)
    <div class="col-md-3">
      <i class="fas fa-user"></i> {{$user->name}}<br>
      <i class="fas fa-envelope"></i> {{$user->email}}<br>
    <i class="far fa-id-card"></i> {{$user->usertype->type}} <a title='{{trans('messages.editUser')}}' href={{route('users.edit', $user->id)}}><i class="fas fa-user-edit"></i></a><br>
      
    </div>
    @empty
      {{trans('messages.no_users')}}
    @endforelse
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="createUserLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="createUserTitle">{{trans('messages.createUser')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/admin/users">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{trans('messages.name')}}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{trans('messages.email')}}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{trans('messages.password')}}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{trans('messages.confirm_password')}}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="usertypeSelect" class="col-md-4 col-form-label text-md-right">{{trans('messages.user_type')}}</label>

                    <div class="col-md-6">
                        <select class="form-control" name='usertype'>
                        @forelse ($usertypes as $usertype)
                        <option value={{$usertype->id}}>{{$usertype->type}}</option>    
                        @empty
                        {{trans('no_user_type')}}    
                        @endforelse
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{trans('messages.register')}}
                        </button>
                        <a class="btn btn-secondary" href="{{ url('/admin/users') }}">{{trans('messages.back')}}</a>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection