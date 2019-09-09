@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('/home') }}">{{ __('Home') }}</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/escuelas') }}">{{ __('School') }}s</a>
    </li>
    <li class="breadcrumb-item active">{{ __('Edit') }}</li>
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
                        <strong>{{ __('Edit') }} {{ __('School') }}</strong></div>
                    {!! Form::model($escuela, ['method' => 'PATCH','route' => ['escuelas.update', $escuela->id]]) !!}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="text-input">{{ __('Name') }}</label>
                            {!! Form::text('nombre', null, array('placeholder' => __('Name'),'class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <label for="text-input">{{ __('Description') }}</label>
                            {!! Form::text('descripcion', null, array('placeholder' => __('Description'),'class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <label>{{ __('Career') }}s</label>
                            @foreach($carrera as $value)
                                <div class="form-check">
                                    {{ Form::checkbox('carrera[]', $value->id, in_array($value->id, $escuelaCarreras) ? true : false, array('class' => 'form-check-input')) }}
                                    <label class="form-check-label">{{ $value->nombre }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" type="submit">
                            <i class="far fa-dot-circle"></i> {{ __('Update') }}
                        </button>
                        <button class="btn btn-sm btn-danger" type="reset">
                            <i class="fa fa-ban"></i> {{ __('Reset') }}
                        </button>
                        <a class="btn btn-sm btn-success" href="{{ route('escuelas.index') }}" role="button">
                            <i class="fas fa-undo"></i> {{ __('Back') }}
                        </a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection