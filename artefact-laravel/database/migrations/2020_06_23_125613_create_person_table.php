<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->id('no');
            $table->timestamps();
            $table->biginteger('addressno')->unsigned();
            $table->foreign('addressno')->references('no')->on('address')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->string('name');
            $table->string('firstname');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('isactive')->default(false);
            $table->Integer('phonenumber')->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person');
    }
}
