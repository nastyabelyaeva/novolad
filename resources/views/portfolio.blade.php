@extends('layout')

@section('content')

<div class="projects">
      <div class="text-center mt-5 mb-5"><h2>Проекты NOVOLAD</h2></div>
            <div class="row justify-content-around mb-5">
              <div class="col-4">

              <div class="card text-bg-dark">
  <img src="./img/Group 21.png" width="500" height="300" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Дом Frank Lloyd Wright</h5>
    <p class="card-text">Комплексный ремонт загородного дома.
Год завершения проекта: 2018
Страна: Россия
Индекс: 143006</p>
    <a href="{{ route('frank_page') }}" class="btn btn-secondary">Посмотреть</a>
  </div>
</div>
</div>
<div class="col-4">
<div class="card text-bg-dark">
  <img src=".\img\Group 241.png" width="500" height="300" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Кухня "Бежевый уют"</h5>
    <p class="card-text">Проект бюджет.
Год завершения проекта: 2023
Страна: Россия</p>
    <a href="{{ route('kitchen_page') }}" class="btn btn-secondary">Посмотреть</a>
  </div>
</div>
</div>
</div>
<div class="row justify-content-around">
                <div class="col-4">
                <div class="card text-bg-dark">
  <img src="./img/Group 22.png" width="500" height="300" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Проект Whiteside</h5>
    <p class="card-text">Ремонт квартиры в минималистичном стиле и серых оттенках.
Год завершения проекта: 2023
Страна: Россия</p>
    <a href="#" class="btn btn-secondary">Посмотреть</a>
  </div>
</div>
              </div>


             <div class="col-4">
             <div class="card text-bg-dark">
  <img src="./img/Group 23.png" width="500" height="300" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Загородный особняк ЦДЛ</h5>
    <p class="card-text">Ремонт дворца в золоте и хрустале.
Год завершения проекта: 2021
Страна: Россия</p>
    <a href="#" class="btn btn-secondary">Посмотреть</a>
  </div>
</div>

      </div>
      </div>
<div class="row justify-content-around mb-5 mt-5">
      <div class="col-4">
      <div class="card text-bg-dark">
  <img src="./img/Group 20.png" width="500" height="300" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">ЖК Сердце столицы</h5>
    <p class="card-text">Проект авторского дизайна интерьера.
Год завершения проекта: 2022
Страна: Россия</p>
    <a href="#" class="btn btn-secondary">Посмотреть</a>
  </div>
</div>
</div>
<div class="col-4"></div>
</div>
@endsection
