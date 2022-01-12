<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Contracts\Database\Events\MigrationEvent;

class CreateTrxsTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trxs', function (Blueprint $table) {
            $table->bigIncrements('idTrx');
            $table->integer('idOrder')->nullable();
            $table->string('paketTrx', 40)->nullable();
            $table->integer('qtyTrx')->nullable();
            $table->integer('hargaTrx')->nullable();
            $table->timestamps();
        });
    }

    /**
     * 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trxs');
    }
}
