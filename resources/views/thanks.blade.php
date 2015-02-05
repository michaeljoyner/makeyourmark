@extends('base')

@section('title')
<title>Thanks | Make Your Mark</title>
@stop

@section('content')
    @include('partials.logoheader')
    <div id="thank-banner">
        @if(Session::has('thanks_note'))
            <p>{{ Session::get('thanks_note') }}</p>
        @else
            <p>Thank you very much. We will get back to you as soon as possible.</p>
        @endif
        <div class="start-prompt"><a href="/">Back to Home</a></div>
    </div>
    @include('partials.footer')
@stop