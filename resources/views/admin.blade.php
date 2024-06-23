@extends('layout')
@section('content')
   <h1>Панель администратора</h1>
   <div class="card">
  <div class="card-header">
    Управление портфолио
  </div>
  <div class="card-body">
    <h5 class="card-title">Изменить проекты</h5>
    <a href="{{route('projects.index')}}" class="btn btn-secondary">К проектам</a>
  </div>
</div>

<div class="card">
  <div class="card-header">
    Управление заказами
  </div>
  <div class="card-body">
    <h5 class="card-title">Изменение заказов и их статусов</h5>
    <a href="{{route('statuses.index')}}" class="btn btn-secondary">Фото-статусы</a>
    <a href="{{route('orders.index')}}" class="btn btn-secondary">К заказам</a>
  </div>
</div>
@endsection
