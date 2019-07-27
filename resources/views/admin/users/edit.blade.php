@extends('layouts.app')

@section('content')
<form  action={{route('users.update', $user->id)}} method="POST">
  @csrf
  @method('put')
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{trans('messages.name')}}</label>

      <div class="col-md-6">
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

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
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>
<!-- This is commmented because we don't want the sysadmin to change passwords only to send the reset email to users.
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
-->
  <div class="form-group row">
      <label for="usertypeSelect" class="col-md-4 col-form-label text-md-right">{{trans('messages.user_type')}}</label>

      <div class="col-md-6">
          <select class="form-control" name='usertype'>
          @forelse ($usertypes as $usertype)
          <option value={{$usertype->id}} <?php if($user->usertype_id == $usertype->id){echo 'selected';}?>>{{$usertype->type}}</option>    
          @empty
          {{trans('no_user_type')}}    
          @endforelse
          </select>
      </div>
  </div>

  <div class="form-group row mb-0">
      <div class="col-md-6 offset-md-4">
          <button type="submit" class="btn btn-primary">
              {{trans('messages.update')}}
          </button>
          <a class="btn btn-secondary" href="{{ url('/admin/users') }}">{{trans('messages.back')}}</a>
      </div>
  </div>
</form>
@endsection