@php($latestWork = [1,2,3,4,5])
<div class="d-flex">
    @for($i = 0; $i <= count($latestWork); $i++)
        <div class="px-2">
            @include('site.widgets.dashboard.latestWork')
        </div>
    @endfor
</div>
