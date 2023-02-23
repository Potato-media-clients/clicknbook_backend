@include('frontend.components.header')
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="https://use.typekit.net/hoy3lrg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>

<style class="cp-pen-styles">

#frame {
  width: 100%;
  min-width: 360px;
  max-width: 1000px;
  height: 80vh;
  min-height: 300px;
  max-height: 720px;
  background: #E6EAEA;
    
}
@media screen and (max-width: 360px) {
  #frame {
    width: 100%;
    height: 75vh;
  }
}
#frame #sidepanel {
  float: left;
  min-width: 280px;
  max-width: 340px;
  width: 40%;
  height: 100%;
  background: #2c3e50;
  color: #f5f5f5;
  overflow: hidden;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel {
    width: 58px;
    min-width: 58px;
  }
}
#frame #sidepanel #profile {
  width: 80%;
  margin: 25px auto;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile {
    width: 100%;
    margin: 0 auto;
    padding: 5px 0 0 0;
    background: #32465a;
  }
}
#frame #sidepanel #profile.expanded .wrap {
  height: 210px;
  line-height: initial;
}
#frame #sidepanel #profile.expanded .wrap p {
  margin-top: 20px;
}
#frame #sidepanel #profile.expanded .wrap i.expand-button {
  -moz-transform: scaleY(-1);
  -o-transform: scaleY(-1);
  -webkit-transform: scaleY(-1);
  transform: scaleY(-1);
  filter: FlipH;
  -ms-filter: "FlipH";
}
#frame #sidepanel #profile .wrap {
  height: 60px;
  line-height: 60px;
  overflow: hidden;
  -moz-transition: 0.3s height ease;
  -o-transition: 0.3s height ease;
  -webkit-transition: 0.3s height ease;
  transition: 0.3s height ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap {
    height: 55px;
  }
}
#frame #sidepanel #profile .wrap img {
  width: 50px;
  border-radius: 50%;
  padding: 3px;
  border: 2px solid #e74c3c;
  height: auto;
  float: left;
  cursor: pointer;
  -moz-transition: 0.3s border ease;
  -o-transition: 0.3s border ease;
  -webkit-transition: 0.3s border ease;
  transition: 0.3s border ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap img {
    width: 40px;
    margin-left: 4px;
  }
}
#frame #sidepanel #profile .wrap img.online {
  border: 2px solid #2ecc71;
}
#frame #sidepanel #profile .wrap img.away {
  border: 2px solid #f1c40f;
}
#frame #sidepanel #profile .wrap img.busy {
  border: 2px solid #e74c3c;
}
#frame #sidepanel #profile .wrap img.offline {
  border: 2px solid #95a5a6;
}
#frame #sidepanel #profile .wrap p {
  float: left;
  margin-left: 15px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap p {
    display: none;
  }
}
#frame #sidepanel #profile .wrap i.expand-button {
  float: right;
  margin-top: 23px;
  font-size: 0.8em;
  cursor: pointer;
  color: #435f7a;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap i.expand-button {
    display: none;
  }
}
#frame #sidepanel #profile .wrap #status-options {
  position: absolute;
  opacity: 0;
  visibility: hidden;
  width: 150px;
  margin: 70px 0 0 0;
  border-radius: 6px;
  z-index: 99;
  line-height: initial;
  background: #435f7a;
  -moz-transition: 0.3s all ease;
  -o-transition: 0.3s all ease;
  -webkit-transition: 0.3s all ease;
  transition: 0.3s all ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options {
    width: 58px;
    margin-top: 57px;
  }
}
#frame #sidepanel #profile .wrap #status-options.active {
  opacity: 1;
  visibility: visible;
  margin: 75px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options.active {
    margin-top: 62px;
  }
}
#frame #sidepanel #profile .wrap #status-options:before {
  content: '';
  position: absolute;
  width: 0;
  height: 0;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 8px solid #435f7a;
  margin: -8px 0 0 24px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options:before {
    margin-left: 23px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul {
  overflow: hidden;
  border-radius: 6px;
}
#frame #sidepanel #profile .wrap #status-options ul li {
  padding: 15px 0 30px 18px;
  display: block;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li {
    padding: 15px 0 35px 22px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li:hover {
  background: #496886;
}
#frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
  position: absolute;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  margin: 5px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
    width: 14px;
    height: 14px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
  content: '';
  position: absolute;
  width: 14px;
  height: 14px;
  margin: -3px 0 0 -3px;
  background: transparent;
  border-radius: 50%;
  z-index: 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
    height: 18px;
    width: 18px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li p {
  padding-left: 12px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li p {
    display: none;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li#status-online span.status-circle {
  background: #2ecc71;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-online.active span.status-circle:before {
  border: 1px solid #2ecc71;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-away span.status-circle {
  background: #f1c40f;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-away.active span.status-circle:before {
  border: 1px solid #f1c40f;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-busy span.status-circle {
  background: #e74c3c;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-busy.active span.status-circle:before {
  border: 1px solid #e74c3c;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-offline span.status-circle {
  background: #95a5a6;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-offline.active span.status-circle:before {
  border: 1px solid #95a5a6;
}
#frame #sidepanel #profile .wrap #expanded {
  padding: 100px 0 0 0;
  display: block;
  line-height: initial !important;
}
#frame #sidepanel #profile .wrap #expanded label {
  float: left;
  clear: both;
  margin: 0 8px 5px 0;
  padding: 5px 0;
}
#frame #sidepanel #profile .wrap #expanded input {
  border: none;
  margin-bottom: 6px;
  background: #32465a;
  border-radius: 3px;
  color: #f5f5f5;
  padding: 7px;
  width: calc(100% - 43px);
}
#frame #sidepanel #profile .wrap #expanded input:focus {
  outline: none;
  background: #435f7a;
}
#frame #sidepanel #search {
  border-top: 1px solid #32465a;
  border-bottom: 1px solid #32465a;
  font-weight: 300;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #search {
    display: none;
  }
}
#frame #sidepanel #search label {
  position: absolute;
  margin: 10px 0 0 20px;
}
#frame #sidepanel #search input {
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
  padding: 10px 0 10px 46px;
  width: calc(100% - 25px);
  border: none;
  background: #32465a;
  color: #f5f5f5;
}
#frame #sidepanel #search input:focus {
  outline: none;
  background: #435f7a;
}
#frame #sidepanel #search input::-webkit-input-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input::-moz-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input:-ms-input-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input:-moz-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #contacts {
  height: calc(100% - 177px);
  overflow-y: scroll;
  overflow-x: hidden;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts {
    height: calc(100% - 149px);
    overflow-y: scroll;
    overflow-x: hidden;
  }
  #frame #sidepanel #contacts::-webkit-scrollbar {
    display: none;
  }
}
#frame #sidepanel #contacts.expanded {
  height: calc(100% - 334px);
}
#frame #sidepanel #contacts::-webkit-scrollbar {
  width: 8px;
  background: #2c3e50;
}
#frame #sidepanel #contacts::-webkit-scrollbar-thumb {
  background-color: #243140;
}
#frame #sidepanel #contacts ul li.contact {
  position: relative;
  padding: 10px 0 15px 0;
  font-size: 0.9em;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact {
    padding: 6px 0 46px 8px;
  }
}
#frame #sidepanel #contacts ul li.contact:hover {
  background: #32465a;
}
#frame #sidepanel #contacts ul li.contact.active {
  background: #32465a;
  border-right: 5px solid #435f7a;
}
#frame #sidepanel #contacts ul li.contact.active span.contact-status {
  border: 2px solid #32465a !important;
}
#frame #sidepanel #contacts ul li.contact .wrap {
  width: 88%;
  margin: 0 auto;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact .wrap {
    width: 100%;
  }
}
#frame #sidepanel #contacts ul li.contact .wrap span {
  position: absolute;
  left: 0;
  margin: -2px 0 0 -2px;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  border: 2px solid #2c3e50;
  background: #95a5a6;
}
#frame #sidepanel #contacts ul li.contact .wrap span.online {
  background: #2ecc71;
}
#frame #sidepanel #contacts ul li.contact .wrap span.away {
  background: #f1c40f;
}
#frame #sidepanel #contacts ul li.contact .wrap span.busy {
  background: #e74c3c;
}
#frame #sidepanel #contacts ul li.contact .wrap img {
  width: 40px;
  border-radius: 50%;
  float: left;
  margin-right: 10px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact .wrap img {
    margin-right: 0px;
  }
}
#frame #sidepanel #contacts ul li.contact .wrap .meta {
  padding: 5px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact .wrap .meta {
    display: none;
  }
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .name {
  font-weight: 600;
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .preview {
  margin: 5px 0 0 0;
  padding: 0 0 1px;
  font-weight: 400;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  -moz-transition: 1s all ease;
  -o-transition: 1s all ease;
  -webkit-transition: 1s all ease;
  transition: 1s all ease;
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .preview span {
  position: initial;
  border-radius: initial;
  background: none;
  border: none;
  padding: 0 2px 0 0;
  margin: 0 0 0 1px;
  opacity: .5;
}
#frame #sidepanel #bottom-bar {
  position: absolute;
  width: 100%;
  bottom: 0;
}
#frame #sidepanel #bottom-bar button {
  float: left;
  border: none;
  width: 50%;
  padding: 10px 0;
  background: #32465a;
  color: #f5f5f5;
  cursor: pointer;
  font-size: 0.85em;
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button {
    float: none;
    width: 100%;
    padding: 15px 0;
  }
}
#frame #sidepanel #bottom-bar button:focus {
  outline: none;
}
#frame #sidepanel #bottom-bar button:nth-child(1) {
  border-right: 1px solid #2c3e50;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button:nth-child(1) {
    border-right: none;
    border-bottom: 1px solid #2c3e50;
  }
}
#frame #sidepanel #bottom-bar button:hover {
  background: #435f7a;
}
#frame #sidepanel #bottom-bar button i {
  margin-right: 3px;
  font-size: 1em;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button i {
    font-size: 1.3em;
  }
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button span {
    display: none;
  }
}
#frame .content {
  float: right;
  width: 100%;
  height: 100%;
  overflow: hidden;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame .content {
    width: calc(100% - 58px);
    min-width: 300px !important;
  }
}
@media screen and (min-width: 900px) {
  #frame .content {
    width: calc(100% - 340px);
  }
}
#frame .content .contact-profile {
  width: 100%;
  height: 60px;
  line-height: 60px;
  background: #f5f5f5;
}
#frame .content .contact-profile img {
  width: 40px;
  border-radius: 50%;
  float: left;
  margin: 9px 12px 0 9px;
}
#frame .content .contact-profile p {
  float: left;
}
#frame .content .contact-profile .social-media {
  float: right;
}
#frame .content .contact-profile .social-media i {
  margin-left: 14px;
  cursor: pointer;
}
#frame .content .contact-profile .social-media i:nth-last-child(1) {
  margin-right: 20px;
}
#frame .content .contact-profile .social-media i:hover {
  color: #435f7a;
}
#frame .content .messages {
  height: auto;
  min-height: calc(100% - 115px);
  max-height: calc(100% - 115px);
  overflow-y: scroll;
  overflow-x: hidden;
}
@media screen and (max-width: 735px) {
  #frame .content .messages {
    max-height: calc(100% - 105px);
  }
}
#frame .content .messages::-webkit-scrollbar {
  width: 8px;
  background: transparent;
}
#frame .content .messages::-webkit-scrollbar-thumb {
  background-color: rgba(0, 0, 0, 0.3);
}
#frame .content .messages ul li {
  display: inline-block;
  clear: both;
  float: left;
  margin: 15px 15px 5px 15px;
  width: calc(100% - 25px);
  font-size: 0.9em;
}
#frame .content .messages ul li:nth-last-child(1) {
  margin-bottom: 20px;
}
#frame .content .messages ul li.sent img {
  margin: 6px 8px 0 0;
}
#frame .content .messages ul li.sent p {
  background: #515151;
  color: #f5f5f5;
}
#frame .content .messages ul li.replies img {
  float: right;
  margin: 6px 0 0 8px;
}
#frame .content .messages ul li.replies p {
  background: #075e54;
  color:#f5f5f5;
  float: right;
}
#frame .content .messages ul li img {
  width: 22px;
  border-radius: 50%;
  float: left;
}
#frame .content .messages ul li p {
  display: inline-block;
  padding: 10px 15px;
  border-radius: 20px;
  max-width: 205px;
  line-height: 130%;
}
@media screen and (min-width: 735px) {
  #frame .content .messages ul li p {
    max-width: 300px;
  }
}
#frame .content .message-input {
  position: absolute;
  bottom: 0;
  width: 100%;
  z-index: 99;
}
#frame .content .message-input .wrap {
  position: relative;
}
#frame .content .message-input .wrap input {
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
  float: left;
  border: none;
  width: calc(100% - 90px);
  padding: 11px 32px 10px 8px;
  font-size: 0.8em;
  color: #32465a;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap input {
    padding: 15px 32px 16px 8px;
  }
}
#frame .content .message-input .wrap input:focus {
  outline: none;
}
#frame .content .message-input .wrap .attachment {
  position: absolute;
  right: 60px;
  z-index: 4;
  margin-top: 10px;
  font-size: 1.1em;
  color: #435f7a;
  opacity: .5;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap .attachment {
    margin-top: 17px;
    right: 65px;
  }
}
#frame .content .message-input .wrap .attachment:hover {
  opacity: 1;
}
#frame .content .message-input .wrap button {
  float: right;
  border: none;
  width: 50px;
  padding: 12px 0;
  background: #32465a;
  color: #f5f5f5;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap button {
    padding: 16px 0;
  }
}
#frame .content .message-input .wrap button:hover {
  background: #435f7a;
}
#frame .content .message-input .wrap button:focus {
  outline: none;
}
</style>


