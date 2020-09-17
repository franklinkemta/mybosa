<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents_etudiants', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->foreignId('etudiant_id')->constrained('etudiants')->onDelete('cascade');
            $table->boolean('section_complete')->default(0); // indicate wheter this section is completed or not
            
            // infos du père
            $table->string('nom_prenom_pere')->nullable();
            $table->string('profession_pere')->nullable();
            $table->string('telephone_pere', 30)->nullable();

            // infos de la mère
            $table->string('nom_prenom_mere')->nullable();
            $table->string('profession_mere', 30)->nullable();
            $table->string('telephone_mere')->nullable();

            // infos du tuteur
            $table->string('nom_prenom_tuteur')->nullable();
            $table->string('profession_tuteur')->nullable();
            $table->string('telephone_tuteur', 30)->nullable();
            $table->string('parente_tuteur')->nullable();


            $table->string('adresse_postale')->nullable();
            $table->string('email')->nullable();

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
        Schema::dropIfExists('parents_etudiants');
    }
}
