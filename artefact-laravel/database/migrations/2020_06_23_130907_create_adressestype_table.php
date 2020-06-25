<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressestypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adressestype', function (Blueprint $table) {
            $table->id('no');
            $table->timestamps();
            $table->biginteger('addressno')->unsigned();
            $table->foreign('addressno')->references('no')->on('address')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adressestype');
    }
}
