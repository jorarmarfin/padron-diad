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
        Schema::create('maestro_programas', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('codigo');
            $table->string('nivel_academico', 100);
            $table->string('programa', 255);
            $table->string('tipo_autorizacion', 100);
            $table->string('vigencia', 50);
            $table->string('efi', 10);
            $table->boolean('activo')->default(true);
            $table->timestamps();

            $table->unique('codigo');
            $table->index('nivel_academico');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maestro_programas');
    }
};
