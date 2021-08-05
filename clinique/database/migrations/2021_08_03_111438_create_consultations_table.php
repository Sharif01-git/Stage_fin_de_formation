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
            $table->string('Libelleconsul');
            $table->date('dateconsultation');
            $table->double('prix');
            $table->float('tension');
            $table->float('temperature');
            $table->float('poids');
            $table->float('pouls');
            $table->float('tail');
            $table->string('groupage');
            $table->text('diagnostic');
            $table->Integer('medecin_id');
            $table->Integer('patient_id');
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
