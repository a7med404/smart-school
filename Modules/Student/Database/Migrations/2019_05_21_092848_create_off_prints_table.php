<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffPrintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('off_prints', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('type');
            $table->integer('student_id')->foreign()->references('id')->on('students');
            // $table->integer('employee_id')->foreign()->references('id')->on('employees');
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
        Schema::dropIfExists('off_prints');
    }
}
