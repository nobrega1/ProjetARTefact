<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {    
            $table->biginteger('companyno')->unsigned();
            $table->foreign('companyno')
                ->references('no')
                ->on('company')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->biginteger('personno')->unsigned();
            $table->foreign('personno')
                ->references('no')
                ->on('person')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->timestamps();
            $table->date('since');
            $table->date('until')->nullable($value = true);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
}
