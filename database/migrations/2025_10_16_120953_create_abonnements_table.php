<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbonnementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonnements', function (Blueprint $table) {
            $table->id('id_abonnement');
            $table->string('email');
            $table->string('nom_complet')->nullable();
            $table->dateTime('date_inscription')->nullable();
            $table->string('statut')->nullable();
            $table->string('token_confirmation')->nullable();
            $table->dateTime('date_confirmation')->nullable();
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
        Schema::dropIfExists('abonnements');
    }
}
