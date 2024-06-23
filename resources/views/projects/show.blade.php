@extends('layout')

@section('content')
  <div class="container text-center">
    <div class="container">
      <div class="row">
        <div class="col-sm back text-center">
          <h2 class="mt-5">Проект Frank Lloyd Wright</h2>
        </div>

        <div class="col-sm">
            <img src="\img\home-design (4).jpg" alt="..." style="max-width: 700px; max-height: 500px;" class="img-fluid">
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center mb-5 mt-5">
          <h4 class="mt-5">Комплексный ремонт в скандинавском стиле.<br>
          Для проекта разработ авторский дизайн интерьера, акцент на красном цвете и деревяных элементах.
        </h4>
        </div>
      </div>
    </div>
    <div class="col-md-6 mx-auto">
      <div class="row mb-3">
        <div class="col-12">
          <img src="\img\home-design (5).jpg" alt="..." style="max-width: 600px; max-height: 400px;"
            class="img-fluid">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-12">
          <img src="\img\ourjob3.png" alt="..." style="max-width: 600px; max-height: 400px;" class="img-fluid">
        </div>
      </div>
    </div>
    {{-- <div class="row mb-3">
            <iframe width="600" height="480" frameborder="0" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" src="https://truevirtualtours.com/ru/panorama/173646/360view"></iframe>
                </div>
            </div> --}}
  </div>
@endsection

























   <h2 class="text-center mt-5 text-white">{{ $project->name}}</h2>

                <div class="d-flex align-items-center">

                    <img src="{{ asset($project->img_path) }}" alt="" class="card-item">

                    <div class="p-5">

                        <p><b>Название:</b>{{ $project->name }}</p>

                        <p><b>Описание: </b>{{ $project->description }}</p>


                        @if (Auth::check() && !Auth::user()->is_admin)
                        <p><b>Цена: </b>{{ $project->price }}</p>
                        @endif
                    </div>

                </div>


