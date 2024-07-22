<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $pokemonsData = Helpers::getCsvInfo(__DIR__ . '/../../resources/assets/pokemons.csv');

        foreach ($pokemonsData as $index => $singlePokemonData) {
            if($index > 0){
                $newPokemon = new Pokemon();
                $newPokemon->name = $singlePokemonData[1];
                $newPokemon->pokedex_index = $singlePokemonData[2];
                $newPokemon->gender = $singlePokemonData[3];
                $newPokemon->type = $singlePokemonData[4];
                $newPokemon->nature = $singlePokemonData[5];
                $newPokemon->size = $singlePokemonData[6];
                $newPokemon->image_url = $singlePokemonData[7];
                $newPokemon->save();
            }
        }
    }
}
