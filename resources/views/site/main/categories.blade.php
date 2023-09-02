@extends('layouts.site')

@section('title', 'Categories')

@section('content')

    <div>
        <div class="section services wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading pt-5 px-1">
                            <h4>{{ __('category.categories') }}</h4>
                            <div class="seperator"></div>
                        </div>
                    </div>

                    <div class="row my-3 m-auto">

                        @php($services = [1,2,3,4,5,6,7,8,9,10])
                        @for($i = 0; $i <= count($services); $i++)

                            @include('site.widgets.shared.category')

                        @endfor

                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
