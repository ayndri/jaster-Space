<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absens', function (Blueprint $table) {
            $table->bigIncrements('idAbsen');
            $table->integer('idUser')->nullable();
            $table->dateTime('tglAbsen')->nullable();
            $table->integer('jmlAbsen')->nullable();
            $table->string('perihalAbsen', 40)->nullable();
            $table->text('isiAbsen')->nullable();
            $table->integer('statusAbsen')->nullable();
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
        Schema::dropIfExists('absens');
    }
}
