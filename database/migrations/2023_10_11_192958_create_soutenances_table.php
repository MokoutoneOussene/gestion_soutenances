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
        Schema::create('soutenances', function (Blueprint $table) {
            $table->id();
            $table->date('date_soutenance');
            $table->time('heure');
            $table->string('observation')->nullable();
            $table->string('statut')->nullable();
            $table->string('note')->nullable();
            $table->string('appreciation')->nullable();

            $table->unsignedBigInteger('demandes_id');
            $table->foreign('demandes_id')->references('id')->on('demandes')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('salles_id');
            $table->foreign('salles_id')->references('id')->on('salles')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('juries_id');
            $table->foreign('juries_id')->references('id')->on('juries')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soutenances');
    }
};
