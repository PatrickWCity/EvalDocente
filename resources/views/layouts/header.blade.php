    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">
          <img class="navbar-brand-full" src="{{ url('/img/brand/logo.svg') }}" width="137" height="30" alt="CoreUI Logo">
          <img class="navbar-brand-minimized" src="{{ url('/img/brand/sygnet.svg') }}" width="30" height="30" alt="CoreUI Logo">
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav d-md-down-none">
          <li class="nav-item px-3">
            <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="{{ url('/home') }}">{{ __('Dashboard') }}</a>
          </li>
          @can('user-list')
          <li class="nav-item px-3">
            <a class="nav-link" href="{{ url('/users') }}">{{ __('User') }}s</a>
          </li>
          @endcan
          @can('role-list')
          <li class="nav-item px-3">
            <a class="nav-link" href="{{ url('/roles') }}">{{ __('Role') }}s</a>
          </li>
          @endcan
        </ul>
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item d-md-down-none">
            <a class="nav-link">
              <strong>{{ Auth::user()->name }}</strong>
            </a>
          </li>
          <li class="nav-item dropdown mr-3">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <img class="img-avatar" src="{{ url('/img/users/default.jpg') }}" alt="{{ Auth::user()->name }}">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item">
                    {{ Auth::user()->name }}<br>
                    <small class="text-muted">{{ Auth::user()->email }}</small>
                </a>
                <div class="dropdown-header text-center">
                  <strong>{{ __('Account') }}</strong>
                </div>
                <a class="dropdown-item" href="{{ url('home') }}">
                  <i class="icon-speedometer"></i> {{ __('Dashboard') }}
              </a>
                <a class="dropdown-item" href="{{ url('profile') }}">
                    <i class="fas fa-user"></i> {{ __('Profile') }}
                </a>
                <a class="dropdown-item" href="{{ url('profile/settings') }}">
                  <i class="fa fa-wrench"></i> {{ __('Settings') }}</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
          </li>
        </ul>
      </header>
  