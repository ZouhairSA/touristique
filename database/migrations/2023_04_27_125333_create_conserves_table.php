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
        Schema::create('conserves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_voyage');
            $table->unsignedBigInteger('id_profil');
            $table->string("voyage_nom");
            $table->string("profil_nom");
            $table->foreign('id_voyage')->references('id')->on('voyages');
            $table->foreign('id_profil')->references('id')->on('profils');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conserves');
    }
};
