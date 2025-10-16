@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endsection

@section('search_form')
<form action="{{ route('shops.search') }}" method="GET" class="search-form">
    <div class="search-form__group">
      <select name="area_id" class="search-select">
        <option value="" disabled selected hidden>All area</option>
        @foreach ($areas as $area)
            <option value="{{ $area->id }}">{{ $area->name }}</option>
        @endforeach
      </select>
      
      <select name="genre_id" class="search-select">
        <option value="" disabled selected hidden>All genre</option>
        @foreach ($genres as $genre)
            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
        @endforeach
      </select>
  </div>

    <img src="../img/search.png" alt="search" class="search-icon">
    
    <input type="text" name="keyword" class="search-input" placeholder="Search ...">
</form>
@endsection

@section('content')
<div class="shop-list">
    <div class="shop-list__group">
        <div class="shop-list__inner">
            <img src="../img/sushi.png" alt="shop-photo" class="shop-photo">
            <span class="shop">仙人</span>
            <p class="tag">#東京都 #寿司</p>
            <button class="shop-detail__btn">詳しくみる</button>
            <button class="like__btn"><img src="../img/unlike.png" alt="hert" class="icon-like"></button>
        </div>
        <div class="shop-list__inner">
            <img src="../img/yakiniku.png" alt="shop-photo" class="shop-photo">
            <span class="shop">牛助</span>
            <p class="tag">#大阪府 #焼肉</p>
            <button class="shop-detail__btn">詳しくみる</button>
            <button class="like__btn"><img src="../img/like.png" alt="hert" class="icon-like"></button>
        </div>
        <div class="shop-list__inner">
            <img src="../img/izakaya.png" alt="shop-photo" class="shop-photo">
            <span class="shop">戦慄</span>
            <p class="tag">#福岡県 #居酒屋</p>
            <button class="shop-detail__btn">詳しくみる</button>
            <button class="like__btn"><img src="../img/like.png" alt="hert" class="icon-like"></button>
        </div>
        <div class="shop-list__inner">
            <img src="../img/italian.png" alt="shop-photo" class="shop-photo">
            <span class="shop">ルーク</span>
            <p class="tag">#東京都 #イタリアン</p>
            <button class="shop-detail__btn">詳しくみる</button>
            <button class="like__btn"><img src="../img/unlike.png" alt="hert" class="icon-like"></button>
        </div>
    </div>
    <div class="shop-list__group">
        <div class="shop-list__inner">
            <img src="../img/ramen.png" alt="shop-photo" class="shop-photo">
            <span class="shop">志摩屋</span>
            <p class="tag">#福岡県 #ラーメン</p>
            <button class="shop-detail__btn">詳しくみる</button>
            <button class="like__btn"><img src="../img/unlike.png" alt="hert" class="icon-like"></button>
        </div>
        <div class="shop-list__inner">
            <img src="../img/yakiniku.png" alt="shop-photo" class="shop-photo">
            <span class="shop">香</span>
            <p class="tag">#東京都 #焼肉</p>
            <button class="shop-detail__btn">詳しくみる</button>
            <button class="like__btn"><img src="../img/unlike.png" alt="hert" class="icon-like"></button>
        </div>
        <div class="shop-list__inner">
            <img src="../img/izakaya.png" alt="shop-photo" class="shop-photo">
            <span class="shop">JJ</span>
            <p class="tag">#大阪府 #イタリアン</p>
            <button class="shop-detail__btn">詳しくみる</button>
            <button class="like__btn"><img src="../img/unlike.png" alt="hert" class="icon-like"></button>
        </div>
        <div class="shop-list__inner">
            <img src="../img/ramen.png" alt="shop-photo" class="shop-photo">
            <span class="shop">らーめん極み</span>
            <p class="tag">#東京都 #ラーメン</p>
            <button class="shop-detail__btn">詳しくみる</button>
            <button class="like__btn"><img src="../img/unlike.png" alt="hert" class="icon-like"></button>
        </div>
    </div>
</div>
@endsection