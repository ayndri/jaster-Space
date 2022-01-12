<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('idOrder');
            $table->integer('idBrief')->nullable();
            $table->integer('idAkses')->nullable();
            $table->integer('idUser')->nullable();
            $table->integer('idComp')->nullable();
            $table->integer('dpTrx')->nullable();
            $table->integer('renew')->nullable();
            $table->integer('pmOrder')->nullable();
            $table->date('deadlineTrx')->nullable();
            $table->string('fromTrx')->nullable();
            $table->string('jenisOrder')->nullable();
            $table->string('totalOrder')->nullable();
            $table->string('statusWeb')->nullable();

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
        Schema::dropIfExists('orders');
    }
}
