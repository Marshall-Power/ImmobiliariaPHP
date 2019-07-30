@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="mb-4">
        <h1 class="text-center">{{ trans('messages.users') }}</h1>
    </div>
    <table class="table table-hover table-striped">
        <thead class="thead-dark">
            <th scope="col">#</th>
            <th scope="col">@lang('messages.name')</th>
            <th scope="col">@lang('messages.email')</th>
            <th scope="col">@lang('messages.user_type')</th>
            <th scope="col">@lang('messages.actions')</th>
            <th scope="col" style="text-align: end;">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createUser">
                    <i class="fa fa-plus"></i>
                </button>
            </th>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->usertype->type }}</td>
                <td>
                    <a class="btn btn-block btn-secondary" href={{ route('users.edit', $user->id) }}>
                        {{ trans('messages.edit_user') }}
                        <i class="fas fa-user-edit"></i>
                    </a>
                </td>
                <td>
                    <a class="btn btn-block btn-danger" href="{{ route('users.index') }}"
                        onclick="event.preventDefault();document.getElementById('delete-user-{{ $user->id }}').submit();">
                        {{ trans('messages.delete_user') }}
                        <i class="fas fa-user-times"></i>
                    </a>
                    <form
                        action="{{ route('users.destroy', $user->id) }}"
                        method="POST"
                        class="d-none"
                        id="delete-user-{{ $user->id }}">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">@lang('messages.no_users')</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="createUserLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createUserTitle">{{ trans('messages.create_user') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('users.store') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-right">{{ trans('messages.name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-right">{{ trans('messages.email') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password"
                            class="col-md-4 col-form-label text-md-right">{{ trans('messages.password')  }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm"
                            class="col-md-4 col-form-label text-md-right">{{ trans('messages.confirm_password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="usertypeSelect"
                            class="col-md-4 col-form-label text-md-right">{{ trans('messages.user_type') }}</label>

                        <div class="col-md-6">
                            <select class="form-control" name='usertype'>
                                @forelse ($usertypes as $usertype)
                                <option value={{ $usertype->id }}>{{ $usertype->type }}</option>
                                @empty
                                {{ trans('messages.no_user_type') }}
                                @endforelse
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ trans('messages.register') }}
                            </button>
                            <a class="btn btn-secondary" href="{{ route('users.index') }}">
                                {{ trans('messages.back') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
