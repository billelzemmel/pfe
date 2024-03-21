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
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->unsignedBigInteger('moniteur_id')->nullable();
            $table->foreign('moniteur_id')->references('id')->on('moniteurs')->onDelete('set null');
            $table->unsignedBigInteger('condidat_id')->nullable();
            $table->foreign('condidat_id')->references('id')->on('Candidats')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seances');
    }
};
