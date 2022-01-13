<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAksessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aksess', function (Blueprint $table) {
            $table->bigIncrements('idAkses');
            $table->integer('idOrder')->nullable();
            $table->integer('idBrief')->nullable();
            $table->integer('idHost')->nullable();
            $table->integer('domainAkses')->nullable();
            $table->integer('userAkses')->nullable();
            $table->integer('passAkses')->nullable();
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
        Schema::dropIfExists('aksess');
    }
}