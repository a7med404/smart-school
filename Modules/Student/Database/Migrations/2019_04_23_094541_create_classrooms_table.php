<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_ar', 100)->unique();
            $table->string('name_en', 100)->unique();
            $table->integer('sort')->unique();
            $table->boolean('is_end');
            $table->foreign('level_id')
                ->references('id')->on('levels')
                ->onDelete('cascade');
            $table->foreign('division_id')
                ->references('id')->on('divisions')
                ->onDelete('cascade');
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
        Schema::dropIfExists('classrooms');
    }
}
