<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendezvousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendezvouses', function (Blueprint $table) {
            $table->id();
            $table->string('nomd');
            $table->string('prenomd');
            $table->integer('aged');
            $table->string('professiond');
            $table->string('nationalited');
            $table->string('adresse');
            $table->string('phone_number');
            $table->string('emaild')->unique();
            $table->string('sexed');
            $table->time('heured');
            $table->date('dater')->date_format('d/m/Y');
            $table->text('motifr');
            $table->text('message')->nullable();
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
        Schema::dropIfExists('rendezvouses');
    }
}
