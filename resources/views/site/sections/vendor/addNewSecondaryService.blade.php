<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading pt-5 px-1">
                        <h4>{{ __('service.secondaryServices') }}</h4>
                        <div class="seperator"></div>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data" class="py-5">
                        @csrf
                        <div class="d-flex py-2">
                            <div class="col-4 col-lg-2">
                                <label for="serviceName">{{ __('service.serviceName') }}</label>
                            </div>
                            <div class="col-8 col-lg-6">
                                <input type="text" id="serviceName" name="serviceName" class="form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-4 col-lg-2">
                                <label for="userName">
                                    {{ __('forms.location') }}
                                </label>
                            </div>
                            <div class="col-4 col-lg-3">
                                <select id="cities" name="cities" class="form-control bg-white focus-ring focus-ring-light border rounded" >
                                    <option selected>
                                        {{ __('global.allCities') }}
                                    </option>
                                </select>
                            </div>
                            <div class="col-4 col-lg-3 px-2">
                                <select id="towns" name="towns" class="form-control bg-white focus-ring focus-ring-light border rounded" >
                                    <option selected>
                                        {{ __('global.allTowns') }}
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="pt-3">
                            <div class="col-2"><label for="bDate">{{ __('forms.description') }}</label></div>
                            <div class="pt-2 col-lg-8">
                                <textarea class="form-control bg-white focus-ring focus-ring-light border rounded" style="min-height: 200px">
                                </textarea>
                            </div>
                        </div>

                        <div class="heading pt-5 px-1">
                            <h4>{{ __('global.gallery') }}</h4>
                            <div class="seperator"></div>
                        </div>

                        <div class="pt-3">
                            <label class="btn gawazy-font-gray fs-5">
                                <span class="btn gawazy-primary gawazy-font-gray py-2 w-auto"> {{ __('actions.addGallery') }}</span>
                                <input type="file" name="galleryImages" id="galleryImages" class="btn">
                            </label>
                            <p class="px-1" style="font-size:12px;">{{ __('global.preferredSize') }} 739 × 1920</p>
                        </div>

                        <div class="d-flex">
                            <div class="col-3 col-lg-2 py-2 px-1">
                                <label for="videoLink">{{ __('forms.videoLink') }}</label>
                            </div>
                            <div class="col-6 col-lg-5 py-2 px-1">
                                <input type="text" id="videoLink" name="videoLink" class="form-control bg-white focus-ring focus-ring-light text-start border rounded">
                            </div>
                            <div class="col-3 col-lg-1 py-2 px-1">
                                <select id="cities" name="cities" class="form-control bg-white focus-ring focus-ring-light border rounded" >
                                    <option selected>
                                        {{ __('global.same') }}
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="pt-4">
                            <p>{{ __('global.topBar') }}</p>
                            <div class="d-flex">
                                <input class="mx-2" type="radio" id="topBar" name="topBar" value="image"> {{ __('global.image') }}
                                <input class="mx-2" type="radio" id="topBar" name="topBar" value="gallery"> {{ __('global.gallery') }}
                            </div>
                            <hr class="col-lg-4 mt-5 mb-4">
                        </div>

                        <div class="d-flex my-2">
                            <input class="ms-2" type="radio" id="servicePrice" name="servicePrice" value="totalPrice">
                            <div class="pt-2 px-2 col-4 col-lg-2">
                                {{ __('forms.servicePrice') }}
                            </div>
                            <div class="col-6 col-lg-2">
                                <input type="text" id="totalPrice" name="totalPrice" class="mx-2 form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>
                        <div class="d-flex my-2">
                            <input class="ms-2" type="radio" id="startFrom" name="servicePrice" value="startFrom">
                            <div class="pt-2 px-2 col-4 col-lg-2">
                                {{ __('global.startFrom') }}
                            </div>
                            <div class="col-6 col-lg-2">
                                <input type="text" id="startFrom" name="startFrom" class="mx-2 form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>
                        <div class="d-flex my-2">
                            <input class="ms-2" type="radio" id="startFromTo" name="servicePrice" value="startFromTo">
                            <div class="pt-2 px-2 col-4 col-lg-2">
                                {{ __('global.startFrom') }}
                            </div>
                            <div class="col-3 col-lg-1 px-2">
                                <input type="text" id="startFromTo" name="startFromTo" class="form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                            <p class="pt-2">{{ __('global.to') }}</p>
                            <div class="col-3 col-lg-1 px-2">
                                <input type="text" id="startFromTo" name="startFromTo" class="form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>

                        <div class="row">
                            <div class="d-flex m-5">
                                <form action="">
                                    @csrf
                                    <button type="submit" class="btn gawazy-font-gray gawazy-secondary px-3 py-2 mx-1 w-auto">{{ __('actions.saveInDraft') }}</button>
                                </form>
                                <button type="submit" class="btn gawazy-font-gray gawazy-primary px-3 py-2 mx-1 w-auto">{{ __('actions.post') }}</button>
                                <button class="btn gawazy-font-gray gawazy-primary px-3 py-2 mx-lg-5 w-auto">{{ __('actions.addSecondaryService') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
