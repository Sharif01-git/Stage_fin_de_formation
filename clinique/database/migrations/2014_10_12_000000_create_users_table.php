<?php

use App\Profil;
use App\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('telephone')->nullable();
            $table->string('adresse')->nullable();
            $table->string('profil')->nullable();
            $table->integer('role')->nullable();
            $table->Integer('administrateur_id')->nullable();
           // $table->foreign('administrateur_id')->references('id')->on('administrateurs');
           // $table->foreign('profil_id')->references('id')->on('profils');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
