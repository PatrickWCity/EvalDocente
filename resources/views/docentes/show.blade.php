@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('/home') }}">{{ __('Home') }}</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/docentes') }}">{{ __('Teacher') }}s</a>
    </li>
    <li class="breadcrumb-item active">{{ __('Details') }}</li>
</ol>
<div class="container-fluid">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>{{ __('Details of') }} {{ __('Teacher') }}</strong></div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">{{ __('ID') }}:</dt>
                            <dd class="col-sm-9">{{ $docente->id }}</dd>
                            <dt class="col-sm-3">{{ __('First Name') }}:</dt>
                            <dd class="col-sm-9">{{ $docente->nombre }}</dd>
                            <dt class="col-sm-3">{{ __('First Last Name') }}:</dt>
                            <dd class="col-sm-9">{{ $docente->appat }}</dd>
                            <dt class="col-sm-3">{{ __('Second Last Name') }}:</dt>
                            <dd class="col-sm-9">{{ $docente->apmat }}</dd>
                        </dl>
                    </div>
                    <div class="card-footer">
                        <form action="{{ route('docentes.destroy',$docente->id) }}" method="POST">
                            @can('docente-edit')
                            <a class="btn btn-sm btn-primary" href="{{ route('docentes.edit',$docente->id) }}">
                                <i class="fas fa-edit"></i> {{ __('Edit') }}
                            </a>
                            @endcan
                            @csrf
                            @method('DELETE')
                            @can('docente-delete')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="far fa-trash-alt"></i> {{ __('Delete') }}
                            </button>
                            @endcan
                            <a class="btn btn-sm btn-success" href="{{ route('docentes.index') }}" role="button">
                                <i class="fas fa-undo"></i> {{ __('Back') }}
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection