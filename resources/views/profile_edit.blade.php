@extends('layout')
@section('content')
  <div class="container text-dark">
    <h1>Изменение данных</h1>
  </div>


  <!-- Форма  start -->
  <form method="POST" action="{{ route('profile.update', Auth::user()) }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Имя:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
    </div>

    <div class="form-group">
        <label for="surname">Фамилия:</label>
        <input type="text" class="form-control" id="surname" name="surname" value="{{ Auth::user()->surname }}">
    </div>

    <div class="form-group">
        <label for="lastname">Отчество:</label>
        <input type="text" class="form-control" id="lastname" name="lastname" value="{{ Auth::user()->lastname }}">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
    </div>

    <div class="form-group">
        <label for="phonenumber">Номер телефона:</label>
        <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="{{ Auth::user()->phonenumber }}">
    </div>

    <div class="form-group">
        <label for="password">Пароль:</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <div class="form-group">
        <label for="password_confirmation">Подтверждение пароля:</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
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

    <button type="submit" class="btn btn-primary">Сохранить изменения</button>
</form>


  <!-- Форма регистрации end -->
@endsection
