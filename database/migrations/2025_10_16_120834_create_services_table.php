<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id('id_service');
            $table->string('nom_service');
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->decimal('prix', 10, 2)->default(0);
            $table->string('delai_moyen')->nullable();
            $table->unsignedBigInteger('utilisateur_id')->nullable();
            $table->timestamps();

            $table->foreign('utilisateur_id')->references('id_utilisateur')->on('utilisateurs')->nullOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
