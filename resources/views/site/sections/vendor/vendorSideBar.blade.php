<div class="pt-5 pt-md-0">
    <img class="dashboard-profile-img " src="{{ url('images/defaults/profile.jpg') }}">
    <h4 class="pt-2">{{ __('user.userName') }}</h4>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <p class="fs-5">{{ __('service.mainServiceName') }}</p>
        <label class="btn gawazy-font-gray fs-5" style="margin-top: -20px">
            <img id="dashboard-edit" src="{{ url('images/icons/edit.png') }}"> {{ __('actions.edit') }}
            <input type="file" name="profileImage" id="profileImage" class="btn">
        </label>
    </form>
</div>
<div>
    <div class="pt-4">
        <div class="sidebar-btn">
            <a href="{{ route('vendorFavorites') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/love.png') }}">
                {{ __('global.myFavorites') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn">
            <a href="{{ route('main_service') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/services.png') }}">
                {{ __('service.services') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn">
            <a href="{{ route('my_secondary_services') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/secondary_service.png') }}">
                {{ __('service.secondaryServices') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn">
            <a href="{{ route('add_secondary_service') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/add.png') }}">
                {{ __('actions.addSecondaryService') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn">
            <a href="{{ route('draft') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/draft.png') }}">
                {{ __('global.draft') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn">
            <a href="{{ route('latest_work') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/latestWork.png') }}">
                {{ __('global.latestWork') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn">
            <a href="{{ route('my_offers') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/offers.png') }}">
                {{ __('offer.myOffers') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn">
            <a href="{{ route('add_new_offer') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/add.png') }}">
                {{ __('actions.addNewOffer') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>


        <div class="sidebar-btn">
            <a href="{{ route('vendorNotifications') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/notifications.png') }}">
                {{ __('global.notifications') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn">
            <a href="{{ route('editVendorProfile') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/settings.png') }}">
                {{ __('global.settings') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
       <div class="sidebar-btn">
            <a href="{{ route('vendorMessages') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/chat.png') }}">
                {{ __('global.messages') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn">
            <a href="{{ route('vendorSupport') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/support.png') }}">
                {{ __('global.support') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn">
            <a href="{{ route('logout') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/logout.png') }}">
                {{ __('actions.logout') }}
            </a>
        </div>
    </div>
</div>
