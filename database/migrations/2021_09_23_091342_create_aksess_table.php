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
            $table->bigIncrements('idAks');
            $table->integer('idWeb');
            $table->string('domAks', 40);
            $table->string('userAks', 40);
            $table->string('passAks', 40);
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
