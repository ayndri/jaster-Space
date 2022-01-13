<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIklansTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iklans', function (Blueprint $table) {
            $table->bigIncrements('idAds');
            $table->string('namaAds');
            $table->decimal('saldoAds');
            $table->string('akunAds', 10);
            $table->date('mulaiAds');
            $table->date('selesaiAds');
            $table->decimal('nowAds');
            $table->decimal('sisaAds');
            $table->decimal('totalAds');
            $table->string('statAds', 3);
            $table->string('noteAds')->nullable();
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
        Schema::dropIfExists('iklans');
    }
}
