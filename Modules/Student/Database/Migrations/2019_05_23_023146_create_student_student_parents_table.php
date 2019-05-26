<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentStudentParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_student_parents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_parent_id')->foreign()
            ->references('id')->on('student_parents')
            ->onDelete('cascade');
            $table->unsignedBigInteger('student_id')->foreign()
            ->references('id')->on('students')
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
        Schema::dropIfExists('student_student_parents');
    }
}
