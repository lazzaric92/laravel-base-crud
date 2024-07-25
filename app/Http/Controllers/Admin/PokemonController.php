<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePokemonRequest;
use App\Http\Requests\UpdatePokemonRequest;
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
        return view('admin.pokemons.index', compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pokemons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePokemonRequest $request)
    {
        $data = $request->validated();
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
        $newPokemon->tot_stats = $data['tot_stats'];
        $newPokemon->save();

        // $newPokemon = Pokemon::create($data);

        return redirect()->route('admin.pokemon.show', $newPokemon)->with('message', 'A new pokémon joined the Safari Zone!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemon)
    {
        return view('admin.pokemons.show', compact('pokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
        return view('admin.pokemons.edit', compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePokemonRequest $request, Pokemon $pokemon)
    {
        $data = $request->validated();
        $pokemon->update($data);
        return redirect()->route('admin.pokemon.show', $pokemon)->with('message', 'Pokémon data updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();
        return redirect()->route('admin.pokemon.index')->with('message', 'A pokémon has been freed');
    }
}
