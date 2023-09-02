<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row pt-5">

                <div>
                    <div class="d-flex py-5 px-1">
                        <div class="col-10 heading">
                            <h4>{{ __('offer.myOffers') }}</h4>
                            <div class="seperator"></div>
                        </div>
                    </div>

                    <div class="d-flex text-center">
                        <input type="checkbox">

                        <div class="col-2"><h5>{{ __('offer.offerName') }}</h5></div>
                        <div class="col-1"><h5>{{ __('global.before') }}</h5></div>
                        <div class="col-1"><h5>{{ __('global.after') }}</h5></div>
                        <div class="col-1"><h5>{{ __('global.from') }}</h5></div>
                        <div class="col-1"><h5>{{ __('global.to') }}</h5></div>
                        <div class="col-2"><h5>{{ __('forms.location') }}</h5></div>
                        <div class="col-1"><img src="{{ url('images/icons/eye.svg') }}"></div>
                        <div class="col-1"><img src="{{ url('images/icons/dislike.svg') }}"></div>
                        <div class="col-1"><img src="{{ url('images/icons/like.svg') }}"></div>
                    </div>
                    <hr>

                    @php($notifications = [1,2,3])
                    @for($i = 0; $i < count($notifications); $i++)
                        @include('site.widgets.dashboard.myOffer')
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>

