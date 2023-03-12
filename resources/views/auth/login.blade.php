{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5 px-2">
        <div class="row justify-content-center mx-4">
            <div class="col-10 text-center my-4">
                <img src="{{asset('assets/images/image1.png')}}" alt="">
                <h1 class="mt-3">Welcome Back</h1>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="col-12 col-md-6 mx-auto my-4">
                    <input type="email" class="form-control custom-field" name="email" placeholder="Email" required>
                </div>
                <div class="col-12 col-md-6 mx-auto my-4">
                    <input type="password" class="form-control custom-field" name="password" placeholder="********" required>
                </div>
                <div class="col-md-4 offset-md-4 my-4">
                    <button type="submit" class="custom-btn">Login</button>
                </div>
            </form>
            <div class="d-flex">
                <span class="gr-1 my-auto"></span>
                <span class="w-50 text-center">Or Sign Up With</span>
                <span class="gr-2 my-auto"></span>
            </div>
            <div class="d-flex justify-content-center my-3">
                <div class="rounded-full bg-custom-gray mx-2">
                    <img src="{{asset('assets/images/google.png')}}" alt="">
                </div>
                <div class="rounded-full bg-custom-gray mx-2">
                    <img src="{{asset('assets/images/facebook.png')}}" alt="">
                </div>
                <div class="rounded-full bg-custom-gray mx-2">
                    <img src="{{asset('assets/images/apple.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection