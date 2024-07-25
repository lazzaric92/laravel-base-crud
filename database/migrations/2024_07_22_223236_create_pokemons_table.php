<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->smallInteger('pokedex_index')->unsigned();
            $table->string('category', 100);
            $table->string('ability', 100);
            $table->string('gender', 25);
            $table->string('primary_type', 30);
            $table->string('secondary_type', 30)->nullable(true);
            $table->string('nature', 30);
            $table->decimal('size', $precision = 4, $scale = 2);
            $table->text('image_url');
            $table->smallInteger('hp')->unsigned();
            $table->smallInteger('atk')->unsigned();
            $table->smallInteger('def')->unsigned();
            $table->smallInteger('sp_atk')->unsigned();
            $table->smallInteger('sp_def')->unsigned();
            $table->smallInteger('speed')->unsigned();
            $table->smallInteger('tot_stats')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};
