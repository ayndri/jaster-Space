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
            $table->integer('idBrief');
            $table->integer('idAkses');
            $table->integer('idUser');
            $table->integer('idComp');
            $table->integer('dpTrx');
            $table->integer('renew');
            $table->date('deadlineTrx');
            $table->string('fromTrx');
            $table->string('jenisOrder');
            $table->string('totalOrder');
            $table->string('statusWeb');

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
