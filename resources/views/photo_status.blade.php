@extends('layout')

@section('content')
  <div class="view">
  <div class="container-text-box d-flex justify-content-center align-items-center">
    <div class="text-center mt-3 mb-3 pl-3 pr-3">
        <div class="line">
            <h3>У вас нет активных проектов в обработке</h3>
        </div>
    </div>
    <div class="container position-relative mt-3 mb-3">
        <div class="row justify-content-center">
          <a href="{{ route('main') }}" class="btn calc-btn" role="button">Назад в профиль</a>
        </div>
      </div>
</div>
  </div>
@endsection
