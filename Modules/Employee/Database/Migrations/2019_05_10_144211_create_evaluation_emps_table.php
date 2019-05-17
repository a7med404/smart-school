<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationEmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_emps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('education_level')->unsigned();
            $table->integer('department_id')->foreign()->references('id')->on('departments');
            $table->integer('employee_id')->foreign()->references('id')->on('employees');
            $table->integer('item_id')->foreign()->references('id')->on('evaluation_items');
            $table->integer('real_degree')->unsigned();
            $table->integer('degree')->unsigned();
            $table->date('date');
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
        Schema::dropIfExists('evaluation_emps');
    }
}
