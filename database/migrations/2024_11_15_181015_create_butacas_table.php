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
        Schema::create('butacas', function (Blueprint $table) {
            $table->id();
            $table->string('asiento');
            $table->string('cliente')->nullable();
            $table->string('codigo_pago')->nullable();
            $table->enum('estado',['Disponible','Reservado','No disponible'])->default('Disponible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('butacas');
    }
};
