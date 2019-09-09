@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('/home') }}">{{ __('Home') }}</a>
    </li>
    <li class="breadcrumb-item active">{{ __('Teacher') }}s</li>
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
                        <i class="fa fa-align-justify"></i> <strong>{{ __('List of') }} {{ __('Teacher') }}s</strong>
                        @can('docente-create')
                        <div class="card-header-actions">
                            <a class="btn btn-sm btn-success" href="{{ route('docentes.create') }}" role="button"><i
                                    class="fas fa-plus"></i> {{ __('Create') }} {{ __('Teacher') }}</a>
                        </div>
                        @endcan
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('First Name') }}</th>
                                    <th>{{ __('First Last Name') }}</th>
                                    <th>{{ __('Second Last Name') }}</th>
                                    <th class="text-center" width="226px">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($docentes as $docente)
                                <tr>
                                    <td>{{ $docente->id }}</td>
                                    <td>{{ $docente->nombre }}</td>
                                    <td>{{ $docente->appat }}</td>
                                    <td>{{ $docente->apmat }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('docentes.destroy',$docente->id) }}" method="POST">
                                            <a class="btn btn-sm btn-info" href="{{ route('docentes.show',$docente->id) }}">
                                                <i class="far fa-eye"></i> {{ __('View') }}
                                            </a>
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
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $docentes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection