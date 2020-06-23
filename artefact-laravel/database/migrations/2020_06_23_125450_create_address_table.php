<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id('no');
            $table->string('street')->nullable($value = true);
            $table->Integer('streetnumber')->nullable($value = true);
            $table->Integer('pobox')->nullable($value = true);
            $table->Integer('postalcode')->nullable($value = true);
            $table->string('city')->nullable($value = true);
            $table->string('canton')->nullable($value = true);
            $table->string('country')->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}
