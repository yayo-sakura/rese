@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
<div class="thanks-message">
    <h2>ご予約ありがとうございます</h2>
    <button type="button" onClick="history.back()" class="back-btn">戻る</button>
</div>
@endsection