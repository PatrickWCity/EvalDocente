@extends('layouts.master')

@section('content')
<div class="container-fluid py-4">
<div class="content">
    <div class="container">
        <div class="row text-center">
            <h1 class="col-12">{{ __('About Our Team') }}</h1>
            <h3 class="col-12" style="
            font-weight: 300;">
                {{ __('Our Team is composed of 4 members.') }}</h3><h3 class="col-12" style="
                font-weight: 300;">
                {{ __("Each focused with a role in the project's development during the estimated time.") }}
            </h3>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <img class="rounded-circle"
                    src="{{ url('/img/users/default.jpg') }}"
                    alt="Generic placeholder image" width="140" height="140">
                <h3>Fabio Cárcamo</h3>
                <p>{{ __('Database Administrator') }}</p>
                <p><a class="btn btn-secondary" href="#" role="button">{{ __('View details') }} »</a></p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <img class="rounded-circle"
                    src="{{ url('/img/users/default.jpg') }}"
                    alt="Generic placeholder image" width="140" height="140">
                <h3>Patrick Ciudad</h3>
                <p>{{ __('Full Stack Developer') }}</p>
                <p><a class="btn btn-secondary" href="#" role="button">{{ __('View details') }} »</a></p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <img class="rounded-circle"
                    src="{{ url('/img/users/default.jpg') }}"
                    alt="Generic placeholder image" width="140" height="140">
                <h3>Álvaro Rodríguez</h3>
                <p>{{ __('Product Owner') }}</p>
                <p><a class="btn btn-secondary" href="#" role="button">{{ __('View details') }} »</a></p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <img class="rounded-circle"
                    src="{{ url('/img/users/default.jpg') }}"
                    alt="Generic placeholder image" width="140" height="140">
                <h3>Vicente Vidal</h3>
                <p>{{ __('Quality Assurance Tester') }}</p>
                <p><a class="btn btn-secondary" href="#" role="button">{{ __('View details') }} »</a></p>
            </div>
        </div>
    </div>
</div>
</div>

@endsection