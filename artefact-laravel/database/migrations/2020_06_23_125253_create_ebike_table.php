<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebike', function (Blueprint $table) {
            $table->biginteger('roadbikeno')->unsigned();
            $table->foreign('roadbikeno')
                ->references('bikeno')
                ->on('road')
                ->onDelete('restrict')
                ->onUpdate('restrict');            $table->timestamps();
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
        Schema::dropIfExists('ebike');
    }
}
