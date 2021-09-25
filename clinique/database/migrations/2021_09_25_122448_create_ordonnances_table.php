<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdonnancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordonnances', function (Blueprint $table) {
            $table->id();
            $table->string('nomp');
            $table->string('prenomp');
            $table->Integer('age');
            $table->string('sexe')->nullable();
            $table->text('produits');
            $table->integer('patient_id')->nullable();
           // $table->foreign('medecin_id')->references('id')->on('medecins');
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
        Schema::dropIfExists('ordonnances');
    }
}
