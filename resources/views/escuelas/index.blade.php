@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('/home') }}">{{ __('Home') }}</a>
    </li>
    <li class="breadcrumb-item active">{{ __('School') }}s</li>
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
                        <i class="fa fa-align-justify"></i> <strong>{{ __('List of') }} {{ __('School') }}s</strong>
                        @can('escuela-create')
                        <div class="card-header-actions">
                            <a class="btn btn-sm btn-success" href="{{ route('escuelas.create') }}" role="button"><i
                                    class="fas fa-plus"></i> {{ __('Create') }} {{ __('School') }}</a>
                        </div>
                        @endcan
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Description') }}</th>
                                    <th>{{ __('Career') }}</th>
                                    
                                    <th class="text-center" width="226px">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($escuelas as $escuela)
                                <tr>
                                    <td>{{ $escuela->id }}</td>
                                    <td>{{ $escuela->nombre }}</td>
                                    <td>{{ $escuela->descripcion }}</td>
                                    <td>
                                        @foreach($escuela->carreras as $v)
                                            <div class="badge badge-success">{{ $v->nombre }}</div>
                                        @endforeach
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('escuelas.destroy',$escuela->id) }}" method="POST">
                                            <a class="btn btn-sm btn-info" href="{{ route('escuelas.show',$escuela->id) }}">
                                                <i class="far fa-eye"></i> {{ __('View') }}
                                            </a>
                                            @can('escuela-edit')
                                            <a class="btn btn-sm btn-primary" href="{{ route('escuelas.edit',$escuela->id) }}">
                                                <i class="fas fa-edit"></i> {{ __('Edit') }}
                                            </a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('escuela-delete')
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
                        {{ $escuelas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection