<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevistaPdfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revista_pdf', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('revista_id')->unsigned();
            $table->foreign('revista_id')->
                references('id')->
                on('revista')->
                onDelete('cascade');
            $table->string('pdf');
            $table->string('data_post');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revista_pdf');
    }
}
