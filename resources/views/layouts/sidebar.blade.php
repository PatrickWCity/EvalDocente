<div class="sidebar">
  <nav class="sidebar-nav">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/home') }}">
          <i class="nav-icon icon-speedometer"></i> {{ __('Dashboard') }}
          <span class="badge badge-primary">{{ __('New') }}</span>
        </a>
      </li>
      <li class="nav-title">{{ __('Maintainers') }}</li>


      @can('user-list')
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/users') }}">
          <i class="nav-icon icon-pencil"></i> {{ __('User') }}s</a>
      </li>
      @endcan
      @can('role-list')
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/roles') }}">
          <i class="nav-icon icon-pencil"></i> {{ __('Role') }}s</a>
      </li>
      @endcan
      @can('instituto-list')
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/institutos') }}">
          <i class="nav-icon icon-drop"></i> {{ __('Institute') }}s</a>
      </li>
      @endcan
      @can('sede-list')
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/sedes') }}">
          <i class="nav-icon icon-pencil"></i> {{ __('Office') }}s</a>
      </li>
      @endcan
      @can('escuela-list')
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/escuelas') }}">
          <i class="nav-icon icon-pencil"></i> {{ __('School') }}s</a>
      </li>
      @endcan
      @can('carrera-list')
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/carreras') }}">
          <i class="nav-icon icon-pencil"></i> {{ __('Career') }}s</a>
      </li>
      @endcan
      @can('modulo-list')
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/modulos') }}">
          <i class="nav-icon icon-pencil"></i> {{ __('Module') }}s</a>
      </li>
      @endcan
      @can('docente-list')
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/docentes') }}">
          <i class="nav-icon icon-pencil"></i> {{ __('Teacher') }}s</a>
      </li>
      @endcan
      @can('evaluacion-list')
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/evaluaciones') }}">
          <i class="nav-icon icon-pencil"></i>
          @if (Lang::locale() === 'es')
          {{ __('Evaluation') }}es
          @else
          {{ __('Evaluation') }}s
          @endif
        </a>
      </li>
      @endcan
    </ul>
    </li>
    </ul>
  </nav>
  <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>