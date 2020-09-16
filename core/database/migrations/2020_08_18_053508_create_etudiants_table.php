<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained('users'); // ->onDelete('cascade');
            $table->string('nom');
            $table->string('prenom');
            $table->string('pays_residence');
            $table->string('ville_residence')->nullable();
            $table->string('telephone');
            $table->json('selection_formations')->nullable();
            $table->boolean('profil_complet')->default(0);

            // details generaux etudiant
            $table->enum('type_piece_identite', ['PASSEPORT', 'C.I.N', 'C.I'])->nullable();
            $table->string('numero_piece_identite')->nullable();
            $table->string('date_naissance')->nullable();
            $table->string('pays_naissance')->nullable();
            $table->string('ville_naissance')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('coordones')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('adresse_postale')->nullable();
            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
