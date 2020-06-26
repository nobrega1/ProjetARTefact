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
            $table->timestamps();
            //foreignkey
            $table->biginteger('productno')->unsigned();
            $table->foreign('productno')
                ->references('no')
                ->on('product')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
