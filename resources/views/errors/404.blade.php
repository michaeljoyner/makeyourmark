@extends('base')

@section('head')
    <title>Oh Dear. It's a 404</title>
@stop

@section('content')
    @include('partials.logoheader')
    <div id="thank-banner">
        <p>The page you are looking for just doesn't seem to be here anymore. How about trying one of these old faithfuls?</p>
        <div class="start-prompt"><a href="/">HOME</a><a href="/getstarted">GET STARTED</a></div>
    </div>
    @include('partials.footer')
@stop