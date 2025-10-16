<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>rese</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
        <div class="header__search">
            <div class="header__logo">
              <button class="header-logo__btn" type="button">
                <p class="line-1"></p>
                <p class="line-2"></p>
                <p class="line-3"></p>
              </button>
              <h1>Rese</h1>
            </div>
            <form class="form">
                <div class="form-search">
                    <select class="form-search__area" name="area" id="">
                        <option hidden>All area</option>
                        <option>東京都</option>
                        <option>大阪府</option>
                        <option>福岡県</option>
                    </select>
                    <select class="form-search__genre" name="area" id="">
                        <option hidden>All genre</option>
                        <option>寿司</option>
                        <option>焼肉</option>
                        <option>居酒屋</option>
                        <option>イタリアン</option>
                        <option>ラーメン</option>
                    </select>
                    <img src="../img/search.png" alt="search" class="search-icon">
                    <input class="search" type="text" name="text" placeholder="Search …" >
                </div>
            </form>
        </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>