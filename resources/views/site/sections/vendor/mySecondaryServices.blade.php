<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row pt-5">
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="w-100 text-center">
                        <img src="{{ url('images/icons/camera.png') }}" style="width: 50px">
                        <h5>{{ __('service.mainServiceName') }}</h5>
                        <div>
                            <label class="btn gawazy-font-secondary fs-5">
                                <img id="dashboard-edit" src="{{ url('images/icons/edit_secondary.png') }}"> {{ __('actions.edit') }}
                                <input type="file" name="profileImage" id="profileImage" class="btn">
                            </label>
                        </div>
                    </div>
                </form>

                <div class="">
                    <div class="d-flex py-5 px-1">
                        <div class="col-10 heading">
                            <h4>{{ __('service.secondaryServices') }}</h4>
                            <div class="seperator"></div>
                        </div>
                    </div>

                    <div class="d-flex text-center">
                        <input type="checkbox">
                        <div class="col-2"><h5>{{ __('service.serviceName') }}</h5></div>
                        <div class="col-2"><h5>{{ __('global.status') }}</h5></div>
                        <div class="col-2"><h5>{{ __('global.price') }}</h5></div>
                        <div class="col-2"><h5>{{ __('forms.location') }}</h5></div>
                        <div class="col-1"><img src="{{ url('images/icons/eye.svg') }}"></div>
                        <div class="col-1"><img src="{{ url('images/icons/dislike.svg') }}"></div>
                        <div class="col-1"><img src="{{ url('images/icons/like.svg') }}"></div>
                    </div>
                    <hr>

                    @php($notifications = [1,2,3])
                    @for($i = 0; $i < count($notifications); $i++)
                        @include('site.widgets.dashboard.mySecondaryService')
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>

