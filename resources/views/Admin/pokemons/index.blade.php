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
                        {{$pokemon->primary_type}}
                        @if ($pokemon['secondary_type'] <> 'None')
                            {{$pokemon->secondary_type}}
                        @endif
                    </td>
                    <td scope="col">
                        <a href="{{route('admin.pokemon.show', $pokemon)}}" class="btn btn-danger btn-sm">Info</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
