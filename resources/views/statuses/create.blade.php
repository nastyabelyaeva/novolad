@extends('layout')

@section('content')
<h1>Добавление фото-статуса</h1>

<form method="POST" action="{{route('statuses.store')}}" enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="title">Статус заказа</label>
            <input class="form-control" type="text" name="name" id="name" required>

    <button type='submit' class="btn btn-success mt-3 w-100">Добавить новый фото-статус</button>
</form>
@endsection
