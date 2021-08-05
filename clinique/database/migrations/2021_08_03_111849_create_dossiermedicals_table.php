<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossiermedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiermedicals', function (Blueprint $table) {
            $table->id();
            $table->string('libelledoss');
            $table->text('diagnostic');
            $table->Integer('patient_id');
           // $table->foreign('patient_id')->references('id')->on('patients');
            $table->timestamps('date_creation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dossiermedicals');
    }
}
