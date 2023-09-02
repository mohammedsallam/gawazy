<div class="w-100 content">
    <div class="section search wow fadeInUp">
        <form method="get" class="av-valid">
            @csrf
            <div class="container search-container">
                <div class="col-md-12">
                    <div class="search-box">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-md-9 col-sm-6">
                                        <div class="mb-3">
                                            <input type="text" name="search" placeholder="{{ __('global.search...') }}"
                                                   value="" id="search"
                                                   class="is-untouched is-pristine av-valid form-control bg-white focus-ring focus-ring-light border rounded">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mb-3">
                                            <select name="category_id" id="category_id"
                                                    class="form-control bg-white focus-ring focus-ring-light is-untouched is-pristine av-valid">
                                                <option value="">{{ __('category.allCategories') }}</option>
                                                <optgroup class="py-2" label="{{ __('global.group') }}">
                                                    <option value="">{{ __('global.item') }}</option>
                                                    <option value="">{{ __('global.item') }}</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <button id="gawazy-btn" class="btn rounded w-100" type="submit">
                                    {{ __('global.search') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
