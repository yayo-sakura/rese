@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
<div class="login-form">
    <div class="login-form__inner">
        <h1 class="login-form__heading">Login</h1>
        <form action="{{ route('login') }}" method="post" class="login-form__form">
        @csrf
            <div class="form__group">
                <img src="{{ asset('img/mail.png') }}" alt="mail" class="icon">
                <input name="email" id="mail" type="email" class="login-form__input" value="{{ old('email') }}" placeholder="Email">
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
            <div class="form__group">
                <img src="{{ asset('img/pass.png') }}" alt="password" class="icon">
                <input name="password" id="password" type="password" class="login-form__input" placeholder="Password">
            </div>
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
            <button class="login-form__btn" type="submit">ログイン</button>
        </form>
    </div>
</div>
@endsection