<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id('id_article');
            $table->string('nom_article');
            $table->text('contenu');
            $table->dateTime('date_creation')->nullable();
            $table->dateTime('date_publication')->nullable();
            $table->dateTime('date_modification')->nullable();
            $table->string('image_article')->nullable();
            $table->string('statut')->nullable();
            $table->integer('nbre_vue')->default(0);
            $table->unsignedBigInteger('categorie_id')->nullable();
            $table->unsignedBigInteger('utilisateur_id')->nullable();
            $table->string('slug')->unique();
            $table->text('mots_cles')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();

            $table->foreign('categorie_id')->references('id_categorie')->on('categories')->nullOnDelete();
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
        Schema::dropIfExists('articles');
    }
}
