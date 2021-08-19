<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('libellefac');
            $table->date('datefac');
            $table->double('prixbonconsul');
            $table->double('prixcarnet');
            $table->double('prixtrait');
            $table->double('prixprod');
            $table->double('prixtotal');
            $table->Integer('caissier_id')->nullable();
            $table->Integer('patient_id')->nullable();
           // $table->foreign('pharmacien_id')->references('id')->on('pharmaciens');
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
        Schema::dropIfExists('factures');
    }
}