<?php

enqueue_script('scroll-magic-js');


?>

<div class="single-page single-home pb-5">


<div class="container">

@if(!is_user_logged_in())

    <div id="hh-login-modal" class="modal fade modal-no-footer" tabindex="-1" role="dialog"

         aria-hidden="true">

        <div class="modal-dialog modal-sm">

            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title text-uppercase text-dark">{{__('Login')}}</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×

                    </button>

                </div>

                <div class="modal-body">

                    <form id="hh-login-form" class="form form-sm form-action" action="{{ url('auth/login') }}"

                          data-validation-id="form-login"

                          data-reload-time="1500"

                          method="post">

                        @include('common.loading')

                        <div class="form-group mb-3">

                            <label for="email-login-form">{{__('Email address')}}</label>

                            <input class="form-control has-validation" data-validation="required" type="text"

                                   id="email-login-form" name="email" placeholder="{{__('Enter your email')}}">

                        </div>

                        <div class="form-group mb-3">

                            <label for="password-login-form">{{__('Password')}}</label>

                            <input class="form-control has-validation" data-validation="required|min:6:ms"

                                   type="password" id="password-login-form" name="password"

                                   placeholder="{{__('Enter your password')}}">

                        </div>

                        <div class="form-group mb-3">

                            <div class="custom-control custom-checkbox">

                                <input type="checkbox" class="custom-control-input" id="checkbox-signin-login-form"

                                       checked>

                                <label class="custom-control-label"

                                       for="checkbox-signin-login-form">{{__('Remember me')}}</label>

                            </div>

                        </div>

                        <div class="form-group mb-0 text-center">

                            {!! referer_field(false) !!}

                            <button class="btn btn-primary btn-block text-uppercase"

                                    type="submit"> {{__('Log In')}}</button>

                        </div>

                        <div class="form-message"></div>

                        @if(has_social_login())

                            <div class="text-center">

                                <p class="mt-3 text-muted">{{__('Log in with')}}</p>

                                <ul class="social-list list-inline mt-3 mb-0">

                                    @if(social_enable('facebook'))

                                        <li class="list-inline-item">

                                            <a href="{{ FacebookLogin::get_inst()->getLoginUrl() }}"

                                               class="social-list-item border-primary text-primary"><i

                                                    class="mdi mdi-facebook"></i></a>

                                        </li>

                                    @endif

                                    @if(social_enable('google'))

                                        <li class="list-inline-item">

                                            <a href="{{ GoogleLogin::get_inst()->getLoginUrl() }}"

                                               class="social-list-item border-danger text-danger"><i

                                                    class="mdi mdi-google"></i></a>

                                        </li>

                                    @endif

                                </ul>

                            </div>

                        @endif

                        <div class="mt-3 d-sm-flex align-items-center justify-content-between">

                            <p>{{__('Don\'t have an account?')}}

                                <a href="javascript: void(0)" data-toggle="modal" data-target="#hh-register-modal"

                                   class="font-weight-bold">{{__('Sign Up')}}</a>

                            </p>

                            <p>

                                <a href="javascript: void(0)" data-toggle="modal" data-target="#hh-fogot-password-modal"

                                   class="font-weight-bold">{{__('Reset Password')}}</a></p>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div><!-- /.modal -->

    <div id="hh-register-modal" class="modal fade modal-no-footer" tabindex="-1" role="dialog"

         aria-hidden="true">

        <div class="modal-dialog modal-sm">

            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title text-uppercase">{{__('Sign Up')}}</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×

                    </button>

                </div>

                <div class="modal-body">

                    <form id="hh-sign-up-form" action="{{ url('auth/sign-up') }}" method="post" data-reload-time="1500"

                          data-validation-id="form-sign-up"

                          class="form form-action">

                        @include('common.loading')

                        <div class="form-group">

                            <label for="first-name-reg-form">{{__('First Name')}}</label>

                            <input class="form-control" type="text" id="first-name-reg-form" name="first_name"

                                   placeholder="{{__('First Name')}}">

                        </div>

                        <div class="form-group">

                            <label for="last-name-reg-form">{{__('Last Name')}}</label>

                            <input class="form-control" type="text" id="last-name-reg-form" name="last_name"

                                   placeholder="{{__('Last Name')}}">

                        </div>

                        <div class="form-group">

                            <label for="email-address-reg-form">{{__('Email address')}}</label>

                            <input class="form-control has-validation" data-validation="required|email" type="email"

                                   id="email-address-reg-form" name="email" placeholder="{{__('Email')}}">

                        </div>

                        <div class="form-group">

                            <label for="password-reg-form">{{__('Password')}}</label>

                            <input class="form-control has-validation" data-validation="required|min:6:ms"

                                   name="password" type="password" id="password-reg-form"

                                   placeholder="{{__('Password')}}">

                        </div>

                        <div class="form-group">

                            <div class="checkbox checkbox-success">

                                <input type="checkbox" id="reg-term-condition" name="term_condition" value="1">

                                <label for="reg-term-condition">

                                    {!! sprintf(__('I accept %s'), '<a class="c-pink" href="'.get_the_permalink(get_option('term_condition_page'), '', 'page').'" class="text-dark">'. __('Terms and Conditions') .'</a>') !!}

                                </label>

                            </div>

                        </div>

                        <div class="form-group mb-0 text-center">

                            <button class="btn btn-primary btn-block text-uppercase"

                                    type="submit"> {{__('Sign Up')}}</button>

                        </div>

                        <div class="form-message"></div>

                        <div class="mt-3 d-sm-flex align-items-center justify-content-between">

                            <p>{{__('Have an account?')}}

                                <a href="javascript: void(0)" data-toggle="modal" data-target="#hh-login-modal"

                                   class="font-weight-bold">{{__('Log In')}}</a>

                            </p>

                        </div>

                    </form>



                    @if(has_social_login())

                        <div class="text-center">

                            <h5 class="mt-3 text-muted">{{__('Sign up using')}}</h5>

                            <ul class="social-list list-inline mt-3 mb-0">

                                @if(social_enable('facebook'))

                                    <li class="list-inline-item">

                                        <a href="{{ FacebookLogin::get_inst()->getLoginUrl() }}"

                                           class="social-list-item border-primary text-primary"><i

                                                class="mdi mdi-facebook"></i></a>

                                    </li>

                                @endif

                                @if(social_enable('google'))

                                    <li class="list-inline-item">

                                        <a href="{{ GoogleLogin::get_inst()->getLoginUrl() }}"

                                           class="social-list-item border-danger text-danger"><i

                                                class="mdi mdi-google"></i></a>

                                    </li>

                                @endif

                            </ul>

                        </div>

                    @endif

                </div>

            </div>

        </div>

    </div><!-- /.modal -->

    <div id="hh-fogot-password-modal" class="modal fade modal-no-footer" tabindex="-1" role="dialog"

         aria-hidden="true">

        <div class="modal-dialog modal-sm">

            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title text-uppercase">{{__('Reset Password')}}</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×

                    </button>

                </div>

                <div class="modal-body">

                    <form id="hh-reset-password-form" action="{{ url('auth/reset-password') }}" method="post"

                          data-validation-id="form-reset-password"

                          data-reload-time="1500"

                          class="form form-action">

                        @include('common.loading')

                        <div class="form-group">

                            <label for="email-address-reset-pass-form">{{__('Email address')}}</label>

                            <input class="form-control has-validation" data-validation="required|email" type="email"

                                   id="email-address-reset-pass-form" name="email" placeholder="{{__('Email')}}">

                        </div>

                        <div class="form-group mb-0 text-center">

                            <button class="btn btn-primary btn-block text-uppercase"

                                    type="submit"> {{__('Reset Password')}}</button>

                        </div>

                        <div class="form-message"></div>

                    </form>

                </div>

            </div>

        </div>

    </div><!-- /.modal -->

