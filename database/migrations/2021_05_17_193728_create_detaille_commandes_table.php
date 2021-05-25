<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailleCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detaille_commandes', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->unsignedBigInteger('id_produit_boutique');
            $table->unsignedBigInteger('id_commande');
            $table->double('pu');
            $table->integer('qnt');
            $table->timestamps();
            $table->foreign('id_produit_boutique')->references('id')->on('produit_boutiques');
            $table->foreign('id_commande')->references('id')->on('commandes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detaille_commandes');
    }
}
