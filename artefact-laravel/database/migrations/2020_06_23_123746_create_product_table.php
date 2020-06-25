<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('no');
            $table->timestamps();
             //foreignkey
             $table->biginteger('brandno')->unsigned();
             $table->foreign('brandno')
                 ->references('no')
                 ->on('brand')
                 ->onDelete('restrict')
                 ->onUpdate('restrict');
            $table->string('shortdescr');
            $table->text('longdescr')->nullable($value = true);
            $table->string('distinctivesign')->nullable($value = true);
            $table->string('lienimage')->nullable($value = true);

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
