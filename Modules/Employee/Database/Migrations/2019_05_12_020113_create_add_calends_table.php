<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddCalendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_calends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('managament_id')->foreign()->references('id')->on('managements');
            $table->integer('department_id')->foreign()->references('id')->on('departments');
            $table->integer('employee_id')->foreign()->references('id')->on('employees');
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
        Schema::dropIfExists('add_calends');
    }
}
