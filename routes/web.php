<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController as GuestPageController;
use App\Http\Controllers\Admin\PokemonController as AdminPokemonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AdminPokemonController::class, 'index'])->name('admin.pokemon.index');
Route::get('/admin/create', [AdminPokemonController::class, 'create'])->name('admin.pokemon.create');
Route::post('/admin/index', [AdminPokemonController::class, 'store'])->name('admin.pokemon.store');
Route::get('/admin/pokemon{pokemon}', [AdminPokemonController::class, 'show'])->name('admin.pokemon.show');
