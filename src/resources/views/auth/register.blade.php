@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('content')
<div class="register-form">
    <div class="register-form__inner">
        <h1 class="register-form__heading">Registration</h1>
        <form action="{{ route('register') }}" method="post" class="register-form__form">
        @csrf
            <div class="form__group">
                <img src="{{ asset('img/user.png') }}" alt="user" class="icon">
                <input name="name" id="name" type="text" class="register-form__input" value="{{ old('name') }}" placeholder="Username">
            </div>
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
            <div class="form__group">
                <img src="{{ asset('img/mail.png') }}" alt="mail" class="icon">
                <input name="email" id="mail" type="email" class="register-form__input" value="{{ old('email') }}" placeholder="Email">
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
            <div class="form__group">
                <img src="{{ asset('img/pass.png') }}" alt="password" class="icon">
                <input name="password" id="password" type="password" class="register-form__input" placeholder="Password">
            </div>
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
            <button class="register-form__btn" type="submit">登録</button>
        </form>
    </div>
</div>
@endsection