<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id('id_utilisateur');
            $table->string('nom_complet');
            $table->string('email_utilisateur')->unique();
            $table->string('contact')->nullable();
            $table->string('photo')->nullable();
            $table->text('bio')->nullable();
            $table->string('statut')->nullable();
            $table->string('password');
            $table->dateTime('date_inscription')->nullable();
            $table->dateTime('derniere_connexion')->nullable();
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
        Schema::dropIfExists('utilisateurs');
    }
}
