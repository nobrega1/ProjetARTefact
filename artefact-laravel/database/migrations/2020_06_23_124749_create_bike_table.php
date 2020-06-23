<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike', function (Blueprint $table) {
            $table->id('no');
            $table->foreignId('productno')->references('no')->on('product');
            $table->string('shortdescr');
            $table->integer('frameunit')->nullable($value = true);
            $table->integer('framesize')->nullable($value = true);
            $table->integer('rimsize')->nullable($value = true);
            $table->integer('rimunit')->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bike');
    }
}
