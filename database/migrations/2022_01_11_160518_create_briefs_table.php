<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBriefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('briefs', function (Blueprint $table) {
            $table->bigIncrements('idBrief');
            $table->integer('idAkses')->nullable();
            $table->integer('idOrder')->nullable();
            $table->integer('idComp')->nullable();
            $table->string('logoBrief', 60)->nullable();
            $table->string('colorBrief', 60)->nullable();
            $table->string('waBrief', 60)->nullable();
            $table->string('emailBrief', 60)->nullable();
            $table->string('igBrief', 60)->nullable();
            $table->string('passGramBrief', 60)->nullable();
            $table->string('fbBrief', 60)->nullable();
            $table->string('sosBrief', 60)->nullable();
            $table->string('telfBrief', 60)->nullable();
            $table->string('mpBrief', 60)->nullable();
            $table->string('reqBrief', 60)->nullable();
            $table->string('postBrief', 60)->nullable();
            $table->string('targetBrief', 60)->nullable();
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
        Schema::dropIfExists('briefs');
    }
}
