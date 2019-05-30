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
            $table->unsignedBigInteger('level_id')->foreign()
            ->references('id')->on('levels')
            ->onDelete('cascade');
            $table->unsignedBigInteger('department_id')->foreign()
            ->references('id')->on('departments')
            ->onDelete('cascade');
            $table->unsignedBigInteger('employee_id')->foreign()
            ->references('id')->on('employees')
            ->onDelete('cascade');
            $table->unsignedBigInteger('item_id')->foreign()
            ->references('id')->on('evaluation_items')
            ->onDelete('cascade');
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
