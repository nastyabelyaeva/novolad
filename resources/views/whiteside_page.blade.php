@extends('layout')

@section('content')
  <div class="container text-center">
    <div class="container">
      <div class="row">
        <div class="col-sm back text-center">
          <h2 class="mt-5">Проект Whiteside</h2>
        </div>

        <div class="col-sm">
            <img src="\img\whitesidemain.jpg" alt="..." style="max-width: 700px; max-height: 500px;" class="img-fluid">
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center mb-5 mt-5">
          <h4 class="mt-5">Комплексный ремонт в минималистичном стиле.<br>
          Проект выполнен в серо-белых тонах, натуральный камень. Эстетам должно понравится.
        </h4>
        </div>
      </div>
    </div>
    <div class="col-md-6 mx-auto">
      <div class="row mb-3">
        <div class="col-12">
          <img src="\img\whiteside1.jpg" alt="..." style="max-width: 400px; max-height: 300px;"
            class="img-fluid">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-12">
          <img src="\img\whiteside2.jpg" alt="..." style="max-width: 400px; max-height: 300px;" class="img-fluid">
        </div>
      </div>
    </div>
    {{-- <div class="row mb-3">
            <iframe width="600" height="480" frameborder="0" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" src="https://truevirtualtours.com/ru/panorama/173646/360view"></iframe>
                </div>
            </div> --}}
  </div>
@endsection
