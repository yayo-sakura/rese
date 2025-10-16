@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="detail-reservation">
    <div class="detail-shop">
        <div class="detail-shop__title">
            <button type="button" onClick="history.back()" class="back-btn">&lt;</button>
            <P class="shop-name">仙人</P>
        </div>
        <img src="../img/sushi.png" alt="shop-photo" class="shop-photo">
        <p class="tag">#東京都 #寿司</p>
        <p class="overview">料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。</p>
    </div>
    <div class="reservation">
        <h2>予約</h2>
        <form action="{{ url('/detail/' . $shop->id) }}" class="reservation-form" method="post">
        @csrf
            <input type="hidden" name="shop_id" value="{{ $shop->id }}">
            <input class="reservation-form__date" type="date" name="date" value="{{ old('date', date('Y-m-d')) }}">
            <div class="form__error">
                @error('date')
                {{ $message }}
                @enderror
            </div>
            <input class="reservation-form__time" type="time" name="time" value="{{ old('time', '17:00') }}">
            <div class="form__error">
                @error('time')
                {{ $message }}
                @enderror
            </div>
            <select class="reservation-form__person" name="number_of_guests">
            @for ($i = 1; $i <= 10; $i++)
                <option value="{{ $i }}" 
                    {{ old('number_of_guests', 1) == $i ? 'selected' : '' }}>
                    {{ $i }}人
                </option>
            @endfor
            </select>
            <div class="form__error">
                @error('number_of_guests')
                {{ $message }}
                @enderror
            </div>
            <div class="reservation-detail">
                <div class="reservation__group">
                    <span>Shop</span>
                    <p class="reservation-detail__inner">{{ $shop->name }}</p>
                </div>
                <div class="reservation__group">
                    <span>Date</span>
                    <p class="reservation-detail__inner">{{ old('date', date('Y-m-d')) }}</p>
                </div>
                <div class="reservation__group">
                    <span>Time</span>
                    <p class="reservation-detail__inner">{{ old('time', '17:00') }}</p>
                </div>
                <div class="reservation__group">
                    <span>Number</span>
                    <p class="reservation-detail__inner">{{ old('number_of_guests', 1) }}人</p>
                </div>
            </div>
            <button class="reservation__btn" type="submit">予約する</button>
        </form>
    </div>
</div>
@endsection
            