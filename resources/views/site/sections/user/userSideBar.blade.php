<div class="pt-5 pt-md-0">
    <img class="dashboard-profile-img " src="{{ url('images/defaults/profile.jpg') }}">
    <h4 class="pt-2">{{ __('user.userName') }}</h4>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <label class="btn gawazy-font-gray fs-5">
            <img id="dashboard-edit" src="{{ url('images/icons/edit.png') }}"> {{ __('actions.edit') }}
            <input type="file" name="profileImage" id="profileImage" class="btn">
        </label>
    </form>
</div>
<div>
    <div class="pt-4">
        <div class="sidebar-btn">
            <a href="{{ route('userFavorites') }}" onclick="changeContent()" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/love.png') }}">
                {{ __('global.myFavorites') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn">
            <a href="{{ route('userNotifications') }}" onclick="changeContent()" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/notifications.png') }}">
                {{ __('global.notifications') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn">
            <a href="{{ route('editUserProfile') }}" onclick="changeContent()" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/settings.png') }}">
                {{ __('global.settings') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn">
            <a href="{{ route('UserMessages') }}" onclick="changeContent()" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/chat.png') }}">
                {{ __('global.messages') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn">
            <a href="{{ route('userSupport') }}" onclick="changeContent()" class="btn gawazy-font-gray fs-4">
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

