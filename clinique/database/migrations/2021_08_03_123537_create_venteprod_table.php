<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenteprodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venteprod', function (Blueprint $table) {
            $table->id();
            $table->string('libelleprod');
            $table->integer('qtevente');
            $table->double('prixunit');
            $table->double('prixtotal');
            $table->Integer('pharmacien_id');
            //$table->foreign('pharmacien_id')->references('id')->on('pharmaciens');
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
        Schema::dropIfExists('venteprod');
    }
}
