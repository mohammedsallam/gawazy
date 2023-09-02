<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row col-lg-10 m-auto pt-5">
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf

                    <div class="w-100 text-center">
                        <label class="pb-2">
                            <span class="btn gawazy-font-primary fs-3 px-3 py-1 w-auto close-btn"> + </span>
                            <input type="file" name="profileImage" id="profileImage" class="btn">
                        </label>
                        <h4>{{ __('actions.addLatestWork') }}</h4>
                    <hr>
                    </div>

                </form>

                <div class="row">
                    @php($notifications = [1,2,3,4,5,6,7,8])
                    @for($i = 0; $i < count($notifications); $i++)
                        <div class="col-xl-3 col-md-4 col-sm-6 pt-3">
                            @include('site.widgets.dashboard.latestWork')
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
