@extends('layouts.app')

@section('page-title', )
'Info: {{$pokemon->name}} #{{$pokemon->pokedex_index}}'
@endsection

@section('main-content')
    <h2 class="text-center fw-bold mb-4">#{{$pokemon->pokedex_index}}: {{$pokemon->name}} </h2>

    <div class="container py-3">
        <div class="row">
            <article class="col-12 d-flex justify-content-between border border-3 border-danger rounded-3 mb-4">
                <div class="card-image border-end p-4 border-3 border-danger">
                    <img src="{{ $pokemon->image_url }}" alt="{{$pokemon->name}}" class="me-4">
                </div>
                <div class="card-body d-flex justify-content-between align-items-center p-3 py-4 px-5">
                    <div class="pkm-info ms-2">
                        <p class="fw-bold"><em>{{$pokemon->category}} Pokémon</em> </p>
                        <p>Ability: {{$pokemon->ability}} </p>
                        <p>Gender: {{$pokemon->gender}} </p>
                        <p>Nature: {{$pokemon->nature}}</p>
                        <p>Types:
                            <strong>{{$pokemon->primary_type}} {{$pokemon->secondary_type}}
                            </strong> </p>
                        <p>Size: {{$pokemon->size}}m </p>
                    </div>
                    <div class="pkm-stats me-5">
                        <p>HP: {{$pokemon->hp}} </p>
                        <p>Atk: {{$pokemon->atk}} </p>
                        <p>Def: {{$pokemon->def}} </p>
                        <p>Sp_atk: {{$pokemon->sp_atk}} </p>
                        <p>Sp_def: {{$pokemon->sp_def}} </p>
                        <p>Speed: {{$pokemon->speed}} </p>
                    </div>
                </div>
            </article>
            <div class="col-12 d-flex justify-content-center">
                <a class="btn btn-danger" href=" {{route('admin.pokemon.index')}} ">Back to Safari Zone</a>
            </div>
        </div>
    </div>
@endsection
