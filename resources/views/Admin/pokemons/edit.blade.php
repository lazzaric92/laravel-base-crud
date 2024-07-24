@extends('layouts.app')

@section('page-title', 'Edit Pokémon')

@section('main-content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-4">
                <form action="{{route('admin.pokemon.update', $pokemon)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$pokemon->name}}">
                    </div>

                    <div class="mb-3">
                        <label for="pokedex_index" class="form-label">Pokedex Index</label>
                        <input type="number" class="form-control" id="pokedex_index" name="pokedex_index" value="{{$pokemon->pokedex_index}}">
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" class="form-control" id="category" name="category" value="{{$pokemon->category}}">
                    </div>

                    <div class="mb-3">
                        <label for="ability" class="form-label">Ability</label>
                        <input type="text" class="form-control" id="ability" name="ability" value="{{$pokemon->ability}}">
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender" value="{{$pokemon->gender}}">
                    </div>

                    <div class="mb-3">
                        <label for="primary_type" class="form-label">Primary Type</label>
                        <input type="text" class="form-control" id="primary_type" name="primary_type" value="{{$pokemon->primary_type}}">
                    </div>

                    <div class="mb-3">
                        <label for="secondary_type" class="form-label">Secondary Type</label>
                        <input type="text" class="form-control" id="secondary_type" name="secondary_type" value="{{$pokemon->secondary_type}}">
                    </div>

                    <div class="mb-3">
                        <label for="nature" class="form-label">Nature</label>
                        <input type="text" class="form-control" id="nature" name="nature" value="{{$pokemon->nature}}">
                    </div>

                    <div class="mb-3">
                        <label for="size" class="form-label">Size</label>
                        <input type="number" step=".01" class="form-control" id="size" name="size" value="{{$pokemon->size}}">
                    </div>

                    <div class="mb-3">
                        <label for="image_url" class="form-label">Image URL</label>
                        <input type="text" class="form-control" id="image_url" name="image_url" value="{{$pokemon->image_url}}">
                    </div>

                    <div class="mb-3">
                        <label for="hp" class="form-label">HP</label>
                        <input type="number" class="form-control" id="hp" name="hp" value="{{$pokemon->hp}}">
                    </div>

                    <div class="mb-3">
                        <label for="atk" class="form-label">ATK</label>
                        <input type="number" class="form-control" id="atk" name="atk" value="{{$pokemon->atk}}">
                    </div>

                    <div class="mb-3">
                        <label for="def" class="form-label">DEF</label>
                        <input type="number" class="form-control" id="def" name="def" value="{{$pokemon->def}}">
                    </div>

                    <div class="mb-3">
                        <label for="sp_atk" class="form-label">SP. ATK</label>
                        <input type="number" class="form-control" id="sp_atk" name="sp_atk" value="{{$pokemon->sp_atk}}">
                    </div>

                    <div class="mb-3">
                        <label for="sp_def" class="form-label">SP. DEF</label>
                        <input type="number" class="form-control" id="sp_def" name="sp_def" value="{{$pokemon->sp_def}}">
                    </div>

                    <div class="mb-4">
                        <label for="speed" class="form-label">Speed</label>
                        <input type="number" class="form-control" id="speed" name="speed" value="{{$pokemon->speed}}">
                    </div>

                    <div class="d-flex justify-content-around">
                        <button type="submit" class="btn btn-success">Edit</button>
                        <a href="{{route('admin.pokemon.index')}}" class="btn btn-danger">Back to Safari Zone</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
