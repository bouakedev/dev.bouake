<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtiliserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utiliser', function (Blueprint $table) {
            $table->unsignedBigInteger('utilisateur_id');
            $table->unsignedBigInteger('projet_id');
            $table->primary(['utilisateur_id', 'projet_id']);

            $table->foreign('utilisateur_id')->references('id_utilisateur')->on('utilisateurs')->onDelete('cascade');
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
        Schema::dropIfExists('utiliser');
    }
}
