@extends('layout')

@section('content')
<h1>Добавление заказа</h1>

<form method="POST" action="{{route('orders.store')}}" enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="title">Название заказа</label>
            <input class="form-control" type="text" name="name" id="name" required>

            <label class="form-label" for="price">Цена</label>
            <input class="form-control" type="number" name="price" id="price" required>

            <label class="form-label" for="user_id">Заказчик</label>
            <select name="user_id" id="user_id" class="form-select">
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}} {{$user->surname}}</option>
                @endforeach
            </select>

            <label class="form-label" for="status_id">Номер фото-статуса</label>
            <select name="status_id" id="status_id" class="form-select">
                @foreach ($statuses as $status)
                    <option value="{{$status->id}}">{{$status->id}} </option>
                @endforeach
            </select>

            <label class="form-label" for="date">Дата заказа</label>
            <input class="form-control" type="date" name="date" id="date" required>

    {{--<label class="form-label" for="img" class="form-label">Изображение</label>
    <input class="form-control" type="file" class="form-control" id="img" name="img" required>--}}

    <button type='submit' class="btn btn-success mt-3 w-100">Добавить новый заказ</button>
</form>
@endsection
