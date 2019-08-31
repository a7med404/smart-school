<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 200);
            $table->string('education_year', 200);
            $table->tinyInteger('degree');
            $table->tinyInteger('pass_degree');
            // $table->unsignedBigInteger('level_id')->nullable();
            // $table->foreign('level_id')
            //     ->references('id')->on('levels')
            //     ->onDelete('cascade');
            // $table->unsignedBigInteger('classroom_id')->nullable();
            // $table->foreign('classroom_id')
            //     ->references('id')->on('classrooms')
            //     ->onDelete('cascade');
            $table->unsignedBigInteger('part_id')->nullable();
            $table->foreign('part_id')
                ->references('id')->on('parts')
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
        Schema::dropIfExists('subjects');
    }
}