@endif

               @if (is_user_logged_in())

                    <?php

                    $noti = Notifications::get_inst()->countNotificationByUser(get_current_user_id());

                    $user_id = get_current_user_id();

                    $args = [

                        'user_id' => $user_id,

                        'user_encrypt' => hh_encrypt($user_id)

                    ];

                    $userData = get_current_user_data();

                   ?>
@endif
<div class="row">
<div class="col-12">
<div id="frame">
	<div id="sidepanel" style="background-color:#2b2b2b;">
		<div id="contacts">
			<ul>
 @foreach($Conversations as $Conversation)
 @if($current_user->id==$Conversation->from_user)
 <br><li class="contact active"><a style="text-decoration:none; color:#f5f5f5 !important;" href="chat?with_user={{$Conversation->from_user}}">
	<div class="wrap" style="height:35px;">
	<span class="contact-status online"></span>
    <img src="{{ get_user_avatar($Conversation->from_user, [32,32])}}" alt="" />
    <div class="meta"><p class="name">{{ get_username($Conversation->from_user) }}</p></div>
	</div></a></li>     
 @else
 <br><li class="contact"><a style="text-decoration:none; color:#f5f5f5 !important;" href="chat?with_user={{$Conversation->from_user}}">
    <div class="wrap" style="height:35px;">
	<span class="contact-status busy"></span>
    <img src="{{ get_user_avatar($Conversation->from_user, [32,32])}}" alt="" />
    <div class="meta"><p class="name">{{ get_username($Conversation->from_user) }}</p></div>
	</div></a></li>
 @endif

	@endforeach
