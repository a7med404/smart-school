<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 200);
            $table->enum('gender', [0, 1]);
            $table->tinyInteger('religion');
            $table->boolean('is_staff_son')->default(false);
            $table->date('birthday');
            $table->date('start_data');
            $table->string('start_from', 200); //start_year
            $table->date('start_year');
            $table->tinyInteger('study_status');
            $table->text('note');
            
            $table->unsignedBigInteger('identifcation_id')->nullable();
            $table->foreign('identifcation_id')
                ->references('id')->on('identifcations')
                ->onDelete('cascade');
            $table->unsignedBigInteger('student_parent_id')->nullable();;
            $table->foreign('student_parent_id')
                ->references('id')->on('student_parents')
                ->onDelete('cascade');
            $table->unsignedBigInteger('address_id')->nullable();
            $table->foreign('address_id')
                ->references('id')->on('addresses')
                ->onDelete('cascade');
            $table->unsignedBigInteger('contact_id')->nullable();;
            $table->foreign('contact_id')
                ->references('id')->on('contacts')
                ->onDelete('cascade');
            $table->unsignedBigInteger('level_id')->nullable();;
            $table->foreign('level_id')
                ->references('id')->on('levels')
                ->onDelete('cascade');
            $table->unsignedBigInteger('classroom_id')->nullable();;
            $table->foreign('classroom_id')
                ->references('id')->on('classrooms')
                ->onDelete('cascade');
            $table->unsignedBigInteger('part_id')->nullable();;
            $table->foreign('part_id')
                ->references('id')->on('parts')
                ->onDelete('cascade');
            $table->unsignedBigInteger('health_id')->nullable();;
            $table->foreign('health_id')
                ->references('id')->on('healths')
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
        Schema::dropIfExists('students');
    }
}
