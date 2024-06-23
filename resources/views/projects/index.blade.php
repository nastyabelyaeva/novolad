@extends('layout')

@section('content')
<h1>Портфолио работ</h1>
@if (Auth::check() && Auth::user()->is_admin)
    <a href="{{route('projects.create')}}" class="btn btn-success my-3">Добавить новый проект</a>
@endif

<div class="row justify-content-center">
@foreach ($projects as $project )
<div class="col-12 col-md-6 col-xl-4">
    <div class="card mb-3" style="width: 18rem;">
        <img src="{{asset($project->img_path)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$project->name}}</h5>
            <a href="{{route('projects.show', $project)}}" class="btn btn-success">Подробнее</a>
            @if (Auth::check() && !Auth::user()->is_admin)
            <p class="card-text">{{$project->price}}</p>
            @endif
            @if (Auth::check() && Auth::user()->is_admin)
            <a href="{{route('projects.edit', $project)}}" class="btn btn-success">Изменить</a>
            <form action="{{route('projects.destroy', $project)}}" method="post">
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