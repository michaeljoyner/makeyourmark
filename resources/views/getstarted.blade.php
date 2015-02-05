@extends('base')

@section('title')
  <title>Get Started | Make Your Mark</title>
@stop

@section('head')
  <meta property="CSRF-token" content="{{ Session::token() }}"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <style>
    body {
      font-size: 16px;
    }
  </style>
@stop

@section('content')
    <script type="text/template" id="progressTemplate">
        <p class="fum_name_title">File: <span class="fum_filename"></span></p>
        <div class="fum_imagebox">
            <img class="fum_fileimg" src="images/document-icon.png" alt="" width="100px" height="100px">
        </div>
        <div class="fum_infobox">
            <p>Status: <span class="fum_status">uploading</span></p>
            <div class="fum_progressbar_outer"><div class="fum_progressbar_inner"></div></div>
            <div class="fum_cancelbtn btn btn-info btn-xs">cancel</div>
        </div>
    </script>
    <script type="text/template" id="errorTemplate">
        <p class="fum_message"></p>
        <span class="fum_close-btn"><span class="glyphicon glyphicon-remove"></span></span>
    </script>
    @include('partials.logoheader')
    <div class="get-started-intro about-section">
      <h2>LET'S GET STARTED</h2>
      <p>Please select the services you require and the fill in the accompanying briefs. This is your chance to get your vision across to us so we can create something with the personality and professionalism you deserve. Don't hold back, let your ideas run wild and be sure to give examples where possible.</p>
    </div>
  {!! Form::open([ 'route' => 'postbriefs','id' => 'briefform', 'files' => 'true']) !!}
    <div class="control-panel">
      <p>
        <input class="form-toggle" id="logocheckbox" type="checkbox" value="0" name="logobriefchecked" @if(Input::old('logobriefchecked') == '0') checked @endif />
        <label for="logocheckbox"> I want a logo</label>
      </p>
      <p>
        <input class="form-toggle" id="brandingcheckbox" type="checkbox" value="2" name="brandbriefchecked" @if(Input::old('brandbriefchecked') == '2') checked @endif/>
        <label for="brandingcheckbox"> I want some branding</label>
      </p>
      <p>
        <input class="form-toggle" id="webcheckbox" type="checkbox" value="1" name="webbriefchecked" @if(Input::old('webbriefchecked') == '1') checked @endif/>
        <label for="webcheckbox"> I want a website</label>
       </p>
    </div>
    <div id="general">
      @include('partials.forms.generalbrief')
    </div>
    <div id="logo">
      @include('partials.forms.logobrief')
    </div>
    <div id="branding">
      @include('partials.forms.brandingbrief')
    </div>
    <div id="web">
      @include('partials.forms.webbrief')
    </div>
    <!-- submit form -->
    <div id="submit-field" class="form-group">
        {!! Form::submit('Submit', ['class' => 'form-control btn btn-primary']) !!}
    </div>
  {!! Form::close() !!}
  <div class="get-started-outro service-section">
    <p>Once we've received your brief we will have a better idea of what you require and be able to give you a quote.</p>
    <p>If you'd prefer to download a printable PDF brief to fill in you can download it <a href="{{ asset('docs/briefs.pdf') }}" target="_blank" download>here</a>.</p>
  </div>
  @include('partials.footer')
@stop

@section('bodyscripts')
  <script src="{{ asset('js/uploadi.min.js') }}"></script>
  <script src="{{ asset('js/getstarted.min.js') }}"></script>
  <script>
    $(function() {
      formManager.init();
      uploadManager.init();
    });

  </script>
@stop
