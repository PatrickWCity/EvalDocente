@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">{{ __('Dashboard') }}</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <!--<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>{{ __('Dashboard') }}</strong></div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        {{ __('You are currently logged in!') }}
                    </div>
                </div>
            </div>
        </div>-->
        <div class="row">
            @can('role-list')
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="icon-people"></i>
                        </div>
                        <div class="text-value">{{ $Role }}</div>
                        <small class="text-muted text-uppercase font-weight-bold">{{ __('Role') }}s</small>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="btn-block text-muted d-flex justify-content-between align-items-center text-decoration-none"
                            href="{{ url('/roles') }}">
                            <span class="small font-weight-bold">{{ __('View') }} {{ __('List') }}</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endcan
            @can('user-list')
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="icon-people"></i>
                        </div>
                        <div class="text-value">{{ $User }}</div>
                        <small class="text-muted text-uppercase font-weight-bold">{{ __('User') }}s</small>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="btn-block text-muted d-flex justify-content-between align-items-center text-decoration-none"
                            href="{{ url('/users') }}">
                            <span class="small font-weight-bold">{{ __('View') }} {{ __('List') }}</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endcan
            @can('instituto-list')
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="icon-people"></i>
                        </div>
                        <div class="text-value">{{ $Instituto }}</div>
                        <small class="text-muted text-uppercase font-weight-bold">{{ __('Institute') }}s</small>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="btn-block text-muted d-flex justify-content-between align-items-center text-decoration-none"
                            href="{{ url('/institutos') }}">
                            <span class="small font-weight-bold">{{ __('View') }} {{ __('List') }}</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endcan
            @can('sede-list')
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="icon-people"></i>
                        </div>
                        <div class="text-value">{{ $Sede }}</div>
                        <small class="text-muted text-uppercase font-weight-bold">{{ __('Office') }}s</small>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="btn-block text-muted d-flex justify-content-between align-items-center text-decoration-none"
                            href="{{ url('/sedes') }}">
                            <span class="small font-weight-bold">{{ __('View') }} {{ __('List') }}</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endcan
            @can('escuela-list')
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="icon-people"></i>
                        </div>
                        <div class="text-value">{{ $Escuela }}</div>
                        <small class="text-muted text-uppercase font-weight-bold">{{ __('School') }}s</small>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="btn-block text-muted d-flex justify-content-between align-items-center text-decoration-none"
                            href="{{ url('/escuelas') }}">
                            <span class="small font-weight-bold">{{ __('View') }} {{ __('List') }}</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endcan
            @can('carrera-list')
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="icon-people"></i>
                        </div>
                        <div class="text-value">{{ $Carrera }}</div>
                        <small class="text-muted text-uppercase font-weight-bold">{{ __('Career') }}s</small>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="btn-block text-muted d-flex justify-content-between align-items-center text-decoration-none"
                            href="{{ url('/carreras') }}">
                            <span class="small font-weight-bold">{{ __('View') }} {{ __('List') }}</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endcan
            @can('modulo-list')
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="icon-people"></i>
                        </div>
                        <div class="text-value">{{ $Modulo }}</div>
                        <small class="text-muted text-uppercase font-weight-bold">{{ __('Module') }}s</small>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="btn-block text-muted d-flex justify-content-between align-items-center text-decoration-none"
                            href="{{ url('/modulos') }}">
                            <span class="small font-weight-bold">{{ __('View') }} {{ __('List') }}</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endcan
            @can('docente-list')
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="icon-people"></i>
                        </div>
                        <div class="text-value">{{ $Docente }}</div>
                        <small class="text-muted text-uppercase font-weight-bold">{{ __('Teacher') }}s</small>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="btn-block text-muted d-flex justify-content-between align-items-center text-decoration-none"
                            href="{{ url('/docentes') }}">
                            <span class="small font-weight-bold">{{ __('View') }} {{ __('List') }}</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endcan
            @can('evaluacion-list')
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="icon-people"></i>
                        </div>
                        <div class="text-value">{{ $Evaluacion }}</div>
                        <small class="text-muted text-uppercase font-weight-bold">
                            @if (Lang::locale() === 'es')
                            {{ __('Evaluation') }}es
                            @else
                            {{ __('Evaluation') }}s
                            @endif
                        </small>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="btn-block text-muted d-flex justify-content-between align-items-center text-decoration-none"
                            href="{{ url('/evaluaciones') }}">
                            <span class="small font-weight-bold">{{ __('View') }} {{ __('List') }}</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endcan
        </div>
    </div>
</div>

@endsection