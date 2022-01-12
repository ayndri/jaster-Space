<?php

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
            $table->bigIncrements('idUser');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('usrn')->unique();
            $table->string('jabatUser')->nullable();
            $table->timestamp('lastLogin')->nullable();
            $table->string('password')->default('$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi');
            $table->string('telpUser')->nullable();
            $table->string('fotoUser')->nullable();
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
