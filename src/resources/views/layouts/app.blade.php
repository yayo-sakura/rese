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
    <input type="checkbox" id="menu-check" class="menu-check">
    <div class="header__inner">
      <div class="header__logo">
        <label for="menu-check" class="header-logo__btn">
          <p class="line-1"></p>
          <p class="line-2"></p>
          <p class="line-3"></p>
        </label>
        <a href="{{ 
                    Auth::check() 
                        ? route('shops.index')
                        : route('login')
                }}" class="header-logo-link">
          <h1>Rese</h1>
        </a>
      </div>
      @yield('search_form')
    </div>

    <nav class="nav-menu">
      <ul class="nav-list">
        @auth
          <li class="nav-item"><a href="{{ route('shops.index') }}" class="nav-link">Home</a></li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="nav-link logout-btn">Logout</button>
            </form>
          </li>
          <li class="nav-item"><a href="{{ route('mypage.index') }}" class="nav-link">Mypage</a></li>
        @endauth

        @guest
          <li class="nav-item"><a href="{{ route('shops.index') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Registration</a></li>
          <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
        @endguest
      </ul>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>