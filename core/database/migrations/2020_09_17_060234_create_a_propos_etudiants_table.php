<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAProposEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_propos_etudiants', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->foreignId('etudiant_id')->constrained('etudiants')->onDelete('cascade');
            $table->boolean('section_complete')->default(0); // indicate wheter this section is completed or not

            $table->boolean('langue_arabe')->default(0); //
            $table->boolean('langue_francais')->default(0); //
            $table->boolean('langue_anglais')->default(0); //
            $table->boolean('langue_espagnol')->default(0); //
            $table->boolean('langue_allemand')->default(0); //
            $table->string('langue_autre')->nullable(); //

            $table->boolean('sejours_etranger')->default(0); //
            $table->string('pays_sejours_etranger')->nullable(); //

            $table->string('loisirs')->nullable(); //
            $table->string('sports')->nullable(); //
            $table->string('autres_activites')->nullable(); //
            $table->string('motivation_candidature')->nullable(); //
            $table->string('projets_carriere')->nullable(); //


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
        Schema::dropIfExists('a_propos_etudiants');
    }
}
