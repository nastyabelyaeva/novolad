@extends('layout')
@section('content')
    <h2 class="text-center mt-5 text-white">{{ $order->name}}</h2>

    <div class="container text-white">

        <div class="row justify-content-center">

            <div class="col-md-6 mx-auto">

                <div class="d-flex align-items-center">



                    <div class="p-5">

                        <p><b>Название:</b>{{ $order->name }}</p>

                        <p><b>Цена: </b>{{ $order->price }}</p>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
