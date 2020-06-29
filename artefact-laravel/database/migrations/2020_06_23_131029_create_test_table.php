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
            $table->timestamps();
            //foreignkey period
            $table->biginteger('periodno')->unsigned();
            $table->foreign('periodno')
                ->references('no')
                ->on('period')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            //foreignkey product
            $table->biginteger('productno')->unsigned();
            $table->foreign('productno')
                ->references('no')
                ->on('product')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            //foreignkey client
            $table->biginteger('clientno')->unsigned();
            $table->foreign('clientno')
                ->references('no')
                ->on('client')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->date('starttime');
            $table->date('endtime')->nullable($value = true);
            $table->text('commentairestaff')->nullable($value = true);
            $table->integer('stars')->nullable($value = true);
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
