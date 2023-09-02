@extends('layouts.auth')

@section('title', 'User Profile')

@section('content')

    <div class="container">
        <div class="row">
            <div class="row my-3 m-auto">
                <div class="col-lg-3 text-center gawazy-secondary gawazy-font-gray py-3 rounded">
                    @include('site.sections.user.userSideBar')
                </div>
                <div id="content" class="col-lg-9">

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
                    @endswitch

                </div>
            </div>
        </div>
    </div>

    @include('site.sections.main.footer')
@endsection
