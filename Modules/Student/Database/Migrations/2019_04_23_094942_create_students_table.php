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
            $table->tinyInteger('study_lang');
            $table->boolean('is_partner_son');
            $table->boolean('is_staff_son');
            $table->string('identifcation_number', 20)->unique();
            $table->date('identifcation_expire');
            $table->date('birthday');
            $table->date('start_data');
            $table->string('start_from', 200); //start_year
            $table->date('start_year');
            $table->text('note');
            
            $table->integer('identifcation_id');
            $table->foreign('identifcation_id')
                ->references('id')->on('identifcations')
                ->onDelete('cascade');
            $table->integer('student_parent_id');
            $table->foreign('student_parent_id')
                ->references('id')->on('student_parents')
                ->onDelete('cascade');
            $table->integer('address_id');
            $table->foreign('address_id')
                ->references('id')->on('addresses')
                ->onDelete('cascade');
            $table->integer('contact_id');
            $table->foreign('contact_id')
                ->references('id')->on('contacts')
                ->onDelete('cascade');
            $table->integer('level_id');
            $table->foreign('level_id')
                ->references('id')->on('levels')
                ->onDelete('cascade');
            $table->integer('classroom_id');
            $table->foreign('classroom_id')
                ->references('id')->on('classrooms')
                ->onDelete('cascade');
            $table->integer('part_id');
            $table->foreign('part_id')
                ->references('id')->on('parts')
                ->onDelete('cascade');
            $table->integer('health_id');
            $table->foreign('health_id')
                ->references('id')->on('healths');
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
