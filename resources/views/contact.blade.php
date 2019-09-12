@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1>{{ __('Contact Us') }}</h1>
                <p><a href="tel:+56999999999"><strong>+56 9 9999 9999</strong></a></p>
                <p><a href="mailto:contacto@construyendomissuenos.cl"><strong>patrick.ciudad@correoaiep.cl</strong></a>
                </p>
                <p><a href="https://goo.gl/maps/jrweRMwwR5VJUJeJ8" target="_blank" rel="noopener noreferrer">
                        <strong>{{ __('Ave. Nueva Providencia, Providencia, Santiago Metropolitan Region, Chile.') }}</strong></a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection