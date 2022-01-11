<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companys', function (Blueprint $table) {
            $table->bigIncrements('idComp');
            $table->unsignedBigInteger('idUser')->nullable();
            $table->foreign('idUser')->references('idUser')->on('users')->cascadeOnDelete();
            $table->string('brandComp');
            $table->string('namaComp');
            $table->string('addrComp');
            $table->string('kotaComp');
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
        Schema::dropIfExists('companys');
    }
}
