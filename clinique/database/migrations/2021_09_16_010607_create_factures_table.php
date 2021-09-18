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
            $table->string('nomp');
            $table->string('prenomp');
            $table->date('datefac');
            $table->double('prixbonconsul');
            $table->double('prixcarnet')->nullable();
            $table->double('prixtrait')->nullable();
            $table->double('prixprod');
            $table->double('prixtotal')->nullable();
            $table->Integer('caissier_id')->nullable();
            $table->Integer('patient_id')->nullable();
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
