@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('/home') }}">{{ __('Home') }}</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/institutos') }}">{{ __('Institute') }}s</a>
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
                        <strong>{{ __('Details of') }} {{ __('Institute') }}</strong></div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">{{ __('ID') }}:</dt>
                            <dd class="col-sm-9">{{ $instituto->id }}</dd>
                            <dt class="col-sm-3">{{ __('Name') }}:</dt>
                            <dd class="col-sm-9">{{ $instituto->nombre }}</dd>
                            <dt class="col-sm-3">{{ __('Description') }}:</dt>
                            <dd class="col-sm-9">{{ $instituto->descripcion }}</dd>
                            <dt class="col-sm-3">{{ __('Sede') }}s:</dt>
                            <dd class="col-sm-9">
                                @foreach($institutoSede as $v)
                                    <div class="badge badge-success">{{ $v->nombre }}</div>
                                @endforeach
                            </dd>
                        </dl>
                    </div>
                    <div class="card-footer">
                        <form action="{{ route('institutos.destroy',$instituto->id) }}" method="POST">
                            @can('instituto-edit')
                            <a class="btn btn-sm btn-primary" href="{{ route('institutos.edit',$instituto->id) }}">
                                <i class="fas fa-edit"></i> {{ __('Edit') }}
                            </a>
                            @endcan
                            @csrf
                            @method('DELETE')
                            @can('instituto-delete')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="far fa-trash-alt"></i> {{ __('Delete') }}
                            </button>
                            @endcan
                            <a class="btn btn-sm btn-success" href="{{ route('institutos.index') }}" role="button">
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