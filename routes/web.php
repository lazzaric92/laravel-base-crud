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

Route::get('/', [GuestPageController::class, 'index'])->name('guest.home');
Route::get('/pokemon', [AdminPokemonController::class, 'index'])->name('admin.pokemon.index');
Route::post('/pokemon', [AdminPokemonController::class, 'store'])->name('admin.pokemon.store');
Route::get('/pokemon/create', [AdminPokemonController::class, 'create'])->name('admin.pokemon.create');
Route::get('/pokemon/deleted', [AdminPokemonController::class, 'softDeleted'])->name('admin.pokemon.delete');
Route::delete('/pokemon/{id}/hard-deleted', [AdminPokemonController::class, 'hardDelete'])->name('admin.pokemon.hardDelete');
Route::patch('/pokemon/{id}/restore', [AdminPokemonController::class, 'restore'])->name('admin.pokemon.restore');
Route::get('/pokemon/{pokemon}', [AdminPokemonController::class, 'show'])->name('admin.pokemon.show');
Route::put('/pokemon/{pokemon}', [AdminPokemonController::class, 'update'])->name('admin.pokemon.update');
Route::delete('/pokemon/{pokemon}', [AdminPokemonController::class, 'destroy'])->name('admin.pokemon.destroy');
Route::get('/pokemon/{pokemon}/edit', [AdminPokemonController::class, 'edit'])->name('admin.pokemon.edit');
