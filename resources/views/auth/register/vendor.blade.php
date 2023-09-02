@extends('layouts.auth')

@section('title', 'Vendor Register')

@section('content')
    <div class="w-100 auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="auth-body col-10 m-auto rounded p-4 mt-5">
                        <form method="POST" action="">
                            @csrf

                            <div class="w-100 px-1">
                                <label for="fName"
                                       class="col-md-4 pb-2">
                                    {{ __('forms.firstName') }}
                                </label>
                            </div>

                            <div class="w-100">
                                <input id="text" type="text"
                                       class="form-control bg-white focus-ring focus-ring-light border auth-input rounded @error('fName') is-invalid @enderror" name="fName"
                                       value="{{ old('fName') }}" required autofocus>

                                @error('fName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="w-100 px-1">
                                <label for="lName"
                                       class="col-md-4 pb-2">
                                    {{ __('forms.lastName') }}
                                </label>
                            </div>

                            <div class="w-100">
                                <input id="text" type="text"
                                       class="form-control bg-white focus-ring focus-ring-light border auth-input rounded @error('lName') is-invalid @enderror" name="lName"
                                       value="{{ old('lName') }}" required>

                                @error('lName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="w-100 px-1">
                                <label for="vendorName"
                                       class="col-md-4 pb-2">
                                    {{ __('vendor.vendorName') }}
                                </label>
                            </div>

                            <div class="w-100">
                                <input id="text" type="text"
                                       class="form-control bg-white focus-ring focus-ring-light border auth-input rounded @error('vendorName') is-invalid @enderror" name="vendorName"
                                       value="{{ old('vendorName') }}" required autofocus>

                                @error('vendorName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="w-100 px-1">
                                <label for="category"
                                       class="col-md-4 pb-2">
                                    {{ __('category.chooseCategory') }}
                                </label>
                            </div>

                            <div class="w-100">
                                <select name="category_id" id="category_id"
                                        class="form-control bg-white focus-ring focus-ring-light is-untouched is-pristine auth-input av-valid @error('category_id') is-invalid @enderror" required>
                                    <option value="">{{ __('global.select') }}</option>
                                    <optgroup class="py-2" label="group">
                                        <option value="">item</option>
                                        <option value="">item</option>
                                    </optgroup>

                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </select>
                            </div>

                            <div class="w-100 px-1">
                                <label for="phone"
                                       class="col-md-4 pb-2">
                                    {{ __('forms.phone') }}
                                </label>
                            </div>


                            <div class="w-100">
                                <input id="phone" type="text"
                                       class="form-control bg-white focus-ring focus-ring-light border auth-input rounded @error('phone') is-invalid @enderror" name="phone"
                                       value="{{ old('phone') }}" required>

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="w-100 px-1">
                                <label for="email"
                                       class="col-md-4 pb-2">
                                    {{ __('forms.email') }}
                                </label>
                            </div>


                            <div class="w-100">
                                <input id="email" type="email"
                                       class="form-control bg-white focus-ring focus-ring-light border auth-input rounded @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required>

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
                                       required>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="w-100 px-1">
                                <label for="password"
                                       class="col-md-4 pb-2">{{ __('forms.confirmPassword') }}
                                </label>
                            </div>

                            <div class="w-100">
                                <input id="password" type="password"
                                       class="form-control bg-white focus-ring focus-ring-light border auth-input rounded @error('conPassword') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('conPassword')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="fw-light px-5 text-center">
                                <p>
                                    {{ __('global.termsHint') }}
                                    <a href="{{ route('policy') }}">{{ __('global.privacy') }}</a>
                                </p>
                            </div>

                            <div class="row mb-0">
                                <div class="text-center">
                                    <button id="gawazy-btn" type="submit" class="btn">
                                        {{ __('actions.register') }}
                                    </button>
                                </div>


                                <a class="btn btn-link link-underline-light auth-text gawazy-font-secondary p-0" href="{{ route('signup-options') }}">
                                    {{ __('global.previous') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
