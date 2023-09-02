@extends('layouts.app')

@section('body')

    <body class="gawazy-bg-white">

    <div id="overlay" onclick="off()"></div>
    @include('site.sections.main.nav')

    <main class="py-4">
        @yield('content')
    </main>

    @include('site.sections.main.footer')

    </body>

@endsection
