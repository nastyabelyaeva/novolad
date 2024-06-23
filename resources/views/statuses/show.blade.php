@extends('layout')
@section('content')
    <h2 class="text-center mt-5 text-white">{{ $status->name}}</h2>

    <div class="container text-white">

        <div class="row justify-content-center">

            <div class="col-md-6 mx-auto">

                <div class="d-flex align-items-center">

                    <div class="p-5">
                        <p><b>Название:</b>{{ $status->name }}</p>
                    </div>

                    <img src="{{ asset($status->img_path) }}" alt="" class="card-item">

                </div>

            </div>

        </div>

    </div>
@endsection
