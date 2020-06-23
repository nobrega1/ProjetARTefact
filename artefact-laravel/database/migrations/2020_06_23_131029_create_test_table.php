<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->id('no');
            $table->foreignId('periodno')->references('no')->on('period');
            $table->foreignId('productno')->references('no')->on('product');
            $table->foreignId('clientno')->references('no')->on('client');
            $table->timestamp('start');
            $table->timestamp('end')->nullable($value = true);
            $table->string('commentairestaff')->nullable($value = true);
            $table->integer('star')->nullable($value = true);
            $table->text('feedback')->nullable($value = true);



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test');
    }
}
