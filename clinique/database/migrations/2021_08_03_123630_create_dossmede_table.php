<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossmedeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossmede', function (Blueprint $table) {
            $table->Integer('medecin_id');
            $table->Integer('dossiermedical_id');
           // $table->foreign('medecin_id')->references('id')->on('medecins');
           // $table->foreign('dossiermedical_id')->references('id')->on('dossiermedicals');
           // $table->primary(['medecin_id','dossiermedical_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dossmede');
    }
}
