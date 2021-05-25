<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;


class CreateBoutiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boutiques', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->unsignedBigInteger('id_categorie_boutique');
            $table->unsignedBigInteger('id_boutiquier');
            $table->string('nom');
            $table->string('email');
            $table->string('adresse');
            $table->string('tva');
            $table->string('longitude');
            $table->string('attributes');
            $table->timestamps();
            $table->foreign('id_categorie_boutique')->references('id')->on('categorie_boutiques');
            $table->foreign('id_boutiquier')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boutiques');
    }
}
