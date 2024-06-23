<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('style/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('style/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('style/css/main.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4Wz6iJgD/+ub2oU" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <title>Novolad</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="{{ route('main') }}"><img src="./img/new_NOVOLAD.png" width="213" height="60"></a>
        <div class="d-flex justify-content-end collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('main') }}">О нас</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('portfolio') }}">Портфолио</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Контакты</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('loginForm') }}">Личный кабинет</a>
            </li>
            @endguest
            @if (Auth::check() && Auth::user()->is_admin)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin') }}">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('projects.index') }}">Управление портфолио</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('orders.index') }}">Заказы</a>
            </li>
            @endif
            @if (Auth::check() && !Auth::user()->is_admin)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('main') }}">О нас</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('portfolio') }}">Портфолио</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Контакты</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile') }}">Профиль</a>
            </li>
            @endif
            @auth
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-secondary">Выход</button>
                </form>
            </li>
            @endauth
        </ul>
        </div>
    </div>
  </nav>

  @if (Session::has('info'))
    <div class="alert alert-warning">
      Успешный вход в аккаунт
    </div>
  @endif
  @if (isset($info))
    <div class="alert alert-warning">
      Не удалось войти в аккаунт
    </div>
  @endif
  <!-- info end -->

  @yield('content')


  <footer>
    <div class="container-fluid bg-dark">
      <div class="row pt-5">
        <div class="col-6 col-md-4">
          <div class="text-light">
            <h3 class="fw-bold">Novolad </h3>
            <p> 2024 All rights reserved</p>
          </div>
        </div>
        <div class="col">
          <div class="text-light">
            <a class="nav-link" href="{{ route('portfolio') }}">Портфолио</a>
          </div>
        </div>
        <div class="col">
          <div class="text-light">
            <a class="nav-link" href="{{ route('contact') }}">Контакты</a>
          </div>
        </div>
        <div class="col">
          <div class="text-light">
            <a href="https://wa.me/79161755759" target="_blank" style="text-decoration: none; color: white;">WhatsApp</a>

          </div>
        </div>
        <div class="col">
          <div class="text-light">
            <a href="https://t.me/ANDROMACK" target="_blank" style="text-decoration: none; color: white;">Telegram</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ asset('style/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('style/js/counter_client.js') }}"></script>
  <script src="{{ asset('style/js/modal.js') }}"></script>
</body>

</html>
