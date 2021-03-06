<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('emp_holidays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employee_id')->foreign()
            ->references('id')->on('employees')
            ->onDelete('cascade');
            $table->unsignedBigInteger('add_holiday_id')->foreign()
            ->references('id')->on('add_holidays')
            ->onDelete('cascade');
            $table->integer('balance')->unsigned();
            $table->date('from');
            $table->date('to');
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
        Schema::dropIfExists('emp_holidays');
    }
}
