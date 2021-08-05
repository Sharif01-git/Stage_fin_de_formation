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
            $table->string('libellefacture');
            $table->double('prixboncarn')->nullable();
            $table->double('prixconsult')->nullable();
            $table->double('prixtrait')->nullable();
            $table->double('prixprod')->nullable();
            $table->double('prixtotal')->nullable();
            $table->Integer('pharmacien_id');
            $table->Integer('infirmiere_id');
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
