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
                $newPokemon->category = $singlePokemonData[3];
                $newPokemon->ability = $singlePokemonData[4];
                $newPokemon->gender = $singlePokemonData[5];
                $newPokemon->primary_type = $singlePokemonData[6];
                $newPokemon->secondary_type = $singlePokemonData[7];
                $newPokemon->nature = $singlePokemonData[8];
                $newPokemon->size = $singlePokemonData[9];
                $newPokemon->image_url = $singlePokemonData[10];
                $newPokemon->hp = $singlePokemonData[11];
                $newPokemon->atk = $singlePokemonData[12];
                $newPokemon->def = $singlePokemonData[13];
                $newPokemon->sp_atk = $singlePokemonData[14];
                $newPokemon->sp_def = $singlePokemonData[15];
                $newPokemon->speed = $singlePokemonData[16];
                $newPokemon->tot_stats = $singlePokemonData[17];
                $newPokemon->save();
            }
        }
    }
}
