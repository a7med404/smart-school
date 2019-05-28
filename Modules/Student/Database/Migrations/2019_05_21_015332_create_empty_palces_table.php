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
            $table->unsignedBigInteger('level_id')->foreign()->
            references('id')->on('levels')
            ->onDelete('cascade');
            $table->unsignedBigInteger('classroom_id')->foreign()
            ->references('id')->on('classrooms')
            ->onDelete('cascade');
            $table->unsignedBigInteger('part_id')->foreign()
            ->references('id')->on('parts')
            ->onDelete('cascade');
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
