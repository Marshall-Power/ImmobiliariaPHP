<nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-4 justify-content-end">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav navbar-center">

                <li class="nav-item @if(url()->current() == route('admin')) active @endif">
                    <a class="nav-link" href="{{ route('admin') }}">
                        {{trans('messages.dashboard')}}
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

                <li class="nav-item @if(url()->current() == route('comments.index')) active @endif">
                  <a class="nav-link" href="{{ route('comments.index') }}">
                      {{ trans('messages.comments') }}
                      @if(url()->current() == route('comments.index'))
                      <span class="sr-only">(current)</span>
                      @endif
                  </a>
              </li>

            </ul>
        </div>
</nav>
