@extends('layouts.app')

@section('page-title', 'Safari zone')

@section('main-content')
    <h2 class="text-center fw-bold mb-4">ID {{$pokemon->id}}: {{$pokemon->name}} </h2>

    <div class="container py-3">
        <div class="row">
            <article class="col-12 d-flex">
                <img src="{{ $pokemon->image_url }}" alt="{{$pokemon->name}}" class="me-4">
                <div class="card-body p-3">
                    <p class="fw-bold">Pokedex Index: <em>{{$pokemon->pokedex_index}}</em> </p>
                    <p>Gender: {{$pokemon->gender}} </p>
                    <p>Nature: {{$pokemon->location}}</p>
                    <p>Types: <strong>{{$pokemon->type}} </strong> </p>
                    <p>Size: {{$pokemon->size}}m </p>
                </div>
            </article>
        </div>
    </div>
@endsection
