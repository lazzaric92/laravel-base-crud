<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pokemon extends Model
{
    protected $table = 'pokemons';
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'pokedex_index',
        'category',
        'ability',
        'gender',
        'primary_type',
        'secondary_type',
        'nature',
        'size',
        'image_url',
        'hp',
        'atk',
        'def',
        'sp_atk',
        'sp_def',
        'speed',
        'tot_stats'
    ];
}
