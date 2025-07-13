<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo ver.Retrieval</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <a class="header__logo" href="/">
          Todo <span>ver.</span>Retrieval
        </a>
        <nav class="header-nav">
          <ul class="header-nav__list">
            <li class="header-nav__item">
              <a class="header-nav__link" href="/">Todo一覧</a>
              <a class="header-nav__link" href="/categories">カテゴリ一覧</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main class="main">
    @yield('content')
  </main>
</body>

</html>