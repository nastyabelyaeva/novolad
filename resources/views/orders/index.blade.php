@extends('layout')

@section('content')
<h1>Заказы</h1>
@if (Auth::check() && Auth::user()->is_admin)
    <a href="{{route('orders.create')}}" class="btn btn-success my-3">Добавить новый заказ</a>
@endif

<div class="row justify-content-center">
@foreach ($orders as $order )
<div class="col-12 col-md-6 col-xl-4">
    <div class="card mb-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$order->name}}</h5>
            <a href="{{route('orders.show', $order)}}" class="btn btn-success">Подробнее</a>
            @if (Auth::check() && !Auth::user()->is_admin)
            <p class="card-text">{{$order->price}}</p>
            @endif
            @if (Auth::check() && Auth::user()->is_admin)
            <a href="{{route('orders.edit', $order)}}" class="btn btn-success">Изменить</a>
            <form action="{{route('orders.destroy', $order)}}" method="post">
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
