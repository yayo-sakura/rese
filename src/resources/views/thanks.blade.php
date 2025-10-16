@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks-message">
    <h2>会員登録ありがとうございます</h2>
    <a href="{{ route('login') }}" class="login-btn">ログインする</a>
</div>
@endsection