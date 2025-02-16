@extends('layouts.app') 
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h3 class="text-center mt-3">User Login</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Admin Login') }}">
                        @csrf 
                        <div class="form-group">
                            <div class="col-md-8 offset-md-2">
                                <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="far fa-user"></i></div>
                                </div>
                                <input id="userId" type="text" class="form-control{{ $errors->has('userId') ? ' is-invalid' : '' }}" name="userId" value="{{ old('userId') }}"
                                    required autofocus> @if ($errors->has('userId'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('userId') }}</strong>
                                    </span> @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-md-8 offset-md-2">
                                <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                </div>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                    required> @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection