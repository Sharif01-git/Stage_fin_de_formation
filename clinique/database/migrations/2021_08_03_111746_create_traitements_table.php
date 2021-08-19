<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraitementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traitements', function (Blueprint $table) {
            $table->id();
            $table->string('nomp')->nullable();
            $table->string('prenomp')->nullable();
            $table->string('libelletrait');
            $table->date('date_trait');
            $table->string('auteur');
            $table->Integer('medecin_id')->nullable();
            $table->Integer('patient_id')->nullable();
            //$table->foreign('medecin_id')->references('id')->on('medecins');
            //$table->foreign('patient_id')->references('id')->on('patients');
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
        Schema::dropIfExists('traitements');
    }
}
