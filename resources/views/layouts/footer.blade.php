@extends('layouts.app')
<footer class="footer">
    <div class="col-md-12">
        <div class="container pt-5">
            <h2 style="text-spacing: 10px !important">TECHNOHEALTH</h2>
            <h4 style="text-shadow:  1px 1px #ddffbc;">“EMPOWERING PEOPLE IMPROVING LIVES”</h4>
        </div>
        {{-- <ul id="loginMenu">
            @guest
            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li> | 
            @if (Route::has('register'))                
            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @endif
            @endguest
        </ul> --}}
        <small><span>Copyright 2021 ©  Technohealth International Marketing Corporation</span></small>
        <br>
        <a href="{{ route('login') }}">{{ __('Login') }}</a> | 
        <a href="{{ route('register') }}">{{ __('Register') }}</a>
    </div>
</footer>