</ul>
</div></div>


	<div class="content" style=" color:#f5f5f5;">
		<div class="contact-profile" style="background-color:#2b2b2b; color:#f5f5f5;">
			<img src="{{ get_user_avatar($current_user->id, [32,32])}}" alt="" />
			<strong >{{ get_username($current_user->id) }}</strong>
		</div>
		<div class="messages"  style="background-image: url('https://clicknbook.co/public/storage/8c98994518b575bfd8c949e91d20548b.jpg');">
			<ul id="messagesContainer">
                  
				    
			</ul>
		</div>
		<div class="message-input">
			<div class="wrap">
			<input tabindex="-1" type="add_new_message" id="add_new_message" placeholder="Write your message..." required />
			<i class="fa fa-paperclip attachment" aria-hidden="true"></i>
			<button class="submit"  style="background-color:#2b2b2b;"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>
</div></div></div>


</div></div>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script>
$(document).ready(function () {
  refresh();
  function refresh() {
    setInterval(function () {
      $.ajax({
        type: "get",
        url: "https://clicknbook.co/index?to_user={{$userData->getUserId()}}&from_user={{$current_user->id}}",
        success: function (data) {
         let messagesHtml = "";
         let list = document.getElementById("messagesContainer");
         var Chat="";
         for (var message of data) {
         if(message.from_user===<?echo $userData->getUserId()?>){   
         var Chat=Chat+"<li class='replies'>
        <img src='<?echo get_user_avatar($userData->getUserId(), [32,32])?>' alt='' />
         <p style='font-size:16px;'>"+message.message+"<br><small style='font-size:10px;'>"+message.created_at+"</small></p>
         </li>"; 
         }else{
         var Chat=Chat+"<li class='sent'><p style='font-size:16px;'>"+message.message+"<br><small style='font-size:10px;'>"+message.created_at+"</small></p>
         <img src='<?echo get_user_avatar($current_user->id, [32,32])?>' alt='' />
         </li>"; 
         }}
         
         list.innerHTML =Chat;

        },
      });
   $(".messages").animate({ scrollTop: $(document).height()+10500 }, "fast"); }, 1000);
  }
});

