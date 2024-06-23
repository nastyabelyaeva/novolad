@extends('layout')

@section('content')
<form class="text-white w-50 mx-auto" method="POST" action="{{route('projects.update', $project)}}"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label class="form-label" for="title">Название проекта</label>
            <input class="form-control" type="text" name="name" id="name" value="{{$project->name}}" required>

            <label class="form-label" for="description">Описание проекта</label>
            <textarea class="form-control" name="description" id="description" required>{{$project->description}}</textarea>

            <label class="form-label" for="price">Цена проекта</label>
            <input class="form-control" type="number" name="price" id="price" value="{{$project->price}}" required>

    <label class="form-label" for="img" class="form-label">Изображение</label>
    <input class="form-control" type="file" class="form-control" id="img" name="img" value="{{$project->img_path}}">

    <button type='submit' class="btn btn-success mt-3 w-100">Изменить</button>
    </form>
@endsection
