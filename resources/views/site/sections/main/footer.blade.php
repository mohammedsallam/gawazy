<div class="gawazy-primary pt-3">
    <div class="section mega-footer">
        <div class="container">
            <div class="col-md-12">
                <div class="search-box">
                    <div class="row">
                        <div class="col-lg-8 text-center text-sm-start">
                            <div class="row">
                                <div class="col-lg-1 col-md-2 col-sm-3">
                                    <div class="mb-3 pt-lg-4 float-xlg-end">
                                        <img class="gawazy-logo" src="{{ url('images/gawazyLogos/gawazy-logo-light.svg') }}" class=" w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 col-sm-5 d-flex justify-content-around">
                                    <div class="mb-3">
                                        <ul class="quick-links col-sm-4">
                                            <li class="text-end">
                                                <a href="/">{{ __('global.home') }}</a>
                                            </li>
                                            <li class="text-end">
                                                <a href="/services?search=">{{ __('service.services') }}</a>
                                            </li>
                                            <li class="text-end">
                                                <a href="/offers?search=">{{ __('offer.offers') }}</a>
                                            </li>
                                            <li class="text-end">
                                                <a href="/support">{{ __('global.support') }}</a>
                                            </li>
                                            <li class="text-end">
                                                <a href="/help">{{ __('global.help') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-around">
                            <ul class="icons d-flex col-sm-8 mt-lg-5">
                                <li>
                                    <a href="#"><img src="{{ url('images/socialicons/facebook.svg') }}" alt="" width="20" height="20"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ url('images/socialicons/instagram.svg') }}" alt="" width="20" height="20"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ url('images/socialicons/twitter.svg') }}" alt="" width="20" height="20"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ url('images/socialicons/linkedin.svg') }}" alt="" width="20" height="20"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ url('images/socialicons/pinterest.svg') }}" alt="" width="20" height="20"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ url('images/socialicons/youtube.svg') }}" alt="" width="20" height="20"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="gawazy-secondary">
    <div class="container">
        <div class="row text-center">

            <div class="col-md-6">
                <div class="designed-by text-white">
                    <span>
                        <a href="/terms" class="link">{{ __('global.terms') }}</a>
                    </span> | <span>
                        <a href="/policy">{{ __('global.privacy') }}</a>
                    </span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="copyrights text-white">
                    {{ __('global.copyrights') }}
                    © GAWAZY Co.
                    {{ __('global.year') }}
                    {{ now()->year }}
                </div>
            </div>

        </div>
    </div>
</footer>
