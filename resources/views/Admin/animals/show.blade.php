@extends('layouts.app')

@section('page-title', 'Edanna Reserve')

@section('main-content')
    <h2 class="text-center fw-bold mb-4">ID {{$animal->id}}: {{$animal->name}} </h2>

    <div class="container py-3">
        <div class="row">
            <article class="col-12 d-flex">
                <img src="{{ $animal->image_url }}" alt="{{$animal->species}}" class="me-4">
                <div class="card-body p-3">
                    <h3 class="fw-bold"><em>{{$animal->species}}</em> </h3>
                    <p>Size: {{$animal->size}} </p>
                    <p>Age: {{$animal->age}} </p>
                    <p>Status: <strong>{{$animal->health_status}} </strong> </p>
                    <p>Location: <strong> {{$animal->location}}</strong></p>
                </div>
            </article>
        </div>
    </div>
@endsection
