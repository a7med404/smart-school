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
            $table->unsignedBigInteger('managament_id')->foreign()
            ->references('id')->on('management')
            ->onDelete('cascade');
            $table->unsignedBigInteger('department_id')->foreign()
            ->references('id')->on('department')
            ->onDelete('cascade');
            $table->unsignedBigInteger('employee_id')->foreign()
            ->references('id')->on('employee')
            ->onDelete('cascade');
            $table->unsignedBigInteger('perission_id')->foreign()
            ->references('id')->on('emp_perission_names')
            ->onDelete('cascade');
            $table->time('from_hour');
            $table->time('to_hour');
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
