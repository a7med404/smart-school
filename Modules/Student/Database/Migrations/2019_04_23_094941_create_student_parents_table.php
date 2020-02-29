<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_parents', function (Blueprint $table) {
            $table->bigIncrements('id');          
            $table->integer('mr_d')->default(0);  
            $table->string('name', 255);
            $table->integer('religion')->nullable();
            $table->integer('relation');
            $table->integer('nationality')->nullable();
            $table->integer('qualification')->nullable();
            $table->string('job', 255)->nullable();
            $table->string('work_place', 255)->nullable();
            $table->integer('martial')->nullable();
            $table->string('phone_number', 190);
            $table->string('email', 190);
            $table->integer('is_die')->default(0);
            $table->text('note')->nullable();
            $table->string('username')->unique()->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('student_parents');
    }
}
