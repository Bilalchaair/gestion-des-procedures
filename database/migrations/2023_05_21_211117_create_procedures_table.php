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
        Schema::create('procedures', function (Blueprint $table) {
            $table->id();
            $table->string('nom_proc');
            $table->string('reference_code');
            $table->string('edition')->nullable();
            $table->string('date_creation');
            $table->string('nom_redacteur');
            $table->string('fonction_redacteur');
            $table->string('nom_ver')->nullable();
            $table->string('fonction_ver')->nullable();
            $table->string('date_verification')->nullable();
            $table->string('nom_app')->nullable();
            $table->string('fonction_app')->nullable();
            $table->string('date_approvation')->nullable();
            $table->string('objet')->nullable();
            $table->string('domaineapp')->nullable();
            $table->string('references')->nullable();
            $table->string('abreviation')->nullable();
            $table->string('description')->nullable();
            $table->string('logigramme');
            $table->string('enregistrement')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procedures');
    }
};
