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
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
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
            $table->text('objet')->nullable();
            $table->text('domaineapp')->nullable();
            $table->text('references')->nullable();
            $table->text('abreviation')->nullable();
            $table->text('description')->nullable();
            $table->string('logigramme');
            $table->string('enregistrement')->nullable();
            $table->string('enregistrement_code')->nullable();

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