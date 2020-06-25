<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('period', function (Blueprint $table) {
            $table->id('no');
            $table->timestamps();
            //foreignkey
            $table->biginteger('editionno')->unsigned();
            $table->foreign('editionno')
                ->references('no')
                ->on('edition')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->date('date');
            $table->date('start');
            $table->date('end');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('period');
    }
}
