<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('Admin.pokemons.index', compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.pokemons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newPokemon = new Pokemon();
        $newPokemon->name = $data['name'];
        $newPokemon->pokedex_index = $data['pokedex_index'];
        $newPokemon->category = $data['category'];
        $newPokemon->ability = $data['ability'];
        $newPokemon->gender = $data['gender'];
        $newPokemon->primary_type = $data['primary_type'];
        $newPokemon->secondary_type = $data['secondary_type'];
        $newPokemon->nature = $data['nature'];
        $newPokemon->size = $data['size'];
        $newPokemon->image_url = $data['image_url'];
        $newPokemon->hp = $data['hp'];
        $newPokemon->atk = $data['atk'];
        $newPokemon->def = $data['def'];
        $newPokemon->sp_atk = $data['sp_atk'];
        $newPokemon->sp_def = $data['sp_def'];
        $newPokemon->speed = $data['speed'];
        $newPokemon->save();

        return redirect()->route('admin.pokemon.show', $newPokemon);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemon)
    {
        return view('Admin.pokemons.show', compact('pokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
