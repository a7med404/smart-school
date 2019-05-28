<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddCalendEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_calend_employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id')->foreign()
            ->references('id')->on('employees')
            ->onDelete('cascade');
            $table->integer('calend_id')->foreign()
            ->references('id')->on('calends')
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
        Schema::dropIfExists('add_calend_employees');
    }
}
