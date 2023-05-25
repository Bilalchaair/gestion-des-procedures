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
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->string('nom_service');
            $table->unsignedBigInteger('hopital_id');
            $table->foreign('hopital_id')->references('id')->on('hospital');
            $table->unsignedBigInteger('division_id');
            $table->foreign('division_id')->references('id')->on('division')->nullabale;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
