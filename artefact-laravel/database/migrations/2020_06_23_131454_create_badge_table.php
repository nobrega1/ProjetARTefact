<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBadgeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('badge', function (Blueprint $table) {
            $table->id('no');
            $table->timestamps();
            $table->biginteger('periodno')->unsigned();
            $table->foreign('periodno')
                ->references('no')
                ->on('period')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->biginteger('clientno')->unsigned();
            $table->foreign('clientno')
                ->references('no')
                ->on('client')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('badge');
    }
}
