@extends('layouts.app')

@section('page-title', )
'Info: {{$pokemon->name}} #{{$pokemon->pokedex_index}}'
@endsection

@section('head-cdn')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
    <h2 class="text-center fw-bold mb-4">#{{$pokemon->pokedex_index}}: {{$pokemon->name}} </h2>

    <div class="container py-3" id="show-pokemon">
        <div class="row">
            <article class="col-12 d-flex justify-content-between border border-3 border-danger rounded-3 mb-4">
                <div class="card-image border-end p-4 border-3 border-danger">
                    <img src="{{ $pokemon->image_url }}" alt="{{$pokemon->name}}" class="me-4">
                </div>
                <div class="card-body d-flex justify-content-between align-items-center p-3 py-4 px-5">
                    <div class="pkm-info ms-2">
                        <p class="fw-bold"><em>{{$pokemon->category}} Pokémon</em> </p>
                        <p>Ability: {{$pokemon->ability}} </p>
                        <p>Gender:
                            @if ( $pokemon->gender == 'Male' )
                            <i class="fa-solid fa-mars"></i>
                            @elseif( $pokemon->gender === 'Female' )
                                <i class="fa-solid fa-venus"></i>
                            @else
                                <i class="fa-solid fa-genderless"></i>
                            @endif
                        </p>
                        <p>Nature: {{$pokemon->nature}}</p>
                        <p>Types:
                            <span class="badge rounded-pill {{$pokemon->primary_type}}">{{$pokemon->primary_type}}</span>
                            <span class="badge rounded-pill {{$pokemon->secondary_type}}">{{$pokemon->secondary_type}}</span>
                        </p>
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
            <div class="col-12 d-flex justify-content-around">
                <a class="btn btn-success" href=" {{route('admin.pokemon.edit', $pokemon)}} ">Edit</a>
                <a class="btn btn-danger" href=" {{route('admin.pokemon.index')}} ">Back to Safari Zone</a>
                <form action="{{route('admin.pokemon.destroy', $pokemon)}}" method="POST" class="delete-form d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-secondary ms-2">Free</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    @vite('resources/js/confirm-delete.js')
@endsection
