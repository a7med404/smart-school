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
            $table->string('education_year', 200); //education_year
            $table->tinyInteger('study_status');
            $table->text('note')->nullable();
            $table->unsignedBigInteger('level_id')->nullable();
            $table->foreign('level_id')
                ->references('id')->on('levels')
                ->onDelete('cascade');
            $table->unsignedBigInteger('classroom_id')->nullable();
            $table->foreign('classroom_id')
                ->references('id')->on('classrooms')
                ->onDelete('cascade');
            $table->unsignedBigInteger('part_id')->nullable();
            $table->foreign('part_id')
                ->references('id')->on('parts')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
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
