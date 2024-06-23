@extends('layout')

@section('content')
<form class="text-white w-50 mx-auto" method="POST" action="{{route('statuses.update', $status)}}"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label class="form-label" for="title">Статус заказа</label>
            <input class="form-control" type="text" name="name" id="name" value="{{$status->name}}" required>

    <label class="form-label" for="img" class="form-label">Фото-статус</label>
    <input class="form-control" type="file" class="form-control" id="img" name="img" value="{{$status->img_path}}">

    <button type='submit' class="btn btn-success mt-3 w-100">Изменить</button>
    </form>
@endsection
