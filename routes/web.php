<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController as GuestPageController;
use App\Http\Controllers\Admin\AnimalController as AdminAnimalController;
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

Route::get('/', [GuestPageController::class, 'index'])->name('guest.home');
Route::get('/admin/animal/index', [AdminAnimalController::class, 'index'])->name('admin.animal.index');
Route::get('/admin/animal/{animal}', [AdminAnimalController::class, 'show'])->name('admin.animal.show');
Route::get('/admin/pokemon/index', [AdminPokemonController::class, 'index'])->name('admin.pokemon.index');
Route::get('/admin/pokemon{pokemon}', [AdminPokemonController::class, 'show'])->name('admin.pokemon.show');
