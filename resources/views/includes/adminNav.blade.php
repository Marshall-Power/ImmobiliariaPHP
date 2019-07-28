<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('zones.index')}}">{{trans('messages.zones')}} <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">{{trans('messages.agents')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">{{trans('messages.users')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('houses.index') }}">{{trans('messages.houses')}}</a>
      </li>

    </ul>
  </div>
  </nav>
