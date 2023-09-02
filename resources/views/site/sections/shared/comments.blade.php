<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading pt-5 px-1">
                        <h4>{{ __('global.comments') }}</h4>
                        <div class="seperator"></div>
                    </div>

                    @php($comments = [1,2,3,4,5])
                    @for($i = 0; $i <= count($comments); $i++)
                        @include('site.widgets.shared.comment')
                    @endfor

                    <form action="" method="">
                        <div class="d-flex justify-content-evenly">
                            <div class="col-9 col-md-10 mx-3">
                                <textarea class="form-control bg-white focus-ring focus-ring-light border rounded" style="height: 45px; resize: none"></textarea>
                            </div>
                            <button type="submit" class="btn gawazy-primary gawazy-font-gray">{{ __('actions.send') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
