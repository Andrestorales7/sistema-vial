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
    Schema::create('incidencias', function (Blueprint $table) {
        $table->id();

        $table->string('titulo');
        $table->text('descripcion');

        $table->string('tipo');
        // bache, señalización, semáforo, iluminación, etc.

        $table->string('ubicacion');

        $table->enum('prioridad', [
            'baja',
            'media',
            'alta'
        ])->default('media');

        $table->enum('estado', [
            'pendiente',
            'en_proceso',
            'resuelto'
        ])->default('pendiente');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidencias');
    }
};
