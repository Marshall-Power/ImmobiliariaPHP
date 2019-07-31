@extends('layouts.admin')

@section('admin')
<div class="container">
  <div class="mb-4">
      <h1 class="text-center">{{ trans('messages.comments') }}</h1>
  </div>

<table class="table table-hover table-striped">
  <thead class="thead-dark">
      <th scope="col">#</th>
      <th scope="col">@lang('messages.name')</th>
      <th scope="col">@lang('messages.email')</th>
      <th scope="col">@lang('messages.phone')</th>
      <th scope="col">@lang('messages.comment')</th>
      <th scope="col">@lang('messages.actions')</th>
  </thead>
  <tbody>
    @forelse($comments as $comment)
    <tr>
        <th scope="row">{{ $comment->id }}</th>
        <td>{{ $comment->name }}</td>
        <td>{{ $comment->email }}</td>
        <td>{{ $comment->phone }}</td>
        <td>{{ $comment->message }}</td>
        <td>
        <a class="btn btn-block btn-primary" href="mailto:{{$comment->email}}">
              <i class="fas fa-reply"></i>
            </a>

            <a class="btn btn-block btn-danger" href="{{ route('comments.index') }}"
                onclick="event.preventDefault();document.getElementById('delete-comment-{{ $comment->id }}').submit();">
                <i class="fas fa-comment-slash"></i>
            </a>
          
            <form
                action="{{ route('comments.destroy', $comment->id) }}"
                method="POST"
                class="d-none"
                id="delete-comment-{{ $comment->id }}">
                @csrf
                @method('DELETE')
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="3">@lang('messages.no_comments')</td>
    </tr>
    @endforelse
</tbody>
</table>
</div>





@endsection