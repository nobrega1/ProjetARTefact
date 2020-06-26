<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogue', function (Blueprint $table) {
            $table->timestamps();
            $table->biginteger('editionno')->unsigned();
            $table->foreign('editionno')
                ->references('no')
                ->on('edition')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->biginteger('productno')->unsigned();
            $table->foreign('productno')
                ->references('no')
                ->on('product')
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
        Schema::dropIfExists('catalogue');
    }
}
