<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplomes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('intitule');
            $table->enum('domaine', ['COMMERCE_GESTION', 'LOGISTIQUE_TRANSPORT', 'SCIENCES_TECHNIQUES', 'SCIENCES_SANTE']);
            $table->enum('niveau', ['1ERE_ANNEE', '2EME_ANNEE', '3EME_ANNEE', '4EME_ANNEE', '5EME_ANNEE', 'DOCTORAT', 'SPECIALITE']);
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
        Schema::dropIfExists('diplomes');
    }
}
