<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Models;

class CreateProduitBoutiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('produit_boutiques', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->unsignedBigInteger('id_produit');
            $table->unsignedBigInteger('id_boutique');
            //$table->unsignedBigInteger('id_detaille_commandes');
            $table->double('prix_vent');
            $table->integer('qntstock');
            $table->timestamps();
            $table->foreign('id_boutique')->references('id')->on('boutiques');
            $table->foreign('id_produit')->references('id')->on('produits');
            //$table->foreign('id_detaille_commandes')->references('id')->on('detaille_commandes');



        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit_boutiques');
    }
}