$('.submit').click(function () {
    
    var comments = $('#add_new_message').val();
    
    
    $.ajax({
        url: 'https://clicknbook.co/add-new-message?message='+comments+'&from_user={{$userData->getUserId()}}&to_user={{$current_user->id}}',
        type: "get",
        cache: false,
        success: function (savingStatus) {
            
        },
        error: function (xhr, ajaxOptions, thrownError) {
           alert("wrong")
        }
    });
   $(".messages").animate({ scrollTop: $(document).height()+10500 }, "fast"); 
  
 document.getElementById("add_new_message").value = "";
});

$(window).on('keydown', function(e) {
    
  if (e.which == 13) {
    var comments = $('#add_new_message').val();
    
    $.ajax({
        url: 'https://clicknbook.co/add-new-message?message='+comments+'&from_user={{$userData->getUserId()}}&to_user={{$current_user->id}}',
        type: "get",
        cache: false,
        success: function (savingStatus) {
        },
        error: function (xhr, ajaxOptions, thrownError) {
           alert("wrong")
        }
    });
    document.getElementById("add_new_message").value = "";
 
  }

});
</script>
<!--<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'>-->

<script >

$("#profile-img").click(function() {
	$("#status-options").toggleClass("active");
});

$(".expand-button").click(function() {
  $("#profile").toggleClass("expanded");
	$("#contacts").toggleClass("expanded");
});

$("#status-options ul li").click(function() {
	$("#profile-img").removeClass();
	$("#status-online").removeClass("active");
	$("#status-away").removeClass("active");
	$("#status-busy").removeClass("active");
	$("#status-offline").removeClass("active");
	$(this).addClass("active");
	
	if($("#status-online").hasClass("active")) {
		$("#profile-img").addClass("online");
	} else if ($("#status-away").hasClass("active")) {
		$("#profile-img").addClass("away");
	} else if ($("#status-busy").hasClass("active")) {
		$("#profile-img").addClass("busy");
	} else if ($("#status-offline").hasClass("active")) {
		$("#profile-img").addClass("offline");
	} else {
		$("#profile-img").removeClass();
	};
	
	$("#status-options").removeClass("active");
});

function newMessage() {
	message = $(".message-input input").val();
	if($.trim(message) == '') {
		return false;
	}
	$('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
	$('.message-input input').val(null);
	$('.contact.active .preview').html('<span>You: </span>' + message);
};
</script>
@include('frontend.components.footer')

