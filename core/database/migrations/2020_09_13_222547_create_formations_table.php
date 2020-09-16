<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            // Informations related to the diploma
            $table->foreignId('diplome_id')->constrained('diplomes'); // We don't want to have to recreate all the formations manually->onDelete('cascade');
            // $table->enum('diplome_domaine', ['COMMERCE_GESTION', 'LOGISTIQUE_TRANSPORT', 'SCIENCES_TECHNIQUES', 'SCIENCES_SANTE'])->nullable();
            // $table->enum('diplome_niveau', ['1ERE_ANNEE', '2EME_ANNEE', '3EME_ANNEE', '4EME_ANNEE', '5EME_ANNEE', 'DOCTORAT', 'SPECIALITE']);
            
            // Informations related to the school
            $table->foreignId('etablissement_id')->constrained('etablissements'); // ->onDelete('cascade');
            // $table->string('etablissement_nom')->nullable();
            // $table->string('etablissement_sigle')->nullable();
            // $table->string('etablissement_pays')->default('MA'); // MA pour Maroc
            // $table->string('etablissement_ville')->nullable();

            // Informations specifics to the diploma
            $table->string('intitule_filiere')->nullable(); // the name of that filiere for this particular school
            $table->string('specialite')->nullable();
            $table->enum('duree', ['1_ANS', '2_ANS', '3_ANS', '4_ANS', '5_ANS']);
            $table->float('score')->default(0.0); // sur 100
            $table->double('prix')->nullable();
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
        Schema::dropIfExists('formations');
    }
}
