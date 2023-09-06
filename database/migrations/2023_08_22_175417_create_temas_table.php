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
        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tema');
            $table->unsignedBigInteger('seccion_id')->unique();
            //cramos la relacion a nivel de migraciones
            $table->foreign('seccion_id') ->references('id') ->on('seccions')->onDelete('cascade')->onUpdate('cascade');
           
           
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temas');
    }
};
