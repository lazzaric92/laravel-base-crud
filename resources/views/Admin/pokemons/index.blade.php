@extends('layouts.app')

@section('page-title', 'Safari Zone')

@section('head-cdn')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
    <h1 class="text-center fw-bold mb-5">Safari Zone</h1>

    <div class="container">
        <table class="table table-hover table-striped text-center">
            <thead class="table-danger">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col"><em>Pokedex Index</em></th>
                    <th scope="col">Gender</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pokemons as $pokemon)
                <tr>
                    <th scope="row"> {{$pokemon->id}} </th>
                    <td scope="col">{{$pokemon->name}}</td>
                    <td scope="col"><em>{{$pokemon->pokedex_index}}</em></td>
                    <td scope="col">
                        @if ( lcfirst(trim($pokemon->gender)) == 'male' )
                            <i class="fa-solid fa-mars"></i>
                        @elseif( lcfirst(trim($pokemon->gender)) === 'female' )
                            <i class="fa-solid fa-venus"></i>
                        @else
                            <i class="fa-solid fa-genderless"></i>
                        @endif
                    </td>
                    <td scope="col">
                        <span class="badge rounded-pill {{lcfirst(trim($pokemon->primary_type))}}">{{$pokemon->primary_type}}</span>
                        <span class="badge rounded-pill {{lcfirst(trim($pokemon->secondary_type))}}">{{$pokemon->secondary_type}}</span>
                    </td>
                    <td scope="col">
                        <a href="{{route('admin.pokemon.show', $pokemon)}}" class="btn btn-danger btn-sm ms-2">Info</a>
                        <a href="{{route('admin.pokemon.edit', $pokemon)}}" class="btn btn-success btn-sm ms-2">Edit</a>
                        <form action="{{route('admin.pokemon.destroy', $pokemon)}}" method="POST" class="delete-form d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-secondary btn-sm ms-2">Free</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('custom-scripts')
    @vite('resources/js/confirm-delete.js')
@endsection
