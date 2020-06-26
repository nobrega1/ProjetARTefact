<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookmarkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookmark', function (Blueprint $table) {
            $table->biginteger('clientno')->unsigned();
            $table->foreign('clientno')
                ->references('no')
                ->on('client')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->biginteger('productno')->unsigned();
            $table->foreign('productno')
                ->references('no')
                ->on('product')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
        Schema::dropIfExists('bookmark');
    }
}
