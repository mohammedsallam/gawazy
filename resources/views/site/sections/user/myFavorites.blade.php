<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading pt-5 px-1">
                        <h4>{{ __('service.services') }}</h4>
                        <div class="seperator"></div>
                    </div>
                </div>
                <div class="row">
                    @php($notifications = [1,2,3])
                    @for($i = 0; $i < count($notifications); $i++)
                        <div class="col-xl-4 col-md-6 col-12 pt-3">
                            @include('site.widgets.home.service')
                            <form action="">
                                @csrf
                                <div class="pt-3 text-center">
                                    <button class="w-auto btn gawazy-primary gawazy-font-gray" type="submit">{{ __('actions.delete') }}</button>
                                </div>
                            </form>
                        </div>
                    @endfor
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="heading pt-5 px-1">
                        <h4>{{ __('offer.offers') }}</h4>
                        <div class="seperator"></div>
                    </div>
                </div>
                <div class="row">
                    @php($notifications = [1,2,3])
                    @for($i = 0; $i < count($notifications); $i++)
                        <div class="col-xl-4 col-md-6 col-12 pt-3">
                            @include('site.widgets.home.offer')
                            <form action="">
                                @csrf
                                <div class="pt-3 text-center">
                                    <button class="w-auto btn gawazy-primary gawazy-font-gray" type="submit">{{ __('actions.delete') }}</button>
                                </div>
                            </form>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
