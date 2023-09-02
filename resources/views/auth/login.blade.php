@extends('layouts.auth')

@section('title', 'Sign-in')

@section('content')
    <div class="w-100 auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="auth-body col-10 m-auto rounded p-4 mt-5">
                        <form method="POST" action="">
                            @csrf

                            <div class="w-100 px-1">
                                <label for="email"
                                       class="col-md-4 pb-2">
                                    {{ __('forms.email') }}
                                </label>
                            </div>

                            <div class="w-100">
                                <input id="email" type="email"
                                       class="form-control bg-white focus-ring focus-ring-light border auth-input rounded @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="w-100 px-1">
                                <label for="password"
                                       class="col-md-4 pb-2">{{ __('forms.password') }}
                                </label>
                            </div>

                            <div class="w-100">
                                <input id="password" type="password"
                                       class="form-control bg-white focus-ring focus-ring-light border auth-input rounded @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="w-100 px-1">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link link-underline-light gawazy-font-secondary auth-text" href="{{ route('password.request') }}">
                                        {{ __('forms.forgetPassword') }}
                                    </a>
                                @endif
                            </div>

                            <div class="row mb-0">
                                <div class="text-center">
                                    <button id="gawazy-btn" type="submit" class="btn">
                                        {{ __('actions.logIn') }}
                                    </button>
                                </div>


                                <a class="btn btn-link link-underline-light gawazy-font-secondary auth-text" href="{{ route('signup-options') }}">
                                    {{ __('actions.createNewAccount') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
