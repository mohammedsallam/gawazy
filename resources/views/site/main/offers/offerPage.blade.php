@extends('layouts.site')

@section('title', 'Offers Page')

@section('content')

    <div class="container">
        <div class="row">
            <div class="row my-3 m-auto">
                <div class="col-lg-3 offer-vendor-details py-3 rounded">
                    @include('site.sections.offer.offerSideBar')
                </div>
                <div class="col-lg-9">
                    @include('site.sections.offer.offerDetails')
                    @include('site.sections.shared.comments')
                </div>
            </div>

            <div class="col-lg-12">
                @include('site.sections.service.vendorOffers')
            </div>
        </div>
    </div>

@endsection
