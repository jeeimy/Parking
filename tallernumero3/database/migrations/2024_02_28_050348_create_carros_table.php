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
        Schema::create('carros', function (Blueprint $table) {
            $table->id('id_carr0');
            $table->String('marca',30);
            $table->String('modelo',30);
            $table->integer('anio');
            $table->String('kilometraje',00);
            $table->String('matricula');
            $table->String('placa');
            $table->String('precio',10);
            $table->String('foto', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
