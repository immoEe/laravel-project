<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товары</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="wrapper">
    <header class="header">
      <div class="header__inner container">
        <div class="header__logo"><h1>Логотип</h1></div>
        <div class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item"><a href="{{ url('/') }}">Главная</a></li>
            <li class="header__nav-item"><a href="{{ url('/array') }}">Товары</a></li>
          </ul>
        </div>
      </div>
    </header>
    <main class="main">
      <div class="container product-grid">
        @foreach ($products as $product)
        <div class="product-card">
            <h3>{{ $product['title'] }}</h3>
            <p>Цена: {{ $product['price'] }} руб.</p>
        </div>
        @endforeach
      </div>
    </main>
    <footer class="footer">
      <div class="footer__inner container">
        <p>Кузнецов Виктор Андреевич 2024</p>
      </div>
    </footer>
    </div>
</body>
</html>
