@extends('layout')
@section('content')
  <div class="container text-dark">
    <h1 class="login_h1">Авторизация</h1>
  </div>

  <!-- Основнная част start -->
  <div class="container mx-auto my-auto mt-3">
    <form action="{{ route('login') }}" method="POST">
      @csrf
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="login" placeholder="Логин" aria-label="Username"
          aria-describedby="basic-addon1" required>
      </div>

      <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Пароль" aria-label="password"
          aria-describedby="basic-addon2" required>
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="d-flex align-items-center">
          <button type="submit" class="btn btn-light me-3">Войти</button>
          <a class="nav-link" href="{{ route('regForm') }}">Еще нет аккаунта? Зарегистрируйтесь</a>
      </div>
    </form>
  </div>

  <!--Основнная часть end -->
@endsection
