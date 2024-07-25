@extends('layouts.app')

@section('page-title', 'Add Pokémon')

@section('main-content')
    <div class="container py-4">

        @if ($errors->any())
            <div class="alert alert-warning">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-4">
                <form action="{{route('admin.pokemon.store')}}" method="POST" id="create-form">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    </div>

                    <div class="mb-3">
                        <label for="pokedex_index" class="form-label">Pokedex Index</label>
                        <input type="number" class="form-control" id="pokedex_index" name="pokedex_index" value="{{old('pokedex_index')}}">
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" class="form-control" id="category" name="category" value="{{old('category')}}">
                    </div>

                    <div class="mb-3">
                        <label for="ability" class="form-label">Ability</label>
                        <input type="text" class="form-control" id="ability" name="ability" value="{{old('ability')}}">
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender" value="{{old('gender')}}">
                    </div>

                    <div class="mb-3">
                        <label for="primary_type" class="form-label">Primary Type</label>
                        <input type="text" class="form-control" id="primary_type" name="primary_type" value="{{old('primary_type')}}">
                    </div>

                    <div class="mb-3">
                        <label for="secondary_type" class="form-label">Secondary Type</label>
                        <input type="text" class="form-control" id="secondary_type" name="secondary_type" value="{{old('secondary_type')}}">
                    </div>

                    <div class="mb-3">
                        <label for="nature" class="form-label">Nature</label>
                        <input type="text" class="form-control" id="nature" name="nature" value="{{old('nature')}}">
                    </div>

                    <div class="mb-3">
                        <label for="size" class="form-label">Size</label>
                        <input type="number" step=".01" class="form-control" id="size" name="size" value="{{old('size')}}">
                    </div>

                    <div class="mb-3">
                        <label for="image_url" class="form-label">Image URL</label>
                        <input type="text" class="form-control" id="image_url" name="image_url" value="{{old('image_url')}}">
                    </div>

                    <div class="mb-3">
                        <label for="hp" class="form-label">HP</label>
                        <input type="number" class="form-control" id="hp" name="hp" value="{{old('hp')}}">
                    </div>

                    <div class="mb-3">
                        <label for="atk" class="form-label">ATK</label>
                        <input type="number" class="form-control" id="atk" name="atk" value="{{old('atk')}}">
                    </div>

                    <div class="mb-3">
                        <label for="def" class="form-label">DEF</label>
                        <input type="number" class="form-control" id="def" name="def" value="{{old('def')}}">
                    </div>

                    <div class="mb-3">
                        <label for="sp_atk" class="form-label">SP. ATK</label>
                        <input type="number" class="form-control" id="sp_atk" name="sp_atk" value="{{old('sp_atk')}}">
                    </div>

                    <div class="mb-3">
                        <label for="sp_def" class="form-label">SP. DEF</label>
                        <input type="number" class="form-control" id="sp_def" name="sp_def" value="{{old('sp_def')}}">
                    </div>

                    <div class="mb-4">
                        <label for="speed" class="form-label">Speed</label>
                        <input type="number" class="form-control" id="speed" name="speed" value="{{old('speed')}}">
                    </div>

                    <div class="mb-4">
                        <label for="tot_stats" class="form-label">Tot. Stats</label>
                        <input type="number" class="form-control" id="tot_stats" name="tot_stats" value="{{old('tot_stats')}}">
                    </div>

                    <div class="d-flex justify-content-around">
                        <button type="submit" class="btn btn-danger">Add</button>
                        <button class="btn btn-warning">Clear fields</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    @vite('resources/js/confirm-create.js')
@endsection
