<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 navbar-expand-sm">
    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">

            <li class="nav-item @if(url()->current() == route('admin')) active @endif">
                <a class="nav-link" href="{{ route('admin') }}">
                    Dashboard
                    @if(url()->current() == route('admin'))
                    <span class="sr-only">(current)</span>
                    @endif
                </a>
            </li>

            <li class="nav-item @if(url()->current() == route('users.index')) active @endif">
                <a class="nav-link" href="{{ route('users.index') }}">
                    {{ trans('messages.users') }}
                    @if(url()->current() == route('users.index'))
                    <span class="sr-only">(current)</span>
                    @endif
                </a>
            </li>

            <li class="nav-item @if(url()->current() == route('zones.index')) active @endif">
                <a class="nav-link" href="{{ route('zones.index') }}">
                    {{ trans('messages.zones') }}
                    @if(url()->current() == route('zones.index'))
                    <span class="sr-only">(current)</span>
                    @endif
                </a>
            </li>

            <li class="nav-item @if(url()->current() == route('provinces.index')) active @endif">
                <a class="nav-link" href="{{ route('provinces.index') }}">
                    {{ trans('messages.provinces_title') }}
                    @if(url()->current() == route('provinces.index'))
                    <span class="sr-only">(current)</span>
                    @endif
                </a>
            </li>


            <li class="nav-item @if(url()->current() == route('houses.index')) active @endif">
                <a class="nav-link" href="{{ route('houses.index') }}">
                    {{ trans('messages.houses') }}
                    @if(url()->current() == route('houses.index'))
                    <span class="sr-only">(current)</span>
                    @endif
                </a>
            </li>

        </ul>
    </div>
</nav>
        </div>
    </div>
</div>
