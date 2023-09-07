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
        Schema::create('tipos', function (Blueprint $table) {
            $table->id();
            $table->string('videos');
            $table->string('juegos');
            $table->string('audios');
            $table->string('cuestionario');

            $table->unsignedBigInteger('actividad_id')->unique();
            $table->foreign('actividad_id') ->references('id') ->on('actividads')->onDelete('cascade') ->onUpdate('cascade');

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos');
    }
};
