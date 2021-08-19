<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->string('nomp')->nullable();
            $table->string('prenomp')->nullable();
            $table->string('motifconsul');
            $table->date('dateconsult');
            $table->string('maladiepart');
            $table->string('allergie');
            $table->string('modevie');
            $table->text('histoire');
            $table->text('diagnostic');
            $table->text('conduite');
            $table->Integer('medecin_id')->nullable();
            $table->Integer('patient_id')->nullable();
           // $table->foreign('medecin_id')->references('id')->on('medecins');
           // $table->foreign('patient_id')->references('id')->on('patients');
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
        Schema::dropIfExists('consultations');
    }
}
