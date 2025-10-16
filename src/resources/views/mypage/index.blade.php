@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<h2>{{ $user->name }}さん</h2>
<div class="mypage-inner">
    <div class="mypage-reservation">
        <h3 class="reservation">予約状況</h3>
        @forelse ($reservations as $index => $reservation)
        <div class="mypage-reservation__inner">
        <form action="{{ route('reservation.destroy', $reservation->id) }}" method="post" class="reservation-delete-form">
            @csrf
            @method('DELETE')
            <button class="close" type="submit" aria-label="予約を削除">
                <img src="{{ asset('img/close.png') }}" alt="削除" class="icon-close">
            </button>
        </form>

        <div class="mypage-reservation__title">
            <img src="{{ asset('img/time.png') }}" alt="" class="icon-time">
            <p>予約{{ $index + 1 }}</p>
        </div>

        <div class="mypage-reservation__group">
            <span>Shop</span>
            <p>{{ $reservation->shop->name }}</p>
        </div>
        <div class="mypage-reservation__group">
            <span>Date</span>
            <p>{{ \Carbon\Carbon::parse($reservation->date)->format('Y-m-d') }}</p>
        </div>
        <div class="mypage-reservation__group">
            <span>Time</span>
            <p>{{ \Carbon\Carbon::parse($reservation->time)->format('H:i') }}</p>
        </div>
        <div class="mypage-reservation__group">
            <span>Number</span>
            <p>{{ $reservation->number_of_people }}人</p>
        </div>
    </div>

        @empty
            <p>現在予約はありません。</p>
        @endforelse
    </div>

    <div class="mypage-like">
        <h3 class="like">お気に入り店舗</h3>
        <div class="mypage-like__inner">
            @forelse ($favorites as $favorite)
                <div class="mypage-like__inner--shop">
                    <img src="{{ $favorite->shop->image_url ?? asset('img/noimage.png') }}" alt="{{ $favorite->shop->name }}の写真" class="shop-photo">
                    <span class="shop">{{ $favorite->shop->name }}</span>
                    <p class="tag">#{{ $favorite->shop->area }} #{{ $favorite->shop->genre }}</p>
                    <div class="mypage-like__actions">
                        <a href="{{ route('shops.show', $favorite->shop->id) }}" class="shop-detail__btn">詳しくみる</a>

                        <form action="{{ route('favorite.remove', $favorite->shop->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="like__btn" type="submit" aria-label="お気に入り解除">
                                <img src="{{ asset('img/like.png') }}" alt="お気に入り解除" class="icon-like">
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <p>お気に入り店舗はありません。</p>
            @endforelse
        </div>
    </div>
</div>
@endsection