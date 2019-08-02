@extends('layouts.admin')
@section('css')
<style>
  .hide{
    display:none;
  }
  .show{
    display:block;
  }
</style>
@endsection
@section('js')
  <script>
    function expand(min, max){
      $('#' + min).hide();
      $('#' + max).show();
    }

    function contract(min, max){
      $('#' + min).show();
      $('#' + max).hide();
    }
  </script>
@endsection

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
        <td><p class="show" id="minComment{{$loop->index}}">{{ str_limit($comment->message, $limit = 200, $end = '...') }}<button class="btn btn-link" onclick="expand('minComment{{$loop->index}}','maxComment{{$loop->index}}')"><i class="fas fa-angle-double-right"></i></button></p><p class="hide" id="maxComment{{$loop->index}}">{{$comment->message}} <button class="btn btn-link" onclick="contract('minComment{{$loop->index}}','maxComment{{$loop->index}}')"><i class="fas fa-angle-double-left"></i></button></p></td>
        <td>
        <a class="btn btn-block btn-primary" href="mailto:{{$comment->email}}">
              <i class="fas fa-reply"></i>
            </a>

            <a class="btn btn-block btn-danger" href="{{ route('admin.comments.index') }}"
                onclick="event.preventDefault();document.getElementById('delete-comment-{{ $comment->id }}').submit();">
                <i class="fas fa-comment-slash"></i>
            </a>

            <form
                action="{{ route('admin.comments.destroy', $comment->id) }}"
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
        <td colspan="6">@lang('messages.no_comments')</td>
    </tr>
    @endforelse
</tbody>
</table>
</div>





@endsection
