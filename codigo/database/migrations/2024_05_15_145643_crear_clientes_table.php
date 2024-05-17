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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nit')->nullable();
            $table->string('nombre_primer');
            $table->string('nombre_segundo')->nullable();
            $table->string('apellido_primer');
            $table->string('apellido_segundo')->nullable();
            $table->string('num_contacto')->nullable();
            $table->date('fecha_nac')->nullable();
            $table->integer('red_social')->nullable();
            $table->string('usuario_red_social')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
