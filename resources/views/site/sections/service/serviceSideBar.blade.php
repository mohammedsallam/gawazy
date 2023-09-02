<img class="profile-img" src="{{ url('images/defaults/profile.jpg') }}">
<div>
    <h4 class="vendor-name pt-2">{{ __('vendor.vendorName') }}</h4>
</div>
<div>
    <h4 class="service-name">{{ __('service.serviceName') }}</h4>
</div>
<div>
    <h6 class="vendor-info">{{ __('global.city') }}</h6>
</div>
<div>
    <p class="vendor-info">{{ __('global.date') }}</p>
</div>
<div>
    <img src="{{ url('images/icons/like.svg') }}">
    <img src="{{ url('images/icons/share.svg') }}">
</div>
<div class="price-details">
    <span class="price-rang fs-4">{{ __('global.from') }}</span>
    <span class="price-bg mx-1"> 2000 </span>
    <span class="price-rang fs-4">{{ __('global.to') }}</span>
    <span class="price-bg"> 4000 </span>
</div>
<div>
    <h6 class="tag text-center">{{ __('service.myServices') }}</h6>
</div>
<div>
    <p class="my-services">{{ __('service.service') }}</p>
    <p class="my-services">{{ __('service.service') }}</p>
</div>
<div>
    <button class="tag add-to-favorite">{{ __('actions.addToFavorites') }}</button>
</div>
<div>
    <button class="tag call-btns"><img class="call-i" src="{{ url('images/icons/phone.png') }}">
    </button>
    <button class="tag call-btns"><img class="call-i" src="{{ url('images/icons/whatsapp.png') }}">
    </button>
    <button class="tag call-btns"><img class="call-i" src="{{ url('images/icons/chat.png') }}">
    </button>
</div>
