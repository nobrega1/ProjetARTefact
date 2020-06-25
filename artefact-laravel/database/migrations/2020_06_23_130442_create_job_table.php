<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->biginteger('editionno')->unsigned();
            $table->foreign('editionno')->references('no')->on('edition')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->biginteger('staffpersonno')->unsigned();
            $table->foreign('staffpersonno')->references('no')->on('staff')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->timestamps();
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
        Schema::dropIfExists('job');
    }
}
