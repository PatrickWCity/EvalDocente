@extends('layouts.auth')

@section('auth')
<div class="col-lg-6 col-md-8">
    <div class="card mx-4">
        <div class="card-body p-4">
            <h1>{{ __('Register') }}</h1>
            <p class="text-muted">{{ __('Create your account') }}</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="icon-user"></i>
                        </span>
                    </div>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                        name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="icon-lock"></i>
                        </span>
                    </div>
                    <input id="password" type="password"
                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('Password') }}" name="password" required>

                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="icon-lock"></i>
                        </span>
                    </div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        placeholder="{{ __('Confirm Password') }}" required>
                </div>
                <button type="submit" class="btn btn-block btn-success btn-primary">
                    {{ __('Create Account') }}
                </button>
            </form>
        </div>
        <div class="card-footer p-4">
            <div class="row">
                <div class="btn-group col-12" role="group">
                    <a href="{{ url('/login/facebook') }}" class="btn btn-facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{ url('/login/twitter') }}" class="btn btn-twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="{{ url('/login/linkedin') }}" class="btn btn-linkedin">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="{{ url('/login/google') }}" class="btn btn-behance">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="{{ url('/login/github') }}" class="btn btn-github">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="{{ url('/login/gitlab') }}" class="btn btn-gitlab">
                        <i class="fab fa-gitlab"></i>
                    </a>
                    <a href="{{ url('/login/bitbucket') }}" class="btn btn-bitbucket">
                        <i class="fab fa-bitbucket"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection