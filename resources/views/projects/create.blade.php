@extends('layout')

@section('content')
<h1>Добавление проекта</h1>

<form method="POST" action="{{route('projects.store')}}" enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="title">Название проекта</label>
            <input class="form-control" type="text" name="name" id="name" required>

            <label class="form-label" for="description">Описание</label>
            <textarea class="form-control" name="description" id="description" required></textarea>

            <label class="form-label" for="price">Цена</label>
            <input class="form-control" type="number" name="price" id="price" required>

    <label class="form-label" for="img" class="form-label">Изображение</label>
    <input class="form-control" type="file" class="form-control" id="img" name="img" required>

    <button type='submit' class="btn btn-success mt-3 w-100">Добавить новый проект</button>
</form>
@endsection