<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('type');
            $table->tinyInteger('ratio');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')
                ->references('id')->on('students')
                ->onDelete('cascade');
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id')
                ->references('id')->on('employees')
                ->onDelete('cascade');

            $table->unsignedBigInteger('subject_id')->nullable();
            $table->foreign('subject_id')
                ->references('id')->on('subjects')
                ->onDelete('cascade');
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
        Schema::dropIfExists('examinations');
    }
}
