<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichiers', function (Blueprint $table) {
            $table->id('id_fichier');
            $table->string('nom_fichier');
            $table->string('chemin');
            $table->string('type');
            $table->dateTime('date_upload');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('projet_id');
            $table->timestamps();

            $table->foreign('projet_id')->references('id_projet')->on('projets')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichiers');
    }
}
