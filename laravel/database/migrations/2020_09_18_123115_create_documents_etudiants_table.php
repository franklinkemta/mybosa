<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents_etudiants', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->foreignId('etudiant_id')->constrained('etudiants')->onDelete('cascade');

            $table->string('photo')->nullable();

            $table->string('piece_identite')->nullable();

            $table->string('autres_documents')->nullable();

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
        Schema::dropIfExists('documents_etudiants');
    }
}
