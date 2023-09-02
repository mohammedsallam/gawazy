@extends('layouts.site')

@section('title', 'Service Page')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img class="banner-bg" src="{{ url('images/defaults/cover.jpg') }}">
            </div>

            <div class="row my-3 m-auto">
                <div class="col-lg-3 vendor-details py-3 rounded">
                    @include('site.sections.service.serviceSideBar')
                </div>
                <div class="col-lg-9">
                    @include('site.sections.service.latestWork')
                    @include('site.sections.service.serviceDetails')
                    @include('site.sections.shared.comments')
                </div>
            </div>

            <div class="col-lg-12">
                @include('site.sections.home.mostViewedServices')
            </div>
            <div class="col-lg-12">
                @include('site.sections.service.vendorOffers')
            </div>
        </div>
    </div>

@endsection
