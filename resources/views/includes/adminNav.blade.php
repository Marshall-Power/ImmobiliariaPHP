<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item @if(url()->current() == route('zones.index')) active @endif">
                <a class="nav-link" href="{{ route('zones.index') }}">
                    {{ trans('messages.zones') }}
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item @if(url()->current() == route('users.index')) active @endif">
                <a class="nav-link" href="#">{{ trans('messages.agents') }}</a>
            </li>
            <li class="nav-item @if(url()->current() == route('users.index')) active @endif">
                <a class="nav-link" href="{{ route('users.index') }}">{{ trans('messages.users') }}</a>
            </li>
            <li class="nav-item @if(url()->current() == route('houses.index')) active @endif">
                <a class="nav-link" href="{{ route('houses.index') }}">{{ trans('messages.houses') }}</a>
            </li>

        </ul>
    </div>
</nav>
