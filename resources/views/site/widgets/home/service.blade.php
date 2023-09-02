<div class="service-card pb-4 bg-white rounded">
    <div class="love-icon">
        <a class="px-3" href="">
            <img src="{{ url('images/icons/love.svg') }}" alt="add to favorites">
        </a>
    </div>
    <div>
        <a href="{{ route('servicePage', $id) }}">
            <img src="{{ url('images/defaults/default.jpg') }}" class="service-image mw-100" alt="">
        </a>
    </div>
    <div class="service-box pt-5 text-end">
        <div class="title-price d-flex justify-content-between">
            <div>
                <div style="color: black;">
                    <h4 class="service-title">
                        {{ __('service.serviceName') }}
                    </h4>
                </div>
                <small>
                    {{ __('service.serviceAddress') }}
                </small>
            </div>
            <div class="price-rate">
                <div>
                    <div class="price">{{ __('global.from') }} <strong>2000</strong> {{ __('global.eg') }}</div>
                    <div class="price">{{ __('global.to') }} <strong>5000</strong> {{ __('global.eg') }}</div>
                </div>
                <div class="rate">
                    <label></label>
                    <label></label>
                    <label></label>
                    <label></label>
                    <label></label>
                </div>
            </div>
        </div>
        <div class="">
            <div class="vendor-name ">
                <span>{{ __('vendor.vendorName') }}</span>
            </div>
        </div>
        <div class="d-flex justify-content-between pt-3">
            <div class="pt-2 ">
                <a href="{{ route('servicePage', $id) }}" class="more-btn px-4 py-2 text-white rounded">{{ __('global.more') }}</a>
            </div>
            <div class="service-actions">
                <div class="actions">
                    <div class="action"><img src="{{ url('images/icons/eye.svg') }}" class="" alt=""></div>
                    <div class="action"><img src="{{ url('images/icons/dislike.svg') }}" class="" alt=""></div>
                    <div class="action"><img src="{{ url('images/icons/like.svg') }}" alt=""></div>
                    <div class="action"><img src="{{ url('images/icons/share.svg') }}" alt=""></div>
                </div>
                <div class="actions">
                    <div class="action"><small class=" ">133</small></div>
                    <div class="action"><small class=" ">-</small></div>
                    <div class="action"><small class=" ">-</small></div>
                    <div class="action"><small class=" ">-</small></div>
                </div>
            </div>
        </div>
    </div>
</div>
