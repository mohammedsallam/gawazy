@extends('layouts.app')

@section('body')

    <body class="gawazy-bg">

    <div id="overlay" onclick="off()"></div>

    @include('site.sections.main.nav')

    <main class="pt-4">
        @yield('content')
    </main>

    </body>

@endsection
