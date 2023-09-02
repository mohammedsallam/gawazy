<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading pt-5 px-1">
                        <h4>{{ __('global.profile') }}</h4>
                        <div class="seperator"></div>
                    </div>
                    <form action="" method="post">
                        <div class="d-md-flex justify-content-start py-5">
                            <div class="col-md-8">
                                @csrf
                                <div class="d-flex justify-content-start">
                                    <div class="col-4"><label for="userName">{{ __('user.userName') }}</label></div>
                                    <div class="col-lg-5 col-6">
                                            <input type="text" id="userName" name="userName" class="form-control bg-white focus-ring focus-ring-light border rounded" >
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start pt-3">
                                    <div class="col-4"><label for="email">{{ __('forms.email') }}</label></div>
                                    <div class="col-lg-5 col-6">
                                        <input type="email" id="email" name="email" class="form-control bg-white focus-ring focus-ring-light border rounded">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start pt-3">
                                    <div class="col-4"><label for="phone">{{ __('forms.phone') }}</label></div>
                                    <div class="col-lg-5 col-6">
                                        <input type="text" maxlength="11" id="phone" name="phone" class="form-control bg-white focus-ring focus-ring-light border rounded">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start pt-3">
                                    <div class="col-4"><label for="gender">{{ __('forms.gender') }}</label></div>
                                    <div class="col-lg-5 col-6">
                                        <input class="mx-2" type="radio" id="gender" name="gender" value="male"> {{ __('forms.male') }}
                                        <input class="mx-2" type="radio" id="gender" name="gender" value="female"> {{ __('forms.female') }}
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start pt-3">
                                    <div class="col-4"><label for="bDate">{{ __('forms.birthDate') }}</label></div>
                                    <div class="col-lg-5 col-6 d-flex">
                                        <input type="number" min="1" max="31" maxlength="2" id="day" name="day" placeholder="{{ __('global.day') }}" class="form-control bg-white focus-ring focus-ring-light border ms-2 rounded">
                                        <input type="number" min="1" max="12" maxlength="2" id="month" name="month" placeholder="{{ __('global.month') }}" class="form-control bg-white focus-ring focus-ring-light border ms-2 rounded">
                                        <input type="number" min="1900" max="2023"  maxlength="4" id="year" name="year" placeholder="{{ __('global.year') }}" class="form-control bg-white focus-ring focus-ring-light border ms-2 rounded">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" id="gawazy-btn" class="btn mt-3 w-auto px-3">{{ __('actions.updateInfo') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="heading pt-5 px-1">
                        <h4>{{ __('global.settings') }}</h4>
                        <div class="seperator"></div>
                    </div>
                    <div class="d-md-flex justify-content-start py-5">
                        <div class="col-md-8">
                            <form action="">
                                @csrf
                                <div class="d-flex justify-content-start">
                                    <div class="col-4"><label for="oldPass">{{ __('forms.oldPass') }}</label></div>
                                    <div class="col-lg-5 col-6">
                                        <input type="password" id="oldPass" name="oldPass" class="form-control bg-white focus-ring focus-ring-light border rounded" >
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start pt-3">
                                    <div class="col-4"><label for="email">{{ __('forms.newPass') }}</label></div>
                                    <div class="col-lg-5 col-6">
                                        <input type="password" id="newPass" name="newPass" class="form-control bg-white focus-ring focus-ring-light border rounded">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start pt-3">
                                    <div class="col-4"><label for="email">{{ __('forms.confirmPass') }}</label></div>
                                    <div class="col-lg-5 col-6">
                                        <input type="password" id="newPass" name="newPass" class="form-control bg-white focus-ring focus-ring-light border rounded">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" id="gawazy-btn" class="btn mt-3 w-auto px-3">{{ __('actions.updatePass') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="d-flex m-5">
                    <div class=" d-flex col-6">
                        <button class="btn gawazy-font-primary px-3 py-2 mx-1 mx-md-3 w-auto close-btn">{{ __('actions.close') }}</button>
                        <button class="btn gawazy-font-primary px-3 py-2 mx-1 mx-md-3 w-auto close-btn">{{ __('actions.delete') }}</button>
                    </div>
                    <div class="col-6">
                        <a href="" class="btn gawazy-primary px-5 py-2 gawazy-font-gray fs-5">{{ __('actions.save') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
