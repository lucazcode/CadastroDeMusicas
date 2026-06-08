<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('musicas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 50);
            $table->string('artista', 50);
            $table->integer('plataforma')->nullable();
            $table->integer('produtora');
            $table->integer('genero')->nullable();
            $table->date('data_lancamento');
            $table->string('distribuidora', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('musicas');
    }
};