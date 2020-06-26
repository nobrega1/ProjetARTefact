<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmtbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emtb', function (Blueprint $table) {
               //foreignkey
               $table->biginteger('mtbbikeno')->unsigned();
               $table->foreign('mtbbikeno')
                   ->references('bikeno')
                   ->on('mtb')
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
        Schema::dropIfExists('emtb');
    }
}
