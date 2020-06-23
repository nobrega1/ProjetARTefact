<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand', function (Blueprint $table) {
            $table->id('no');
            $table->foreignId('companyno')->references('no')->on('company');
            $table->string('name');
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
        Schema::dropIfExists('brand');
    }
}
