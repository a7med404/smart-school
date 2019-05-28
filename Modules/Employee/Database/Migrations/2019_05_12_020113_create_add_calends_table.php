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
            $table->integer('management_id')->foreign()
            ->references('id')->on('managements')
            ->onDelete('cascade');
            $table->integer('department_id')->foreign()
            ->references('id')->on('departments')
            ->onDelete('cascade');
            $table->integer('employee_id')->foreign()
            ->references('id')->on('employees')
            ->onDelete('cascade');
            $table->integer('calend_id')->foreign()
            ->references('id')->on('calends')
            ->onDelete('cascade');
            $table->date('date');
            $table->integer('type');
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
