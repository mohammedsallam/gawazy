@extends('layouts.auth')

@section('title', 'User Profile')

@section('content')

    <div class="container">
        <div class="row">
            <div class="row my-3 m-auto">
                <div class="col-lg-3 text-center gawazy-secondary gawazy-font-gray py-3 rounded">
                    @include('site.sections.vendor.vendorSideBar')
                </div>
                <div class="col-lg-9">
                    @switch($selected)
                        @case('editProfile')
                            @include('site.sections.user.editProfile')
                            @break
                        @case('messages')
                            @include('site.sections.user.messages')
                            @break
                        @case('my_favorites')
                            @include('site.sections.user.myFavorites')
                            @break
                        @case('notifications')
                            @include('site.sections.user.notifications')
                            @break
                        @case('support')
                            @include('site.sections.user.support')
                            @break

                        @case('add_new_offer')
                            @include('site.sections.vendor.addNewOffer')
                            @break
                        @case('add_secondary_service')
                            @include('site.sections.vendor.addNewSecondaryService')
                            @break
                        @case('draft')
                            @include('site.sections.vendor.draft')
                            @break
                        @case('main_service')
                            @include('site.sections.vendor.mainService')
                            @break
                        @case('latest_work')
                            @include('site.sections.vendor.latestWork')
                            @break
                        @case('my_offers')
                            @include('site.sections.vendor.myOffers')
                            @break
                        @case('my_secondary_services')
                            @include('site.sections.vendor.mySecondaryServices')
                            @break
                    @endswitch
                </div>
            </div>
        </div>
    </div>

    @include('site.sections.main.footer')
@endsection
