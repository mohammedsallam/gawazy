<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading pt-5 px-1">
                        <h4>{{ __('offer.offers') }}</h4>
                        <div class="seperator"></div>
                    </div>
                </div>

                @php($services = [1,2,3,4,5,6,7,8,9,10])
                @for($i = 0; $i <= count($services); $i++)

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pt-3">
                        @include('site.widgets.home.offer')
                    </div>

                    @if($i > 5)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-12 pt-3">
                            <a class="text-decoration-none" href="{{ route('offers') }}">
                                <div class="service-card bg-white rounded">
                                    <div class="show-more">
                                        {{ __('global.forMore') }}
                                    </div>
                                </div>
                            </a>
                        </div>
                        @break
                    @endif

                @endfor

            </div>
        </div>
    </div>
</div>
