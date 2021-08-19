<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nomp');
            $table->string('prenomp');
            $table->integer('age');
            $table->string('sexe');
            $table->string('profession');
            $table->integer('tel');
            $table->string('nationalite');
            $table->string('Email')->nullable();
            $table->string('maladiepart');
            $table->string('adressep');
            $table->string('allergie');
            $table->float('temperature');
            $table->float('poids');
            $table->float('tension');
            $table->float('pouls');
            $table->float('taille');
            $table->string('groupage');
            $table->Integer('infirmire_id')->nullable();
            $table->Integer('dossierm_id')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
