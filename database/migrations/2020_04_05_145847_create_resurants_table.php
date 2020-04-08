<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resurants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('location');
            $table->bigInteger('owner_id')->unsigned();
            $table->integer('tables')->default(10);
            $table->timestamps();
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resurants');
    }
}
