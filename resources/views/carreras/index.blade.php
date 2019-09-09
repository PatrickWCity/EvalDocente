@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('/home') }}">{{ __('Home') }}</a>
    </li>
    <li class="breadcrumb-item active">{{ __('Career') }}s</li>
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
                        <i class="fa fa-align-justify"></i> <strong>{{ __('List of') }} {{ __('Career') }}s</strong>
                        @can('carrera-create')
                        <div class="card-header-actions">
                            <a class="btn btn-sm btn-success" href="{{ route('carreras.create') }}" role="button"><i
                                    class="fas fa-plus"></i> {{ __('Create') }} {{ __('Career') }}</a>
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
                                    <th>{{ __('Module') }}</th>
                                    
                                    <th class="text-center" width="226px">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carreras as $carrera)
                                <tr>
                                    <td>{{ $carrera->id }}</td>
                                    <td>{{ $carrera->nombre }}</td>
                                    <td>{{ $carrera->descripcion }}</td>
                                    <td>
                                        @foreach($carrera->modulos as $v)

                                            <div class="badge badge-success">{{ $v->nombre }}</div>
                                            
                                        @endforeach
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('carreras.destroy',$carrera->id) }}" method="POST">
                                            <a class="btn btn-sm btn-info" href="{{ route('carreras.show',$carrera->id) }}">
                                                <i class="far fa-eye"></i> {{ __('View') }}
                                            </a>
                                            @can('carrera-edit')
                                            <a class="btn btn-sm btn-primary" href="{{ route('carreras.edit',$carrera->id) }}">
                                                <i class="fas fa-edit"></i> {{ __('Edit') }}
                                            </a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('carrera-delete')
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
                        {{ $carreras->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection