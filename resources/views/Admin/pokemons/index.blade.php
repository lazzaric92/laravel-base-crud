@extends('layouts.app')

@section('page-title', 'Safari Zone')

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
                    <td scope="col">{{$pokemon->gender}}</td>
                    <td scope="col">
                        {{$pokemon->primary_type}} {{$pokemon->secondary_type}}
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
