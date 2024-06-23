@extends('layout')

@section('content')
  <div class="container text-dark text-center mt-3">
    <h1>Личный кабинет</h1>
  </div>

  <!-- Основнная част start -->
  <div class="mx-auto mt-5">
    <div class="profile-card mb-3">
        <p>{{ Auth::user()->surname }}</p>
        <p>{{ Auth::user()->name }}</p>
        <p>{{ Auth::user()->lastname }}</p>
        <p>{{ Auth::user()->login }}</p>
        <p>{{ Auth::user()->email }}</p>
    </div>
    </div>

    <div class="row mt-3 mb-3 justify-content-center">
        <a href="{{ route('statuszagl') }}" class="btn btn-primary" role="button" style="max-width: 200px; max-height: 40px;">Узнать статус заказа</a>
                </div>

        <div class="col mt-3 mb-3 d-flex justify-content-center">
        <div class="row mt-3">
            <form action="{{ route('profile.edit', Auth::user()) }}" method="GET">
                @csrf
                <button class="btn bg-success me-3">&#10000</button>
                </form>
        </div>

        <div class="row mt-3 logBtn-class">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button  class="btn btn-secondary">Выйти</button>
                </form>
        </div>
  </div>

@endsection
