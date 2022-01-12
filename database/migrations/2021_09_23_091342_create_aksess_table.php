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
            $table->unsignedBigInteger('host_id')->nullable();
            $table->foreign('host_id')->references('idHost')->on('hosts')->onDelete('cascade');
            $table->string('domainAkses', 40)->nullable();
            $table->string('userAkses', 40)->nullable();
            $table->string('passAkses', 40)->nullable();
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