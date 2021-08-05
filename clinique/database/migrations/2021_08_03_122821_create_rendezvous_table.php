<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendezvousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendezvous', function (Blueprint $table) {
            $table->id();
            $table->date('dater');
            $table->time('heured');
            $table->time('heuref')->nullable();
            $table->Integer('medecin_id');
            $table->Integer('infirmiere_id');
            //$table->foreign('medecin_id')->references('id')->on('medecins');
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
        Schema::dropIfExists('rendezvous');
    }
}
