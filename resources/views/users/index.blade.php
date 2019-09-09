@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('/home') }}">{{ __('Home') }}</a>
    </li>
    <li class="breadcrumb-item active">{{ __('User') }}s</li>
</ol>
<div class="container-fluid">
    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
    @endif
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> <strong>{{ __('List of') }} {{ __('User') }}s</strong>
                        @can('user-create')
                        <div class="card-header-actions">
                            <a class="btn btn-sm btn-success" href="{{ route('users.create') }}" role="button"><i
                                    class="fas fa-plus"></i> {{ __('Create') }} {{ __('User') }}</a>
                        </div>
                        @endcan
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('E-Mail Address') }}</th>
                                    <th class="text-center">{{ __('Language preference') }}</th>
                                    <th>{{ __('Status') }}<th>
                                    <th>{{ __('Role') }}</th>
                                    
                                    <th class="text-center" width="226px">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="text-center">
                                        @if ($user->locale === 'es')
                                            {{ __('Spanish') }}
                                        @else
                                            {{ __('English') }}
                                        @endif
                                    </td>
                                    <td>
                                        @isset($user->email_verified_at)
                                            <div class="badge badge-success">{{ __('Verified') }}</div>
                                        @else
                                            <div class="badge badge-danger">{{ __('Unverified') }}</div>
                                        @endisset
                                    <td>
                                    <td>
                                        @foreach($user->getRoleNames() as $v)
                                            <div class="badge badge-success">{{ $v }}</div>
                                        @endforeach
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                            <a class="btn btn-sm btn-info" href="{{ route('users.show',$user->id) }}">
                                                <i class="far fa-eye"></i> {{ __('View') }}
                                            </a>
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
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection