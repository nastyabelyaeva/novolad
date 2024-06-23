@extends('layout')

@section('content')
<form class="text-white w-50 mx-auto" method="POST" action="{{route('orders.update', $order)}}"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label class="form-label" for="title">Название заказа</label>
            <input class="form-control" type="text" name="name" id="name" value="{{$order->name}}" required>


            <label class="form-label" for="price">Цена</label>
            <input class="form-control" type="number" name="price" id="price" value="{{$order->price}}" required>


    <button type='submit' class="btn btn-success mt-3 w-100">Изменить</button>
    </form>
@endsection
