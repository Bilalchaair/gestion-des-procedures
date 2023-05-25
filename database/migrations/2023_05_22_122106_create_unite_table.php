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
        Schema::create('unite', function (Blueprint $table) {
            $table->id();
            $table->string('nom_unite');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('service');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unite');
    }
};
