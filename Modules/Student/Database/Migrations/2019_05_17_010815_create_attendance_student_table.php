<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendanceStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_student', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('attendance_id');
           /*  $table->foreign('attendance_id')
                ->references('id')->on('attendances')
                ->onDelete('cascade'); */
            $table->unsignedBigInteger('student_id');
            /* $table->foreign('student_id')
                ->references('id')->on('students')
                ->onDelete('cascade'); */
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
        Schema::dropIfExists('attendance_student');
    }
}
