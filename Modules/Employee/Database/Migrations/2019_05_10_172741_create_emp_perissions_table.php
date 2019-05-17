<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpPerissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_perissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('managament_id')->foreign()->references('id')->on('management');
            $table->integer('department_id')->foreign()->references('id')->on('department');
            $table->integer('employee_id')->foreign()->references('id')->on('employee');
            $table->integer('perission_id')->foreign()->references('id')->on('emp_perission_names');
            $table->time('from_houre');
            $table->time('to_houre');
            $table->date('date');
            $table->longText('note')->nullable();
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
        Schema::dropIfExists('emp_perissions');
    }
}
