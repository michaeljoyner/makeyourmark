<div class=""contactform-outer-box>
    <p id="show-cf-btn">Click to send us a message</p>
    <p id="cf-note"></p>
    <p id="cf-errors" class="text-danger"></p>
    <div id="contactform-inner-box" class="contactform-inner-box">
    <form id="contact-form">
        <div class="row">
            <div class="col-md-5">
                <!-- text input for sender_name -->
                <div class="form-group">
                    {!! Form::label('sender_name', 'Your name') !!}
                    {!! $errors->first('sender_name', '<span class="text-danger">:message</span>') !!}
                    {!! Form::text('sender_name', Input::old('sender_name'), ['class' => 'form-control', 'id' => 'sender-name']) !!}
                </div>
            </div>
            <div class="col-md-offset-2 col-md-5">
                <!-- form input for sender_email -->
                <div class="form-group">
                    {!! Form::label('sender_email', 'Your Email address') !!}
                    {!! $errors->first('sender_email', '<span class="text-danger">:message</span>') !!}
                    {!! Form::email('sender_email', Input::old('sender_email'), ['class' => 'form-control', 'id' => 'sender-email']) !!}
                </div>
            </div>
        </div>
        <!-- textarea for sender_message -->
        <div class="form-group">
            {!! Form::label('sender_message', 'Whats on your mind?') !!}
            {!! $errors->first('sender_message', '<span class="text-danger">:message</span>') !!}
            {!! Form::textarea('sender_message', Input::old('sender_message'), ['class' => 'form-control', 'id' => 'sender-message']) !!}
        </div>
        <div class="row">
            <div id="cf-send-btn" class="col-md-offset-5 col-md-2"><i id="fa-send-icon" class="fa fa-send"></i> Send</div>
        </div>
    </form>
    <div class="gratitude-banner" id="gratitude-banner">
        <p>Thanks <span id="name-to-thank"></span>. We'll be in touch.</p>
    </div>
    </div>
</div>