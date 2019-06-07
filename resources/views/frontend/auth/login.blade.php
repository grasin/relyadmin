

@extends('frontend.layouts.newapp')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')
<br>
<br>
<br>
    <div class="all-wrapper menu-side with-pattern">
        <div class="auth-box-w">
            <div class="logo-w"><a href="index.html"><img style="width:200px;" alt="" src="img/relynext_logo_light.png"></a></div>
            <h4 class="auth-header">Login Form</h4>
             {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
                <div class="form-group">
                {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

                {{ html()->email('email')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.frontend.email'))
                    ->attribute('maxlength', 191)
                    ->required() }}
                    <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                </div>
                <div class="form-group">
                {{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}

                {{ html()->password('password')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.frontend.password'))
                    ->required() }}
                    <div class="pre-icon os-icon os-icon-fingerprint"></div>
                </div>
                <div class="buttons-w">
                    {{ form_submit(__('labels.frontend.auth.login_button')) }}
                    <div class="form-check-inline">
                        {{ html()->label(html()->checkbox('remember', true, 1) . ' ' . __('labels.frontend.auth.remember_me'))->for('remember') }}
                    </div>
                </div>
            {{ html()->form()->close() }}
        </div>
    </div>
<br>
<br>

@endsection