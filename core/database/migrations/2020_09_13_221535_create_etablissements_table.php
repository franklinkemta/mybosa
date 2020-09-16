<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained('users'); // ->onDelete('cascade');
            $table->string('nom');
            $table->string('sigle');
            $table->string('pays')->default('MA');
            $table->string('ville');
            $table->string('telephone')->nullable();
            $table->string('siteweb')->nullable();
            $table->string('adresse')->nullable();
            $table->string('email_contact')->nullable();
            $table->json('coordonees')->nullable(); // GPS cordinates
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
        Schema::dropIfExists('etablissements');
    }
}
