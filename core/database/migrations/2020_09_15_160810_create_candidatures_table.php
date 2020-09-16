<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('etudiant_id')->constrained('etudiants');
            $table->foreignId('diplome_id')->constrained('diplomes');
            $table->foreignId('etablissement_id')->constrained('etablissements');
            $table->foreignId('formation_id')->constrained('formations');
            $table->enum('etat', ['ENVOYEE', 'ATTENTE', 'TRAITEMENT', 'VALIDEE', 'ANNULEE', 'REJETEE']);
            $table->string('remarque')->default('RAS');
            $table->boolean('archive')->default(0); // whether the candidature is archived or not
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
        Schema::dropIfExists('candidatures');
    }
}
