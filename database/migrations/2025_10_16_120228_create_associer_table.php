<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssocierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associer', function (Blueprint $table) {
            $table->unsignedBigInteger('projet_id');
            $table->unsignedBigInteger('technologie_id');
            $table->primary(['projet_id', 'technologie_id']);

            $table->foreign('projet_id')->references('id_projet')->on('projets')->onDelete('cascade');
            $table->foreign('technologie_id')->references('id_technologie')->on('technologies')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('associer');
    }
}
