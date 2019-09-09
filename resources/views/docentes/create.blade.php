@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('/home') }}">{{ __('Home') }}</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/docentes') }}">{{ __('Teacher') }}s</a>
    </li>
    <li class="breadcrumb-item active">{{ __('Create') }}</li>
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
                        <strong>{{ __('Create') }} {{ __('Teacher') }}</strong></div>
                    {!! Form::open(array('route' => 'docentes.store','method'=>'POST')) !!}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="text-input">{{ __('First Name') }}</label>
                            {!! Form::text('nombre', null, array('placeholder' => __('First Name'),'class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <label for="text-input">{{ __('First Last Name') }}</label>
                            {!! Form::text('appat', null, array('placeholder' => __('First Last Name'),'class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <label for="text-input">{{ __('Second Last Name') }}</label>
                            {!! Form::text('apmat', null, array('placeholder' => __('Second Last Name'),'class' => 'form-control'))
                            !!}
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" type="submit">
                            <i class="far fa-dot-circle"></i> {{ __('Submit') }}
                        </button>
                        <button class="btn btn-sm btn-danger" type="reset">
                            <i class="fa fa-ban"></i> {{ __('Reset') }}
                        </button>
                        <a class="btn btn-sm btn-success" href="{{ route('docentes.index') }}" role="button">
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