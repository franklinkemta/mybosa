<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationsExperiencesEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations_experiences_etudiants', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->foreignId('etudiant_id')->constrained('etudiants')->onDelete('cascade');

            // section formations récentes
            $table->json('formations_recentes')->nullable(); // max 3

            // section diplomes récents
            $table->json('diplomes_recents')->nullable(); // max 3 // Desc

            // section expériences ou stages en entreprises
            $table->json('experiences_professionnelles')->nullable(); // max 3 // Desc


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educations_experiences_etudiants');
    }
}
