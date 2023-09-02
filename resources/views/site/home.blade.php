@extends('layouts.site')

@section('title', 'Gawazy')

@section('content')

    @include('site.sections.main.search')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading pt-5">
                    <h4>{{ __('global.welcomeMessage') }}</h4>
                </div>
            </div>
        </div>
    </div>

    @include('site.sections.home.categories')

    @include('site.sections.home.services')

    @include('site.sections.home.offers')

    @include('site.sections.home.mostViewedServices')

    @include('site.sections.home.mostViewedOffers')

@endsection
