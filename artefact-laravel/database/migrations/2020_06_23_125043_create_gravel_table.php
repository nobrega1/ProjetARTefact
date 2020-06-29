<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gravel', function (Blueprint $table) {
           //foreignkey
            $table->biginteger('bikeno')->unsigned();
            $table->foreign('bikeno')
                ->references('no')
                ->on('bike')
                ->onDelete('restrict')
                ->onUpdate('restrict');         
            $table->timestamps();
            $table->string('feature');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gravel');
    }
}
