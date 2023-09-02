<div class="row gawazy-bg pt-3 m-3">

    <div class="d-flex justify-content-around">
        <div class="col-2 col-xxl-1 text-center">
            <img class="rounded-circle m-auto" style="width: 50px; height: 50px" src="{{ url('images/defaults/profile.jpg') }}">
            <p class="gawazy-font-primary" style="font-size: 11px">{{ __('user.userName') }}</p>
        </div>
        <div class="col-6 col-md-7 col-lg-8 row">
            <p class="text-black-50 comment-txt">
                {{ __('global.comments') }}
            </p>
        </div>
        <div class="col-4 col-md-3 col-lg-2">
            <div class="d-flex">
                <a href=""><div class="action px-3 py-1 mx-2 rounded-3 gawazy-secondary"><img src="{{ url('images/icons/like-w.png') }}" class="like-btn" alt=""></div></a>
                <a href=""><div class="action px-3 py-1 mx-2 rounded-3 gawazy-secondary"><img src="{{ url('images/icons/dislike-w.png') }}" class="like-btn"></div></a>
            </div>
            <div class="d-flex">
                <div class="py-1 text-center like-txt"><p>انصح به</p></div>
                <div class="py-1 text-center"><p>لا أنصح به</p></div>
            </div>
        </div>
    </div>

</div>
