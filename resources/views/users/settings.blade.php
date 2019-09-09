@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('/home') }}">{{ __('Home') }}</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/profile') }}">{{ __('Profile') }}</a>
    </li>
    <li class="breadcrumb-item active">{{ __('Settings') }}</li>
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
                        <strong>{{ __('Account Settings') }}</strong></div>
                    {!! Form::model($user, ['method' => 'PATCH','route' => ['users.updateProfile', $user->id]]) !!}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="text-input">{{ __('Name') }}</label>
                            {!! Form::text('name', null, array('placeholder' => __('Name'),'class' => 'form-control'))
                            !!}
                        </div>
                        <div class="form-group">
                            <label for="text-input">{{ __('E-Mail Address') }}</label>
                            {!! Form::text('email', null, array('placeholder' => __('E-Mail Address'),'class' =>
                            'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <label for="text-input">{{ __('Password') }}</label>
                            {!! Form::password('password', array('placeholder' => __('Password'),'class' =>
                            'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <label for="text-input">{{ __('Confirm Password') }}</label>
                            {!! Form::password('confirm-password', array('placeholder' => __('Confirm Password'),'class'
                            => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <label for="text-input">{{ __('Language') }}</label>
                            {!! Form::select('locale', array('en' => __('English'), 'es' => __('Spanish')), null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" type="submit">
                            <i class="far fa-dot-circle"></i> {{ __('Update') }}
                        </button>
                        <button class="btn btn-sm btn-danger" type="reset">
                            <i class="fa fa-ban"></i> {{ __('Reset') }}
                        </button>
                        <a class="btn btn-sm btn-success" href="{{ route('users.profile') }}" role="button">
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