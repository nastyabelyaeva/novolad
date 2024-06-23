@extends('layout')

@section('content')

<div class="container d-flex justify-content-center align-items-center mt-3 mb-3">

<input type="text" class="form-control mx-auto" name="rewiev_city" placeholder="Имя, город: ">
<input type="text" class="form-control mx-auto" name="rewiev_text" placeholder="Напишите ваш отзыв ">

<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
<button type="button" class="btn btn-primary" id="btn-submit">Отправить</button>
</div>

@endsection
