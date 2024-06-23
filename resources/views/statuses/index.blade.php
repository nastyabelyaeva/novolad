@extends('layout')

@section('content')
<h1>Управление фото-статусами</h1>
@if (Auth::check() && Auth::user()->is_admin)
    <a href="{{route('statuses.create')}}" class="btn btn-success my-3">Создать статус для заказа</a>
@endif

<div class="row justify-content-center">
@foreach ($statuses as $status )
<div class="col-12 col-md-6 col-xl-4">
    <div class="card mb-3" style="width: 18rem;">
        <img src="{{asset($status->img_path)}}" class="card-img-top" alt="...">

        <div class="card-body">
            <h5 class="card-title">{{$status->name}}</h5>
            <a href="{{route('statuses.show', $status)}}" class="btn btn-success">Подробнее</a>
            @if (Auth::check() && Auth::user()->is_admin)
            <a href="{{route('statuses.edit', $status)}}" class="btn btn-success">Изменить</a>
            <form action="{{route('statuses.destroy', $status)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-secondary">Удалить</button>
            </form>
            @endif
        </div>
    </div>
</div>
@endforeach
</div>
@endsection
