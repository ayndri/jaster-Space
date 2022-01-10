<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJwebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jwebs', function (Blueprint $table) {
            $table->bigIncrements('idWeb');
            $table->string('brandWeb');
            $table->string('namaWeb');
            $table->string('colorWeb', 10);
            $table->string('logoWeb');
            $table->string('postWeb', 20);
            $table->string('targetWeb', 10);
            $table->string('reqWeb');
            $table->string('picWeb', 50);
            $table->string('jabatWeb', 20);
            $table->string('waWeb', 15);
            $table->string('mailWeb', 40);
            $table->string('addrWeb');
            $table->boolean('statWeb')->default(0);
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
        Schema::dropIfExists('jwebs');
    }
}
