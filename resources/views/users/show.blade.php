@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('/home') }}">{{ __('Home') }}</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/users') }}">{{ __('User') }}s</a>
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
                        <strong>{{ __('Details of') }} {{ __('User') }}</strong></div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">{{ __('ID') }}:</dt>
                            <dd class="col-sm-9">{{ $user->id }}</dd>
                            <dt class="col-sm-3">{{ __('Name') }}:</dt>
                            <dd class="col-sm-9">{{ $user->name }}</dd>
                            <dt class="col-sm-3">{{ __('E-Mail Address') }}:</dt>
                            <dd class="col-sm-9">{{ $user->email }}</dd>
                            <dt class="col-sm-3">{{ __('Status') }}</dt>
                            <dd class="col-sm-9">   
                                @isset($user->email_verified_at)
                                    <div class="badge badge-success">{{ __('Verified') }}</div>
                                @else
                                    <div class="badge badge-danger">{{ __('Unverified') }}</div>
                                @endisset
                            </dd>
                            <dt class="col-sm-3">{{ __('Role') }}s:</dt>
                            <dd class="col-sm-9">
                                @foreach($user->getRoleNames() as $v)
                                    <div class="badge badge-success">{{ $v }}</div>
                                @endforeach
                            </dd>
                        </dl>
                    </div>
                    <div class="card-footer">
                        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                            @can('user-edit')
                            <a class="btn btn-sm btn-primary" href="{{ route('users.edit',$user->id) }}">
                                <i class="fas fa-edit"></i> {{ __('Edit') }}
                            </a>
                            @endcan
                            @csrf
                            @method('DELETE')
                            @can('user-delete')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="far fa-trash-alt"></i> {{ __('Delete') }}
                            </button>
                            @endcan
                            <a class="btn btn-sm btn-success" href="{{ route('users.index') }}" role="button">
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