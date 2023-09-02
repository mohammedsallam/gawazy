<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading pt-5 px-1">
                        <h4>{{ __('actions.addNewOffer') }}</h4>
                        <div class="seperator"></div>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data" class="py-5">
                        @csrf
                        <div class="d-flex py-2">
                            <div class="col-4 col-lg-2">
                                <label for="offerName">{{ __('offer.offerName') }}</label>
                            </div>
                            <div class="col-8 col-lg-6">
                                <input type="text" id="offerName" name="offerName" class="form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>
                        <div class="d-flex pt-3">
                            <div class="col-4 pt-2">
                                <input class="mx-2" type="radio" id="typeOfOffer" name="typeOfOffer" value="mainService"> {{ __('service.mainService') }}
                                <input class="mx-2" type="radio" id="typeOfOffer" name="typeOfOffer" value="secondaryService"> {{ __('service.secondaryServices') }}
                            </div>
                            <div class="col-4">
                                <select id="cities" name="cities" class="form-control bg-white focus-ring focus-ring-light border rounded" >
                                    <option selected>
                                        {{ __('service.selectSecondaryService') }}
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="d-flex pt-3">
                            <div class="col-4 col-lg-2">
                                <label for="attribute">{{ __('global.attribute') }}</label>
                            </div>
                            <div class="col-8 col-lg-6">
                                <input type="text" id="attribute" name="attribute" class="form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>

                        <div class="d-flex pt-3">
                            <div class="col-4 col-lg-2">
                                <label for="offerTimeFrom">{{ __('global.startFrom') }}</label>
                            </div>
                            <div class="col-3 col-lg-2 px-2">
                                <input type="date" id="startDate" name="startDate" class="form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                            <p class="pt-2">{{ __('global.to') }}</p>
                            <div class="col-3 col-lg-2 px-2">
                                <input type="date" id="endDate" name="endDate" class="form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>

                        <div class="d-flex pt-3">
                            <div class="col-4 col-lg-2">
                                <label for="location">
                                    {{ __('forms.location') }}
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 px-2">
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

                        <div class="pt-3">
                            <label class="btn gawazy-font-gray fs-5">
                                <span class="btn gawazy-primary gawazy-font-gray py-2 w-auto"> {{ __('global.mainImage') }}</span>
                                <input type="file" name="galleryImages" id="galleryImages" class="btn">
                            </label>
                            <p class="px-3" style="font-size:10px;">{{ __('global.preferredSize') }} 739 × 1920</p>
                        </div>

                        <div class="pt-3">
                            <label class="btn gawazy-font-gray fs-5">
                                <span class="btn gawazy-primary gawazy-font-gray py-2 w-auto"> {{ __('actions.addGallery') }}</span>
                                <input type="file" name="galleryImages" id="galleryImages" class="btn">
                            </label>
                            <p class="px-3" style="font-size:10px;">{{ __('global.preferredSize') }} 739 × 1920</p>
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

                        <hr class="col-lg-4 mb-4">

                        <div class="d-flex my-2">
                            <div class="pt-2 col-4 col-lg-2">
                                {{ __('forms.offerPrice') }}
                            </div>
                            <div class="col-6 col-lg-2">
                                <input type="text" id="offerPrice" name="offerPrice" class="mx-2 form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>

                        <div class="d-flex my-2">
                            <div class="pt-2 col-4 col-lg-2">
                                {{ __('global.insteadOf') }}
                            </div>
                            <div class="col-6 col-lg-2">
                                <input type="text" id="mainPrice" name="mainPrice" class="mx-2 form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>

                        <div class="d-flex my-2">
                            <div class="pt-2 col-4 col-lg-2">
                                {{ __('global.dis') }}
                            </div>
                            <div class="col-6 col-lg-2">
                                <input type="text" id="mainPrice" name="mainPrice" class="mx-2 form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>

                        <div class="row">
                            <div class="d-flex m-5">
                                <form action="">
                                    @csrf
                                    <button type="submit" class="btn gawazy-font-gray gawazy-secondary px-3 py-2 mx-1 w-auto">{{ __('actions.saveInDraft') }}</button>
                                </form>
                                <button type="submit" class="btn gawazy-font-gray gawazy-primary px-3 py-2 mx-1 w-auto">{{ __('actions.post') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
