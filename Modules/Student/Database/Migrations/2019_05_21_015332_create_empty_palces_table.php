<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmptyPalcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empty_palces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('level_id')->foreign()->references('id')->on('levels');
            $table->unsignedBigInteger('classroom_id')->foreign()->references('id')->on('classrooms');
            $table->unsignedBigInteger('part_id')->foreign()->references('id')->on('parts');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empty_palces');
    }
}
