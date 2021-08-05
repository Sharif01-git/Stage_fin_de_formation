<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGererstocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gererstocks', function (Blueprint $table) {
            $table->Integer('pharmacien_id');
            $table->Integer('produit_id');
            //$table->foreign('pharmacien_id')->references('id')->on('pharmaciens');
            //$table->foreign('produit_id')->references('id')->on('produits');
           // $table->primary(['pharmacien_id','produit_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gererstocks');
    }
}
