<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Animal;
use PhpParser\Node\Stmt\Foreach_;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // echo __DIR__ . '\..\..\resources\assets\animals.csv';
        $animalsData = Helpers::getCsvInfo(__DIR__ . '/../../resources/assets/animals.csv');

        foreach ($animalsData as $index => $singleAnimalData) {
            if($index > 0){
                $newAnimal = new Animal();
                $newAnimal->name = $singleAnimalData[1];
                $newAnimal->species = $singleAnimalData[2];
                $newAnimal->image_url = $faker->imageUrl(300, 300, 'animals');
                $newAnimal->size = $singleAnimalData[3];
                $newAnimal->age = $singleAnimalData[4];
                $newAnimal->health_status = $singleAnimalData[5];
                $newAnimal->location = $singleAnimalData[6];
                $newAnimal->save();
            }
        }
    }
}
