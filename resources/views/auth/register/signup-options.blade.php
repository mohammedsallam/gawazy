@extends('layouts.auth')

@section('title', 'Signup Options')

@section('content')
    <div class="w-100 auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="auth-body col-10 m-auto rounded p-4 mt-5 text-center">
                        <a id="gawazy-btn" class="btn m-2 pt-2" href="{{ route('user-register') }}">{{ __('user.user') }}</a>
                        <a id="gawazy-btn" class="btn m-2 pt-2" href="{{ route('vendor-register') }}">{{ __('vendor.vendor') }}</a>
                        <div>
                            <a class="btn btn-link link-underline-light auth-text gawazy-font-secondary p-0" href="{{ route('login') }}">
                                {{ __('global.previous') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
