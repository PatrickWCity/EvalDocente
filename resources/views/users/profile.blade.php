@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('/home') }}">{{ __('Home') }}</a>
    </li>
    <li class="breadcrumb-item active">{{ __('Profile') }}</li>
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
                <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header text-white"
                        style="background: url({{ url('img/users/default.jpg') }}) center center;">
                        <h3 class="widget-user-username text-right">{{ $user->name }}</h3>
                        <h5 class="widget-user-desc text-right"><div class="badge badge-success">{{$user->getRoleNames()->first()}} </div></h5>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle" src="{{ url('img/users/default.jpg') }}" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-xs-right-none border-right">
                                <div class="description-block">
                                    <span class="description-text">{{ __('Joined') }}</span>
                                    <h5 class="description-header">
                                        @if (Lang::locale() === 'es')
                                            {{Date::parse($user->created_at)->format('j \d\e F \d\e Y')}}
                                        @else
                                            {{Date::parse($user->created_at)->format('F jS, Y')}}
                                        @endif
                                    </h5>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-xs-right-none border-right">
                                <div class="description-block">
                                    <span class="description-text">{{ __('Status') }}</span>
                                    <h5 class="description-header">
                                        @isset($user->email_verified_at)
                                            <div class="badge badge-success">{{ __('Verified') }}</div>
                                        @else
                                            <div class="badge badge-danger">{{ __('Unverified') }}</div>
                                        @endisset
                                    </h5>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <span class="description-text">{{ __('User ID') }}</span>
                                    <h5 class="description-header">{{ $user->id }}</h5>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>{{ __('Account Details') }}</strong></div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">{{ __('ID') }}:</dt>
                            <dd class="col-sm-9">{{ $user->id }}</dd>
                            <dt class="col-sm-3">{{ __('Name') }}:</dt>
                            <dd class="col-sm-9">{{ $user->name }}</dd>
                            <dt class="col-sm-3">{{ __('E-Mail Address') }}:</dt>
                            <dd class="col-sm-9">{{ $user->email }}</dd>
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
                            <a class="btn btn-sm btn-primary" href="{{ route('users.settings') }}">
                                <i class="fas fa-edit"></i> {{ __('Edit') }}
                            </a>
                            @endcan
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection