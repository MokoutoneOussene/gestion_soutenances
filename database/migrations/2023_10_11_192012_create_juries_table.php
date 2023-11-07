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
        Schema::create('juries', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('president');
            $table->string('dm');
            $table->string('rapporteur');
            $table->string('maitre_stage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juries');
    }
};
