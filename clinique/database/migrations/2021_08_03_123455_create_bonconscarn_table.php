<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonconscarnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonconscarn', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->double('prixachat');
            $table->Integer('infirmiere_id');
            //$table->foreign('infirmiere_id')->references('id')->on('infirmieres');
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
        Schema::dropIfExists('bonconscarn');
    }
}
