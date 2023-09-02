<div class="row">
    <div class="col-md-6">
        <div class="pt-3 fs-5">
            <h2 class="gawazy-font-primary">
                {{ __('offer.title') }}
            </h2>
            <h4 class="gawazy-font-secondary">
                {{ __('offer.date') }}
            </h4>
            <p>
                {{ __('offer.shortDescription') }}
            </p>
            <button id="more_btn" class="btn gawazy-primary text-white px-3" onclick="showMoreDescription()">
                {{ __('global.more') }}
            </button>

            <div id="service_description" class="py-3">
                <p>
                    {{ __('offer.shortDescription') }}
                </p>
                <button class="btn gawazy-primary text-white px-3" onclick="showLessDescription()">
                    {{ __('global.less') }}
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-6 pt-3">
        <div class="actions d-flex float-start">
            <div class="rate">
                <label></label>
                <label></label>
                <label></label>
                <label></label>
                <label></label>
            </div>
            <div class="action px-1"><img src="{{ url('images/icons/eye.svg') }}" class="" alt=""></div>
            <div class="action px-1"><img src="{{ url('images/icons/dislike.svg') }}" class="" alt=""></div>
            <div class="action px-1"><img src="{{ url('images/icons/like.svg') }}" alt=""></div>
            <div class="action px-1"><img src="{{ url('images/icons/share.svg') }}" alt=""></div>
        </div>
        <div class="float-start w-75 text-start">
            <div class="d-flex mb-2">
                <del class="gawazy-font-primary fs-1" style="width: 50%">4000 {{ __('global.eg') }}</del>
                <span class="gawazy-font-primary fs-1" style="width: 50%">20000 {{ __('global.eg') }}</span>
            </div>
        </div>
        <div class="float-end w-100 text-start">
            <div class="d-flex justify-content-around mb-2">
                <span class="rate-size px-2" style="width: 15%">400</span>
                <div class="w3-light-grey w3-round" style="width: 70%">
                    <div class="w3-container w3-orange w3-round h-100" style="width:80%">80%</div>
                </div>
                <span class="rate-size px-1" style="width: 15%">5 {{ __('global.star') }}</span>
            </div>
            <div class="d-flex justify-content-around mb-2">
                <span class="rate-size px-2" style="width: 15%">75</span>
                <div class="w3-light-grey w3-round" style="width: 70%">
                    <div class="w3-container w3-orange w3-round h-100" style="width:15%">15%</div>
                </div>
                <span class="rate-size px-1" style="width: 15%">4 {{ __('global.star') }}</span>
            </div>
            <div class="d-flex justify-content-around mb-2">
                <span class="rate-size px-2" style="width: 15%">25</span>
                <div class="w3-light-grey w3-round" style="width: 70%">
                    <div class="w3-container w3-orange w3-round h-100" style="width:5%">5%</div>
                </div>
                <span class="rate-size px-1" style="width: 15%">3 {{ __('global.star') }}</span>
            </div>
            <div class="d-flex justify-content-around mb-2">
                <span class="rate-size px-2" style="width: 15%">0</span>
                <div class="w3-light-grey w3-round" style="width: 70%">
                    <div class="w3-container w3-orange w3-round h-100" style="width:0%">0%</div>
                </div>
                <span class="rate-size px-1" style="width: 15%">2 {{ __('global.star') }}</span>
            </div>
            <div class="d-flex justify-content-around mb-2">
                <span class="rate-size px-2" style="width: 15%">0</span>
                <div class="w3-light-grey w3-round" style="width: 70%">
                    <div class="w3-container w3-orange w3-round h-100" style="width:0%">0%</div>
                </div>
                <span class="rate-size px-1" style="width: 15%">1 {{ __('global.star') }}</span>
            </div>
        </div>
    </div>
</div>
